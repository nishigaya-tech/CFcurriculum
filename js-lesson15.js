//例を出して解説するね！
//下記のように３回「たまごやきを」作りたい時は今までだと、下記の様に書く必要があった。

//１回目
console.log('①卵を割る');
console.log('②卵をとく');
console.log('③フライパンに流し込み焼いていく');
console.log('④味付け');
console.log('⑤形を整える');

//２回目
console.log('①卵を割る');
console.log('②卵をとく');
console.log('③フライパンに流し込み焼いていく');
console.log('④味付け');
console.log('⑤形を整える');

//３回目
console.log('①卵を割る');
console.log('②卵をとく');
console.log('③フライパンに流し込み焼いていく');
console.log('④味付け');
console.log('⑤形を整える');




//上記だと全て書かないといけないから大変。しかし関数を使えば

function tamagoyaki() {
    console.log('①卵を割る');
    console.log('②卵をとく');
    console.log('③フライパンに流し込み焼いていく');
    console.log('④味付け');
    console.log('⑤形を整える');
  }
  
  //１回目（下記の様に、ボタンを押す）
  tamagoyaki();//ここがボタンに当たります。この行の記述をして初めて９〜１５行目が実行されます。

  //２回目（下記の様に、ボタンを押す）
  tamagoyaki();

  //３回目（下記の様に、ボタンを押す）
  tamagoyaki();

  //この様に非常に簡単でコードの数が少なくなるのもあり、見やすくなる。