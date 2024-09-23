<?php

namespace App\Notifications\Newsletters;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;



/**
 * 
 * When a person finally unsubscribes from our newsletter : message to client
 * 
 */

class NewsletterUnsubscribedAutoResponder extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public array $data)
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
            ->subject('Unsubscription Confirmation')
            ->line('We hate to see you go, we had a lot planned for you')
            ->line(" Hi {$this->data['fullname']}")
            ->line(line: "You have successfully unsubscribed from our service. Feel free to resubscribe if you change your mind.")
            ->action('Subscribe', url(route('landingpage') . '#newsletter_section'))
            ->line("Best regards,")
            // ->line("The " . config('app.name') . "Team,")
            ->line('Thank you for using our application!')
            ->salutation(config('app.name') . ' ® Team,');
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
