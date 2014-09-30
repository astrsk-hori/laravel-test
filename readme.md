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
composer install
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

## laravelを対話式で使う

```
php artisan psysh
```

上記コマンド実行でlaravelのmodelなどがコマンド実行可能になる

```
ᐅ php artisan psysh
Psy Shell v0.1.12 (PHP 5.5.17 — cli) by Justin Hileman
>>> User::find(1);
=> <User #00000000242b99eb000000013f42a3cf> {
       id: 1,
       name: "hoge",
       ema
}
```
