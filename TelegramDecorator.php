<?php 

require "NotifierDecorator.php";

final class TelegramDecorator extends NotifierDecorator
{
    public function send($message){

        $message = parent::send($message);

        return "Telegram notification sending with text: {$message}";
    }
}