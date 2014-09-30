## laravel 調査

* 関連テーブルまわりについて実装してみた。

関連テーブルの操作はかなり使いやすいと思う

## 使い方

### 環境設定

```
app/config/local/database.php
```

上記に合わせてDBを作成

```
bootstrap/start.php
```

上記にローカル環境の設定を行う

```
まずローカルのホスト名を調べる

$ hostname

上記コマンド結果をstart.phpの29行目に加える

$env = $app->detectEnvironment(array(
'local' => array('homestead', 'hoge-hostname'),

));
```

* migration & seed

```
php artisan migrate
php artisan db:seed
```

### サーバ起動

```
php artisan serve
```

### ブラウザで動かす

```
app/routes.php
```
上記を見ながらアクセスする

