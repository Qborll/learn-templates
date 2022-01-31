<?php 

require "NotifierDecorator.php";

final class VKDecorator extends NotifierDecorator
{
    public function send($message){

        $message = parent::send($message);

        return "VK notification sending with text: {$message}";
    }
}