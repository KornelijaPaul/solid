<?php

declare(strict_types=1);

class SendinblueMailer
{
    public function getMessage(): string
    {
        return 'Message';
    }
}

class MessageSender
{
    private $sendinblueMailer;

    public function __construct(SendinblueMailer $sendinblueMailer)
    {
        $this->sendinblueMailer = $sendinblueMailer;
    }

    public function send(): void
    {
        $message = $this->sendinblueMailer->getMessage();
        //... do the sending
    }
}
