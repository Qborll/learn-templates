<?php 

require "Notifier.php";

final class BaseNotofier implements Notifier{

    public function send($message){
        return $message . PHP_EOL;
    }
}