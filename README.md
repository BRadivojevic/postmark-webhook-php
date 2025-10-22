# Postmark Webhook + Sender (PHP)

Minimal inbound webhook receiver + simple outbound email sender via Postmark API.

## Features
- public/webhook.php logs inbound JSON
- src/Sender/SendEmail.php sends emails
- Env-driven server token & default sender

## Quick Start
cp .env.example .env
composer install
php -S localhost:8082 -t public
php examples/send_test.php
