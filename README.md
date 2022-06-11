# ImageProxy

画像をプロキシします

## How to use

```bash
https://[your domain]/?source=<url>
```

`source` パラメーターにURLを指定するだけで使えます

## How to deploy
1. このリポジトリをクローンします。
2. 中身を全てドキュメントルートに移動します。
3. `config.php` で設定をします。[設定方法](#setup)

## Setup

プロキシに関する設定ができます

### CORS

アクセスできるオリジンを制限できます

```php
// Default
$CORS = "*";

// Example
$CORS = "https://example.com";

```

### User Agent

データを取得する際のユーザーエージェントを設定できます。

```php
// Default
$UA = "ImageProxy_v1.0.0";

// Example
$UA = "Example_Bot";
```
