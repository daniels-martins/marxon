<?php

namespace Tests\Feature;

use App\Models\User;
use App\Rules\Turnstile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class TurnstileVerificationTest extends TestCase
{
    public function test_turnstile_rule_passes_with_valid_token(): void
    {
        Http::fake([
            'https://challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response([
                'success' => true,
                'challenge_ts' => now()->toIso8601String(),
                'hostname' => '127.0.0.1',
            ], 200),
        ]);

        $validator = Validator::make([
            'cf-turnstile-response' => 'valid-turnstile-response',
        ], [
            'cf-turnstile-response' => ['required', new Turnstile],
        ]);

        $this->assertTrue($validator->passes());
    }

    public function test_turnstile_rule_fails_with_invalid_token(): void
    {
        Http::fake([
            'https://challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response([
                'success' => false,
                'error-codes' => ['invalid-input-response'],
            ], 200),
        ]);

        $validator = Validator::make([
            'cf-turnstile-response' => 'invalid-token',
        ], [
            'cf-turnstile-response' => ['required', new Turnstile],
        ]);

        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('cf-turnstile-response', $validator->errors()->toArray());
    }

    public function test_turnstile_rule_fails_when_cloudflare_service_errors(): void
    {
        Http::fake([
            'https://challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response(null, 500),
        ]);

        $validator = Validator::make([
            'cf-turnstile-response' => 'any-token',
        ], [
            'cf-turnstile-response' => ['required', new Turnstile],
        ]);

        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('cf-turnstile-response', $validator->errors()->toArray());
    }

    public function test_login_request_passes_validation_with_faked_turnstile_response(): void
    {
        Http::fake([
            'https://challenges.cloudflare.com/turnstile/v0/siteverify' => Http::response([
                'success' => true,
            ], 200),
        ]);

        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
            'cf-turnstile-response' => 'faked-token',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/dashboard');
    }
}
