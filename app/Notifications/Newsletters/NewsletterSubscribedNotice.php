<?php

namespace App\Notifications\Newsletters;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


/**
 * 
 * When a person joins our newsletter : message to admin
 * 
 */

class NewsletterSubscribedNotice extends Notification
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
            ->subject('Newsletter subscription Notification')
            ->line('The introduction to the notification.')
            ->greeting("Hello Admin, Someone just unsubscribed to our newsletter.")
            ->line('On this ' . ucfirst(getNiceAdjective()) . ' day, someone visited our website @ ' . config('app.url'))
            // ->action('Notification Action', url('/'))
            ->line('Below is the information provided')
            ->line('VISITOR INFORMATION!')
            ->line('Visitor First Name : ' . $this->data['fullname'])
            ->line('Visitor Email : ' . $this->data['email'])
            ->line('Poor Conversion 👎')

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
