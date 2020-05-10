<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerification extends Mailable
{
    protected $user;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Verificación')
                    ->markdown('emails.markdown.verification')
                    ->with([
                        'level' => null,
                        'subject' => null,
                        'greeting' => null,
                        'salutation' => null,
                        'introLines' => [
                            'El registro esta casi listo. Clickear en el botón para validar el correo electrónico.',
                        ],
                        'outroLines' => [
                            'Una ves validado el correo electrónico, la cuenta quedara activada.',
                        ],
                        'actionText' => 'Verificar correo electrónico',
                        'actionUrl' => env('APP_URL') . '/verifyemail/' . $this->user->email_token,
                    ]);
    }
}
