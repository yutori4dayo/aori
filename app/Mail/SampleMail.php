<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($parameter)
    {
        $this->data = $parameter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('mail')
                  ->from({{env('MAIL_USERNAME')}})
                  ->subject('煽り運転ナンバー新規投稿')
                  ->with([
                      'region' => $this->data['Region'],
                      'Classification' => $this->data['Classification'],
                      'Distinction' => $this->data['Distinction'],
                      'maskednumber' => $this->data['maskednumber'],
                      'text' => $this->data['text'],
                    ]);
    }
}
