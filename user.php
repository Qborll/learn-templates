<?php

// spl_autoload_register(function ($class_name) {
//     include $class_name . '.php';
// });

require_once("");

const message_for_notification="Hello world!";

$basemotofier= new BaseNotofier();

$telegram= new TelegramDecorator($basemotofier);

$VK= new VKDecorator($basemotofier);

$instagram= new InstagramDecorator($basemotofier);

echo $telegram->send(message_for_notification);

echo $VK->send(message_for_notification);

echo $instagram->send(message_for_notification);