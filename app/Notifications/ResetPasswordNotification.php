<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends ResetPassword
{
    /**
     * Build the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Password - Rantox Digital')
            ->greeting('Hello 👋')
            ->line('You requested a password reset for your account.')
            ->action('Reset Password', url(route('password.reset', [
                'token' => $this->token,
                'email' => $notifiable->email,
            ], false)))
            ->line('This link will expire in 60 minutes.')
            ->line('If you didn’t request this, no further action is required.')
            ->salutation('Regards, Rantox Digital 🚀');
    }
}