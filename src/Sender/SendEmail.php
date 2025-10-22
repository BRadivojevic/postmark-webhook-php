<?php
namespace App\Sender;

final class SendEmail {
	public static function send(string $to, string $subject, string $html): array {
		$token = getenv('POSTMARK_SERVER_TOKEN') ?: '';
		$from  = getenv('DEFAULT_FROM') ?: 'noreply@example.com';
		$ch = curl_init('https://api.postmarkapp.com/email');
		curl_setopt_array($ch, [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => [
				'X-Postmark-Server-Token: '.$token,
				'Content-Type: application/json'
			],
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => json_encode([
				'From'=>$from,'To'=>$to,'Subject'=>$subject,'HtmlBody'=>$html
			])
		]);
		$body = curl_exec($ch);
		$err  = curl_error($ch);
		$code = (int)curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
		curl_close($ch);
		return [$code, $body, $err];
	}
}
