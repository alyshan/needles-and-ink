<?php

require 'vendor/autoload.php';

$plates = new League\Plates\Engine('app/templates');

echo $plates->render('master');