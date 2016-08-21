<?php

namespace App\LosOlivos\Mailers;

class ContactMailer extends Mailer {
    public function contact($user) {
        $user = (object) $user;

        $subject = 'Message from '.  $user->name;
        $view = 'emails.contact.mailer';
        $data = [
            'subject' => $subject,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'comments' => $user->comments
        ];

        return $this->sendToColetta($view, $data, $subject);
    }
}