<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1-2</title>
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
    

    // 1. $sumという変数を宣言して、100 + 20を代入し、出力して下さい。
    $sum = 100 + 20;
    echo $sum . "<br>";

    // 2. $x に50を代入し、$xに30を足した値を出力して下さい。
    $x = 50;
    $x += 30;
    echo $x . "<br>";

    // 3. $y に30を代入し、$yを8で割った余りを出力して下さい。
    $y = 30;
    echo $y % 8 . "<br>";
    

    // 4. 文字列 小さな！ と文字列 柴犬！ を連結し出力して下さい。
    $size = '小さな！';
    $dog = '柴犬！';
    echo $size . $dog . "<br>";


    // 5. 変数展開を使用して、以下の例文の内容を出力して下さい。○○の部分に変数が入ります。（変数名や値は任意）
    //     出力例)  天才的な○○様♪♫
    $name = '田中';
    echo "天才的な{$name}様♪♫<br>";

?>
</div>
</body>
</html>