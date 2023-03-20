
<?php

$list = [
  ["group"=>"山口県","list"=>[
                          ["name"=>"獺祭","description"=>"旭酒造。山口県民として誇れる日本酒。水みたいに飲みやすい。ニューヨーク蔵がもうすぐ完成！！するらしい。","url"=>"https://www.asahishuzo.ne.jp/"],
                          ["name"=>"雁木","description"=>"八百新酒造。私が20歳になって初めて飲んだ日本酒!一目惚れしちゃいましたね〜最初の一口目はフルーティーだけど、後から辛さがきていい感じです！","url"=>"https://www.yaoshin.co.jp/top/"],
                          ["name"=>"東洋美人","description"=>"飲んだことないので飲みたい","url"=>"https://toyobijin.jp/"]
                        ]
  ],
  ["group"=>"新潟県","list"=>[
                          ["name"=>"八海山","description"=>"出来立てほやほやの日本酒が飲みやすかった。","url"=>"https://www.hakkaisan.co.jp/"],
                          ["name"=>"吉乃川","description"=>"飲みやすい、摂田屋という場所がいい感じ","url"=>"https://yosinogawa.co.jp/cat_name/gokujo/h"],
                          ["name"=>"新之助","description"=>"新之助という品種のお米を使用。お米の味がほわっとする！","url"=>"https://takarayama-sake.co.jp/products/detail64.html"]
  ]
  ],
  ["group"=>"宮城県","list"=>[
                          ["name"=>"一ノ倉","description"=>"地産地消の逸品です。原料米のポテンシャルを最大限に生かすため2種類の酵母を使用しているらしい。飲んだことある気もする ","url"=>"hinokura.co.jp/news/6309"],
                          ["name"=>"墨廼江","description"=>"酒造りのテーマは「きれいで柔らかく気品漂う風味豊かなお酒」らしい。","url"=>"https://macaro-ni.jp/44718"],
                          ["name"=>"伯楽星","description"=>"ラベルがシンプルで渋いいい感じ。食中酒","url"=>"https://niizawa-brewery.co.jp/"]
                        ]
  ],
  ["group"=>"その他","list"=>[
                          ["name"=>"国士無双","description"=>"北海道のお酒。名前の通りのラベル。飲みやすかった","url"=>"https://takasagoshuzo.com/"],
                          ["name"=>"薩州正宗","description"=>"鹿児島県のお酒。美味しい","url"=>"https://www.hamadasyuzou.co.jp/kinzan/seshu_abouth"],
                          ["name"=>"想天坊","description"=>"微生物の力による微炭酸の日本酒が美味しかった","url"=>"http://www.soutenbou.jp/h"]
                        ]
  ]
  ];
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>大好きな日本酒</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
  <?php foreach ($list as $item) { ?>
    <h2 class="food_title"><?php echo $item["group"]; ?></h2>
    <ul>
      <?php $i = 0; ?>
      <?php foreach ($item["list"] as $foodList) { ?>
        <?php $i++; ?>
        <li>
        <h3 class="food_title type<?php echo $i; ?>">
          <a href="<?php echo $foodList["url"]; ?>" target="_blank">
            <?php echo $foodList["name"]; ?>
          </a>
        </h3>
        <div><?php echo $foodList["description"]; ?></div>
      </li>
      <?php } ?>
    </ul>

  <?php } ?>

</body>
</html>

$list = [
  ["group"=>"和食","list"=>[
                          ["name"=>"おでん","description"=>"練り物や野菜を良い味付けでにたもの。優しい味。家庭料理","url"=>"https://www.google.com/search?q=%E3%81%8A%E3%81%A7%E3%82%93&oq=%E3%81%8A%E3%81%A7%E3%82%93&aqs=chrome..69i57j0i512l2j0i433i512l3j0i512l3j0i3i4.3221j0j9&sourceid=chrome&ie=UTF-8"],
                          ["name"=>"厚焼き玉子","description"=>"卵を薄く焼き巻き重ねたもの。地方によって甘かったり塩辛かったりする","url"=>"https://www.sirogohan.com/recipe/atuyaki/"],
                          ["name"=>"寿司","description"=>"世界で親しまれている和食の代表。寿司ネタは魚が多いが肉や野菜も寿司ネタになる","url"=>"https://tabelog.com/osaka/C27213/rstLst/sushi/"]
                        ]
  ],
  ["group"=>"イタリアン","list"=>[
                          ["name"=>"ライスサラダ","description"=>"ご飯をサラダに混ぜてドレッシングで頂く","url"=>"https://www.google.com/search?q=%E3%83%A9%E3%82%A4%E3%82%B9%E3%82%B5%E3%83%A9%E3%83%80&oq=%E3%83%A9%E3%82%A4%E3%82%B9%E3%82%B5%E3%83%A9%E3%83%80&aqs=chrome..69i57j0i512l9.2615j0j4&sourceid=chrome&ie=UTF-8"],
                          ["name"=>"イカスミパスタ","description"=>"見た目が黒い。濃厚な味が特徴。","url"=>"https://www.kurashiru.com/recipes/ff93e334-64cf-47f7-96f1-a5975af47cfd"],
                          ["name"=>"ニョッキ","description"=>"じゃがいもでできている。チーズと絡めて食べる。パスタの一種","url"=>"https://chefgohan.gnavi.co.jp/detail/1369/"]
                        ]
  ],
  ["group"=>"中華","list"=>[
                          ["name"=>"ラーメン","description"=>"玉子麺と取り出しスープが一般的。世界中でアレンジされ様々な種類がある","url"=>"https://ja.wikipedia.org/wiki/%E3%83%A9%E3%83%BC%E3%83%A1%E3%83%B3"],
                          ["name"=>"ピータン","description"=>"独自の製法で作られるゆで卵。トッピングとしてよく使われる。","url"=>"https://macaro-ni.jp/44718"],
                          ["name"=>"麻婆豆腐","description"=>"四川省発祥と言われる唐辛子を使った豆腐料理","url"=>"https://ja.wikipedia.org/wiki/%E9%BA%BB%E5%A9%86%E8%B1%86%E8%85%90"]
                        ]
  ],
  ["group"=>"その他","list"=>[
                          ["name"=>"ギロス","description"=>"ギリシャ料理。ケバブやファラフェルなどをピタパンで挟んで食べる","url"=>"http://www.29notoyo.co.jp/w_gyros.html"],
                          ["name"=>"ヒンカリ","description"=>"東欧ジョージアなどでよく食べられる水餃子。牛肉がベース","url"=>"https://ja.wikipedia.org/wiki/%E3%83%92%E3%83%B3%E3%82%AB%E3%83%AA"],
                          ["name"=>"ガパオライス","description"=>"タイの屋台でよくみかけるバジルのチャーハン。卵焼きがのっている","url"=>"https://cookpad.com/recipe/2295952"]
                        ]
  ]
];