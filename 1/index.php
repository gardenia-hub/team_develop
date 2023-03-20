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
  <title>おすすめ料理</title>
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