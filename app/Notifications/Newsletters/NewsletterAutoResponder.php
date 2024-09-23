<?php

namespace App\Notifications\Newsletters;

use Illuminate\Bus\Queueable;
use Illuminate\Support\HtmlString;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;



/**
 * 
 * When a person joins our newsletter : message to client
 * 
 */

class NewsletterAutoResponder extends Notification
{
    use Queueable;

    /**
     * 
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
            ->subject('Welcome to Our Newsletter')
            ->line(" Hi {$this->data['fullname']}")
            ->line("Thank you for subscribing to our Newsletter! We’re thrilled to have you with us.")
            ->line("To ensure you never miss an update, please add us to your contacts and check your spam folder. If our emails land there, moving them to your inbox will help keep you informed about our latest news, tips, and exclusive updates.")
            ->action('Learn more', url('/about'))
            ->line("If you ever wish to update your preferences or unsubscribe, you can do so using the links at the bottom of our emails. Thank you once again for joining us! If you have any questions, feel free to reach out.")
            ->line("Best regards,")
            // ->line("The " . config('app.name') . "Team,")
            ->line('Thank you for using our application!')
            ->salutation(config('app.name') . ' ® Team,')
            ->line(new HtmlString('<a href=' . route("newsletter.unsubscribe.request", $this->data['email']) . ' style="display:block; color:red; margin: 0 auto; width: 180px;">click here to unsubscribe</a>'));
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
