<?php

require_once ('Chien.php');
require_once ('Chat.php');

$chien1 = new Chien('max');
$chien1->parler();
$chat1 = new Chat('kitty');
$chat1->parler();

var_dump($chat1, $chien1);