<?php

session_start();

// エラーメッセージ用
$error_message = [];

// POSTされたデータを受け取る
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$phone = $_POST["phone"] ?? "";
$content = $_POST["content"] ?? "";

// 入力チェック
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 名前チェック
    if (empty($name)) {
        $error_message["name"] = "名前を入力してください";
    }

    // 電話番号チェック
    if (empty($phone)) {
        $error_message["phone"] = "電話番号を入力してください";
    } elseif (!is_numeric($phone)) {
        $error_message["phone"] = "電話番号は数値を入力してください";
    }

    // メールアドレスチェック
    if (empty($email)) {
        $error_message["email"] = "メールアドレスを入力してください";
    } elseif (!preg_match('/\A[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}\z/', $email)) {
        $error_message["email"] = "不正な形式のメールアドレスです";
    }

    // お問い合わせ内容チェック
    if (empty($content)) {
        $error_message["content"] = "お問い合わせ内容を入力してください";
    }
}

// エラーがあった場合
if (!empty($error_message)) {

    // 入力内容をセッションに保存
    $_SESSION["input_data"] = $_POST;

    // エラーメッセージをセッションに保存
    $_SESSION["error_message"] = $error_message;

    // 入力画面へ戻る
    header("Location: PHP-lesson3-1-form.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-lesson3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="header">

    <div class="header-left">
        Koyasu-portfolio
    </div>

    <div class="header-right">
        <ul class="list">
            <li>home</li>
            <li>portfolio</li>
            <li class="nowpage">contact</li>
        </ul>
    </div>

</div>


<div class="main">

    <div class="contact-form">

        <div class="form-title">
            お問い合わせ確認
        </div>


        <div class="form-item">
            名前
        </div>

        <div>
            <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
        </div>


        <div class="form-item">
            メールアドレス
        </div>

        <div>
            <?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?>
        </div>


        <div class="form-item">
            電話番号
        </div>

        <div>
            <?php echo htmlspecialchars($phone, ENT_QUOTES, "UTF-8"); ?>
        </div>


        <div class="form-item">
            内容
        </div>

        <div>
            <?php echo nl2br(htmlspecialchars($content, ENT_QUOTES, "UTF-8")); ?>
        </div>


        <!-- 送信ボタン -->
        <form action="PHP-lesson3-3-success.php" method="post">

            <!-- 次のページへデータを渡す -->
            <input type="hidden" name="name"
                value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>">

            <input type="hidden" name="email"
                value="<?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?>">

            <input type="hidden" name="phone"
                value="<?php echo htmlspecialchars($phone, ENT_QUOTES, "UTF-8"); ?>">

            <input type="hidden" name="content"
                value="<?php echo htmlspecialchars($content, ENT_QUOTES, "UTF-8"); ?>">


            <div class="check">

                <p class="btn">

                    <span>
                        <input type="submit" value="送信">
                    </span>

                </p>

            </div>

        </form>


        <!-- 戻るボタン -->
        <form method="post" action="PHP-lesson3-1-form.php">

            <div class="box_check">

                <p class="btn">

                    <span>
                        <input type="submit" value="戻る">
                    </span>

                </p>

            </div>

        </form>


    </div>

</div>


<div class="footer">

    <div class="footer-left">

        <ul class="list">
            <li>home</li>
            <li>portfolio</li>
            <li class="nowpage">contact</li>
        </ul>

    </div>

</div>

</body>

</html>
