function Area(width, height) {
    if (width > 0 && height > 0) {
      return width * height;
    }else{
        return 0;
    }
  }
  
  console.log(Area(3, 4));
  
  console.log(Area(-3, 4));


//下記のようにも書くことができるよ！初心者の方には、こちらの方が分かりやすいかも！
//返された結果を「result」という変数にいれて、その変数をコンソールで出力しているよ！

  function Area(width, height) {
    if (width > 0 && height > 0) {
      return width * height;
    }else{
        return 0;
    }
  }

  let result = Area(9,4);
  console.log(result);