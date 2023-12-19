<?php

namespace App\Listeners;

use App\Events\ContactmailProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendContactmailNotification implements ShouldQueue
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
    public function handle(ContactmailProcessed $event): void
    {
        $to_email = $event->data['to_email'];

        try{
            $mail_status = Mail::send('mail.backend.contactMail', $event->data, function($message) use($to_email){
                $message->to($to_email)
                    ->subject('New Contact Query Arrived | ' . env('APP_NAME'));
                $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            });

            //If error from Mail::send
            if($mail_status->failures > 0){
                //Fail for which email address...
                foreach(Mail::failures() as $address) {
                    print 'error - ' . $address . ', ';
                }
                return;
            }
        }
        catch(\Exception $e){
            // Get error here
            //print 'roy - ' . $e->getMessage();
            return;
        }
    }
}
