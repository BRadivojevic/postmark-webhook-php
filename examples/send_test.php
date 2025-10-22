<?php
require __DIR__.'/../vendor/autoload.php';
[$code,$body,$err] = App\Sender\SendEmail::send('you@example.com','Hello','<b>It works</b>');
echo "HTTP $code\n$err\n$body\n";
