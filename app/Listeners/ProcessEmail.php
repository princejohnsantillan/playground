<?php

namespace App\Listeners;

use App\Models\Testimonial;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notifiable\ReceiveEmail\Events\EmailReceived;

class ProcessEmail
{

    public function handle(EmailReceived $event): void
    {
        $message = $event->email->parse()->getMessageBody();
        $fromAddress = $event->email->parse()->getAddresses('from')[0]['address'];
        $fromName = $event->email->parse()->getAddresses('from')[0]['display'];

        Testimonial::create([
            'name' => $fromName,
            'email' => $fromAddress,
            'body' => $message,
        ]);
    }
}
