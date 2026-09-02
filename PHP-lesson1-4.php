<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1-4</title>
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

    // 1. $numberという配列を作り、’1’、’2’、’3’の順に入れて、
    // ２番目の値を出力し、その後、’50’ を追加して下さい。
    $number = [1, 2, 3];
    echo $number[1] . "<br>";
    $number[] = 50;

    // 2. $dogという連想配列を作り、dogというキーに値ミニチュアダックス,
    // mouseというキーに値ミッキー、catというキーに値ライオンを代入し、
    // dogの値を出力して下さい。
    $dog = [
    'dog' => 'ミニチュアダックス',
    'mouse' => 'ミッキー',
    'cat' => 'ライオン'];
    echo $dog['dog'] . "<br>";

    // 3.for文を用いて、80から105までの数値を出力して下さい。
    for ($i = 80; $i <= 105; $i++) {
    echo $i . "<br>";}

    // 4.$a = 2 とし、変数2~77までの奇数をwhile文を用いて、出力して下さい。
    $a = 2;
    while ($a <= 77) {
    if ($a % 2 == 1) {
        echo $a . "<br>";}
    $a++;}

    // 5.for文を用いて、1から100の値を出力して下さい。ただし、75以上の値は表示しない様にして下さい。
    for ($i = 1; $i < 75; $i++) {
    echo $i . "<br>";}


    // 6.for文を用いて、1から100の値を出力して下さい。
    // ただし、5の倍数の場合は処理を飛ばし、表示しない様にして下さい。
    for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        continue;}
    echo $i . "<br>";}

?>
</div>
</body>
</html>