<?php

interface Sender
{
    public function send($message);
}

class Mailer implements Sender
{
    public function send($message)
    {
        // sending mail
    }
}

class SMSer implements Sender
{
    public function send($message)
    {
        // sending SMS
    }
}

class SendWelcomeMessage
{
    private $sender;

    /**
     * SendWelcomeMessage constructor.
     * @param $sender
     */
    public function __construct(Sender $sender)
    {
        $this->sender = $sender;
    }


    public function sendMessage($user)
    {
        $message = "Welcome {$user->name}";
        $this->sender->send($message);
    }
}

$welcomeMessage = new SendWelcomeMessage(new SMSer());