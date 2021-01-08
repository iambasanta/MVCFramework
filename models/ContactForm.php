<?php

namespace app\models;

use basanta\phpmvc\Model;

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $message = '';
    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'message' => [self::RULE_REQUIRED],
        ];
    }
    public function lables(): array
    {
        return [
            'subject' => 'Your Subject',
            'email' => 'Your Email',
            'message' => 'Your Message',
        ];
    }

    public function send()
    {
        return true;
    }
}
