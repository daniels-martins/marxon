<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewsletterAutoResponder extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Welcome to Our Newsletter')
            ->line(" Hi [Subscriber's Name]")
            ->line("Thank you for subscribing to [Newsletter Name]! We’re thrilled to have you with us.")
            ->line("To ensure you never miss an update, please add us to your contacts and check your spam folder. If our emails land there, moving them to your inbox will help keep you informed about our latest news, tips, and exclusive updates.")
            ->action('Notification Action', url('/about'))
            ->line("If you ever wish to update your preferences or unsubscribe, you can do so using the links at the bottom of our emails. Thank you once again for joining us! If you have any questions, feel free to reach out.")
            ->line("Best regards,")
            ->line("The ${config('app.name')} Team,")
            ->line(config('app.url'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
