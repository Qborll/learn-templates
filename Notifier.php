<?php 

declare(strict_types=1);

interface Notifier {

    public function send($message);

}