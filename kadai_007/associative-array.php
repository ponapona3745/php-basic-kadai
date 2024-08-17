<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編_kadai007</title>
</head>

<body>
    <p>
        <?php
        // キーと値を代入した連想配列を作成する
        $vegetable_data = ['name'=>'onion', 'price'=>'200', 'weight'=>'160'];

        // 連想配列を出力する
        print_r($vegetable_data);
        ?>
    </p>
    
</body>
</html>