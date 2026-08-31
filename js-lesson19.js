const man = {
    name: ["ジェイコブ", "モーガン"],
    age: 100,
    sexial: '男',
    favorite: '刺身',
  };
  

  const human = {
    anime: {
      man: {
        onepiece: 'ゾロ',
        Naruto: 'サスケ',
      },
      girl: {
        kimetu: '禰豆子',
        anpanman: 'ドキンちゃん',
      }
    },
  };
  
  console.log(human.anime.man.onepiece); // 'ゾロ'を出力
  console.log(human.anime.girl.kimetu); // '禰豆子'を出力
  
  human.anime.man.onepiece = 'ルフィー'; // 'onepiece'の値を'ルフィー'に更新