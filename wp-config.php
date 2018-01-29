<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'dctt4cl177qr4e');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wxqajgpdsbxscz');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'FqUERt0hTmP64lQK8SUI-Mea2x');

/** MySQL のホスト名 */
define('DB_HOST', 'ec2-54-83-27-147.compute-1.amazonaws.com');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pbj6&ESb&wal>H+o<gA6Y[OB8`I}Ib}-+M`%-0i?M{P}KgrkYE)s9+,V_ VKmwe|');
define('SECURE_AUTH_KEY',  '|oG8xarkzCs}eUzIeYwSZYAd}5>&Lj2wzi#}mQrKH4lp$ZY5S6ZNq%-&]v_{b>g+');
define('LOGGED_IN_KEY',    'b|dxJpFhAZf}k}NDkM_kkj$Y^~Z)+ps0qRJ8k89`~R||g>T3kchf8# 1rTHtXo^|');
define('NONCE_KEY',        '{a|Y]$.ANx>hq)=@H$,>r#UTpq8Ii)CMgp4SZP_`nCcB|(;;<(D<@v@**er4kjJM');
define('AUTH_SALT',        ']e|-rP|IV#^?|Tsd.X lpZqX+$a+k:T{kOT_3ZDI%dU4aIczil#2xm+nhT6hB-jU');
define('SECURE_AUTH_SALT', 'i||(_D@wn[:X-98U<Bmke(O<:@zN5t%*@+n^aaf#6%+y<s,+IeE^E%g9+>5a.sd:');
define('LOGGED_IN_SALT',   '$a{ss-~)o6_<9YfJkCjXG3v3B|FOvmH[-i+ h4^$+3;k+LngIr[fwY:N<D%L_=?S');
define('NONCE_SALT',       '#}y3ddwCF8fjeP *fKF_zHOL,;>)qfJ=xTX5-4~+>A+T8+9]]1~*hFTVP+WqC?<3');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
