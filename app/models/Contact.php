<?php

use Phalcon\Mvc\Model;

class Contact extends Model
{
    public $id;
    public $name;
    public $email;
    public $subject;
    public $message;
    public $created_at;

    public function initialize()
    {
        $this->setSource('contacts');
    }

    public function beforeCreate()
    {
        $this->created_at = date('Y-m-d H:i:s');
    }
}