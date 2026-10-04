<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Translation\PotentiallyTranslatedString;
use Throwable;

class Turnstile implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value)) {
            $fail('The Turnstile verification failed. Please try again.');

            return;
        }

        try {
            $secret = config('services.turnstile.secret');

            $response = Http::asForm()
                ->timeout(10)
                ->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                    'secret' => $secret,
                    'response' => $value,
                    'remoteip' => request()->ip(),
                ]);

            if ($response->failed() || ! $response->json('success')) {
                $fail('The Turnstile verification failed. Please try again.');
            }
        } catch (Throwable $e) {
            report($e);
            $fail('Unable to complete Turnstile verification. Please try again.');
        }
    }
}
