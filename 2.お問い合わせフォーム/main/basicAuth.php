<?php
// passwordを記録したファイルの場所
// パスワード（暗号化）

echo __FILE__;
// 現在のPATHを表示
echo '<br>';
echo(password_hash('password123', PASSWORD_BCRYPT));

/*
password_hash()
パスワードを暗号化する関数
第一引数：パスワード
第二引数：暗号化アルゴリズム
返り値：暗号化されたパスワード

PASSWORD_BCRYPT
Blowfish暗号をベースにした強力なパスワードハッシュ関数...


フォルダ：maintenanceにてhtaccessとhtpasswdを作成し、パスワードを記録したファイルを作成する。ファイルbasicAuth.phpにアクセスする際の認証方法を設定する

.htaccessファイルにて認証を行う。下記はファイル内容

AuthType Basic
AuthName "Enter ID & Password"
AuthUserFIle C:\xampp\htdocs\phpToLaravel\2.お問い合わせフォーム\maintenance\.htpasswd
require valid-user

AuthtypeでBasic認証を行う。
AuthNameで認証名を設定する。
AuthUserFIleでパスワードファイルを設定する。
require valid-userで認証方式を設定する。

.htpasswdファイルにてパスワードを記録する。下記はファイル内容
admin:パスワード（暗号化されたパスワード）

ログイン時に上記IDと第一引数パスワード入力
*/