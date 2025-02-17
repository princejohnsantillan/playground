<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notifiable\ReceiveEmail\Events\EmailReceived;

class ProcessEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmailReceived $event): void
    {
        $subject = $event->email->parse()->getHeader('Subject');
        $message = $event->email->parse()->getMessageBody();
        $fromAddress = $event->email->parse()->getAddresses('from')[0]['address'];
        $fromName = $event->email->parse()->getAddresses('from')[0]['display'];

        $toEmail = $event->email->parse()->getAddresses('to')[0]['address'];

        logger([
            'name' => $fromName,
            'from' => $fromAddress,
            'to' => $toEmail,
            'subject' => $subject,
            'message' => $message,
        ]);
    }
}
