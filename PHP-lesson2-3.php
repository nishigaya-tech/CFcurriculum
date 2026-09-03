<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-5</title>
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

    /*。

     ブラックジャックのプログラムを作成し、相手、自分の点数を表示し、勝敗を出力して下さい。
     カードの追加はなしとし、自分と相手にランダムで２枚ずつのカードを配布し、勝敗を判定します。
     ****ルール****
     「カードの合計が21点」に近ければ勝利となります。
     ただし「カードの合計が21点」を超えてしまうと、その時点で負けとなります。
 
     【カードの数え方】
     ”2～9”まではそのままの数字、”10・J・Q・K”は「すべて10点」と数えます。
     また、”A”（エース）は「1点」もしくは「11点」のどちらに数えても構いません。
 
     【特別な役】
     最初に配られた2枚のカードが　”Aと10点札”　で21点が完成していた場合を『ブラックジャック』といい、その時点で勝ちとなります。
 
     [出力例]
     自分：18点　対戦相手：17点 　勝敗：あなたの勝ちです。
     自分：21点　対戦相手：20点　勝敗：ブラックジャック！あなたの勝ちです。
     自分：20点　対戦相手：20点　勝敗：引き分けです。
    */

    function blackJack()
    {
      // トランプカードを格納した配列、マークの考慮はなし
      $cards = ["A", "J", "Q", "K", 2, 3, 4, 5, 6, 7, 8, 9, 10];
      // 自分のカード
      $player = [];
      // 相手のカード
      $opponent = [];
    }
    

    //この下に記述してください
    function calculateScore($hand)
    {
        $score = 0;
        $aceCount = 0;

        foreach ($hand as $card) {
            if (is_numeric($card)) {
                $score += $card;
            } elseif ($card === "A") {
                $aceCount++;
                $score += 11; // Aを11点として計算
            } else {
                $score += 10; // J, Q, Kは10点
            }
        }

        // Aの点数を調整
        while ($score > 21 && $aceCount > 0) {
            $score -= 10; // Aを1点として計算
            $aceCount--;
        }

        return $score;
    }
    
    ?>
<div>
</body>
</html>