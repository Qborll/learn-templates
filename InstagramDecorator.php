<?php 

require "NotifierDecorator.php";

final class InstagramDecorator extends NotifierDecorator
{
    public function send($message){

        $message = parent::send($message);

        return "Instagram notification sending with text: {$message}";
    }
}