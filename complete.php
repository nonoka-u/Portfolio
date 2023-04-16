<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("contact.html");
	exit();
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//送信先アドレス
$to = $_POST['email'];
//メール件名
$subject = "お問い合わせありがとうございます。";
$message = <<< EOM
お問い合わせありがとうございます。

以下の内容で承りました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["name"]}

【 メール 】
{$_POST["email"]}

【 電話番号 】
{$_POST["tel"]}

【 お問い合わせ種別 】
{$_POST["type"]}

【 ご希望のご連絡方法 】
{$_POST["contact"]}

【 メッセージ 】
{$_POST["message"]}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
//送信元
$headers = "From: nnk713@icloud.com";
//メール送信
mb_send_mail($to, $subject, $message, $headers); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>完了画面</title>
<style type="text/css">
	body {
		background-color: #f9fff2;
	}
</style>
</head>
<body>
	<h2>お問い合わせ完了</h2>
 	<p>お問い合わせありがとうございました。</p>
 	<p>今後とも当サイトをよろしくお願いいたします。</p>
 	<p><a href="index.html">トップへ</p>
</body>
</html>