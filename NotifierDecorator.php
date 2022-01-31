<?php

require "Notifier.php";

class NotifierDecorator implements Notifier{

    private Notifier $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier=$notifier;
    }                           

    public function send($message){

        return $this->notifier->send($message);
    }
}