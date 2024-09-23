<?php

namespace App\Notifications\Newsletters;

use Illuminate\Bus\Queueable;
use Illuminate\Support\HtmlString;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


/**
 * 
 * When a person wants to unsubscribe from our newsletter : message to client
 * 
 */

class NewsletterUnsubscribeRequestAutoResponder extends Notification
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
            ->subject('Unsubscription Request')
            ->line(" Hi {$this->data['fullname']}")
            ->line('We hate to see you go, we had a lot planned for you')
            ->line(line: "We got a request from you that you wish to unsubscribe from our service")
            ->line(line: "If this was not you, or if this was a mistake, kindly ignore this message, no action is needed.")
            ->line("However, if you're sure you don't want to get tips, tricks and updates from us in the future,")
            ->line("Click on the button below to unsubscribe from our newsletter.")
            ->action('Unsubscribe', url(route('newsletter.unsubscribe.confirm', $this->data['email'])))
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
