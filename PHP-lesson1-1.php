<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1-1</title>
</head>
<body>
<div class="m-5">
<button onclick="history.back()">chapter4メニュー画面に戻る</button>

<?php
    /*
       課題：
        - 以下のコメントに従いコードを記述してください！
            ※各設問の回答の最後には改行を入れましょう。
            <br>タグをHTMLとして出力することで改行ができます。
        - このファイルをWebブラウザで開き、問題が無ければ保存して、このファイルを提出してください。
        dockerのlesoon4-phpコンテナを起動　→　http://localhost:8000/　にアクセス　→　該当のリンクをクリック　→　結果を確認
    */


    // 1. 私は現在カリキュラムを受けています! をechoしてください。
    echo "私は現在カリキュラムを受けています!<br>";

    // 2. 105 × 43 の答えをechoしてください。
    echo 105 * 43 . "<br>";

    // 3. 80 ÷ 44 の余り をechoしてください。
    echo 80 % 44 . "<br>";

    // 4. 9 + 8 を数値としてechoしてください。
    echo 9 + 8 . "<br>";

    // 5. 9 + 8 を文字列としてechoしてください。
    echo "9 + 8" . "<br>";

?>

</div>
</body>
</html>