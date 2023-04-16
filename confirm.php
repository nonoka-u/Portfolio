<!--  問い合わせフォーム確認画面-->
<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: contact.html");
    exit();
}

// 各項目の内容取得
$name = $_POST['name']
$email = $_POST['email']
$tel = $_POST['tel']
$type = $_POST['type']
$contact = $_POST['contact']
$massage = $message['massage']

<?php<?>
<!-- DOCTYPE html -->
<html>
    <head>
        <meta charset = "utf-8">
        <title>確認画面</title>
    </head>
    <body>
        <form action="complete.php" method = "post">
            <h2>お問い合わせ内容確認</h2>
            <div class = "input-area">
                <p>お名前</p>
                <?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
            </div>
            <div class = "input-area">
                <p>メールアドレス</p>
                <?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
            </div>
            <div class = "input-area">
                <p>お電話番号</p>
                <?php echo $tel;?>
            </div>  
            <div class = "input-area">
                <p>お問い合わせ種別</p>
                <?php echo $type;?>
            </div>  
            <div class = "input-area">
                <p>ご希望のご連絡方法</p>
                <?php echo $contact;?>
            </div> 
            <div class = "input-area">
                <p>メッセージ</p>
                <?php echo nl2br(htmlspecialchars($message,ENT_QUOTES,'UTF-8'));?>
            </div>     
            <div class  ="input-area">
                <input type='button' onclick = 'history.back()' value = '戻る' class  ="btn-border">
                <input type="submit" name = "submit" value = "送信" class  ="btn-border">
                <input type="hidder" name = "name" value = "<?php echo $name;?>">
                <input type="hidder" name = "email" value = "<?php echo $email;?>">
                <input type="hidder" name = "tel" value = "<?php echo $tel;?>">
                <input type="hidder" name = "type" value = "<?php echo $type;?>">
                <input type="hidder" name = "contact" value = "<?php echo $contact;?>">
                <input type="hidder" name = "message" value = "<?php echo $message;?>">
            </div>
        </form>
    
    </body>
</html>