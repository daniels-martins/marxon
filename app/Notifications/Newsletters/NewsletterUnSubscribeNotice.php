<?php

namespace App\Notifications\Newsletters;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;



/**
 * 
 * When a person wants to unsubscribe from our newsletter : message to admin
 * 
 */

class NewsletterUnSubscribeNotice extends Notification
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
            ->line(" Hi Admin,")
            ->line(line: " {$this->data['fullname']} requested to unsubscribe from our service")
            ->line("Best regards,")
            // ->line("The " . config('app.name') . "Team,")
            ->line('Gotta up your game, we\'re loosing money !')
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
