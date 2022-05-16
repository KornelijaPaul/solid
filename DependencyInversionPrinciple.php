<?php

declare(strict_types=1);

interface Mailer
{
    public function getMessage(): string;
}

class SmtpMailer implements Mailer
{
    public function getMessage(): string
    {
        return 'Smtp Message';
    }
}

class SendGridMailer implements Mailer
{
    public function getMessage(): string
    {
        return 'SendGrid Message';
    }
}

class MessageSender
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(): void
    {
        $message = $this->mailer->getMessage();
        //... do the sending
    }
}
