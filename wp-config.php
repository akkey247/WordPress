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
define('AUTH_KEY',         '+:;.M|qS6XT|rms+:Lga,7&x|KLj<i}F_xeDQU/2AOfUtw@em:qlDOD..3w}#=xV');
define('SECURE_AUTH_KEY',  'T8@gCnQv+3fI`TaW(r^B-@~n;;J%L7yo<14-9&a@0tqOKY:`Q)A@j HPQSV|siN?');
define('LOGGED_IN_KEY',    'L$i?loIaZ{c:)Y~aZiW|#Re8<=TiR*R4%}*+aY22/G0~(]8)Y<xVMxBC`vE2M*b?');
define('NONCE_KEY',        '89J36c.*3G]I:-Pp?pO(ituzJ`0m_! Gr1Dkm_sD;66*~^3<IIZ.aC<t-?kL-3O=');
define('AUTH_SALT',        '+wa`(`lz3 FZ|l>(SJ2A,r-5g4N 6v!Ga{L@7SWqb)3-_#P@50HuNEu]eqTJi1`-');
define('SECURE_AUTH_SALT', 'cGS}/u|* -M~g]:g:yXr=d/>{L~qi1<e+7[+V5UXm]O3dtv4/dyVkM#R,p+)Iw&^');
define('LOGGED_IN_SALT',   '{kJY*$(pXYC[4|0]4rBZ+/OW6ed>M*&-NMV&Y6(og|Fs4RZNS.jn IElLriSk9u9');
define('NONCE_SALT',       '72C.ZP|,5>Q2l&Po+qs&rTH!o,UPwkcd{*Ce*YVM].l::7R 3C8b~F]~K3xnt-oD');

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
