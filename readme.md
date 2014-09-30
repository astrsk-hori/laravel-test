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

