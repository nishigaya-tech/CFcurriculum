<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-2</title>
    <link rel="stylesheet" href="style.css">
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
    /*  
       お釣りの計算プログラムを作成して下さい。
        所持金は2万円札とし、1円以上の任意の値段を設定した商品を購入した際のおつり（内訳）を
        出力して下さい。
        使用するお金は五千円札、千円札、500円玉、100円玉、50円玉、10円玉、5円玉、1円玉、とします。
    
        出力例
        商品の値段：4000円

        おつり内訳
        五千円札　１枚
        千円札　１枚
    */

    //この下に記述してください
    $持金 = 20000;
    $商品価格 = 4000;
    $おつり = $持金 - $商品価格;

    echo "商品の値段：" . $商品価格 . "円<br><br>";
    echo "おつり内訳<br>";

    $札の額 = [5000, 1000, 500, 100, 50, 10, 5, 1];
    foreach ($札の額 as $札) {
        $枚数 = intval($おつり / $札);
        if ($枚数 > 0) {
            echo $札 . "円札　" . $枚数 . "枚<br>";
            $おつり %= $札;
        }
    }
    
?>
<div>
</body>
</html>