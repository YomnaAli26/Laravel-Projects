<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCreatedNotification extends Notification
{
    use Queueable;

    protected $order;

    /**
     * Create a new notification instance.
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
//        $channels = ['database'];
//        if ($notifiable->notification_preferences['order_created']['sms'] ?? false)
//        {
//            $channels[] = 'vonage';
//        }
//        if ($notifiable->notification_preferences['order_created']['mail'] ?? false)
//        {
//            $channels[] = 'mail';
//
//        }
//        if ($notifiable->notification_preferences['order_created']['sms'] ?? false)
//        {
//            $channels[] = 'broadcast';
//
//        }
//        return $channels;

    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $address = $this->order->billingAddress;
        return (new MailMessage)
            ->subject("New Order #{$this->order->number}")
            ->greeting("Hi {$notifiable->name},")
            ->line("A new order #{$this->order->number} created by {$address->name}
                    from {$address->country_name}.")
            ->action('View Order', url('/dashboard'))
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
