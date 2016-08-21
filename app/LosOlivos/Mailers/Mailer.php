<?php

namespace App\LosOlivos\Mailers;

abstract class Mailer {

    public function sendToColetta($view, $data, $subject) {
        return \Mail::send($view, $data, function($message) use($subject, $data) {
           $message->to('scotthummel@icloud.com')
               ->from($data['email'])
               ->subject($subject);
        });
    }
}