<?php

namespace App\models;

use App\Core\Model;

class ContactModel extends Model
{   
    public string $subject = '';
    public string $email = '';
    public string $message = '';

    public function contact()
    {   
        // vérifier si le user

        // envoi du message
        echo "You are message has been sent";
    }

    public function rules(): array
    {
        return [
            'email' =>  [self::RULE_REQUIRED, self::RULE_EMAIL],
            'subject' =>  [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 40]],
            'message' =>  [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 20], [self::RULE_MAX, 'max' => 200]]
        ];
    }
}