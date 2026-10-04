<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__.'/web_backup.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Mail\TestResendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Resend delivery test routes
Route::get('/test-mail', function (Request $request) {
    $recipient = $request->query('email', config('app.dev_email', 'marxoan7@gmail.com'));
    $mailer = $request->query('mailer', config('mail.default'));

    try {
        Mail::mailer($mailer)->to($recipient)->send(new TestResendMail('Direct (Synchronous)', [
            'mailer' => $mailer,
            'queue_driver' => config('queue.default'),
            'timestamp' => now()->toDateTimeString(),
        ]));

        return response()->json([
            'status' => 'success',
            'mode' => 'synchronous (no queue)',
            'message' => 'Direct email dispatched successfully.',
            'recipient' => $recipient,
            'mailer' => $mailer,
            'transport' => config("mail.mailers.{$mailer}.transport"),
            'timestamp' => now()->toDateTimeString(),
        ]);
    } catch (Throwable $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Failed to send synchronous email: '.$e->getMessage(),
            'mailer' => $mailer,
        ], 500);
    }
})->name('test.mail.sync');

Route::get('/test-mail-queue', function (Request $request) {
    $recipient = $request->query('email', config('app.dev_email', 'marxoan7@gmail.com'));
    $mailer = $request->query('mailer', config('mail.default'));
    $queueDriver = config('queue.default');

    try {
        Mail::mailer($mailer)->to($recipient)->queue(new TestResendMail('Queued (Database)', [
            'mailer' => $mailer,
            'queue_driver' => $queueDriver,
            'timestamp' => now()->toDateTimeString(),
        ]));

        return response()->json([
            'status' => 'success',
            'mode' => 'queued',
            'message' => 'Email pushed to queue successfully.',
            'recipient' => $recipient,
            'mailer' => $mailer,
            'queue_driver' => $queueDriver,
            'note' => 'Ensure "php artisan queue:work" is active in production to process database jobs.',
            'timestamp' => now()->toDateTimeString(),
        ]);
    } catch (Throwable $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Failed to queue email: '.$e->getMessage(),
            'queue_driver' => $queueDriver,
        ], 500);
    }
})->name('test.mail.queue');
