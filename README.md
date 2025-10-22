# Postmark Webhook + Sender (PHP)
Minimal inbound webhook + sending example.

## Run
```bash
cp .env.example .env
composer install
php -S localhost:8082 -t public
php examples/send_test.php

## C) Commit & push
```bash
git add .
git commit -m "Initial: Postmark webhook + sender"
git push -u origin main
