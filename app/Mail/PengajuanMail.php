<?php

namespace App\Mail;

use App\Permintaan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PengajuanMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Permintaan $permintaan)
    {
        $this->permintaan = $permintaan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('serviceac@gmail.com', 'Jasa Service ac')
                    ->markdown('emails.payment')
                    ->with('permintaan', $this->permintaan);
    }
}
