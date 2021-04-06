<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendSemiAdminStatusUpdateNotification extends Notification
{
    use Queueable;

    protected $supervisor;
    protected $form_id;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($supervisor, $form_id)
    {
        $this->supervisor = $supervisor;
        $this->form_id = $form_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            "message" => "{$this->supervisor->f_name} has updated the status of form.",
            "type" => "semi-admin-status",
            "form_id" => $this->form_id,
        ];
    }
}
