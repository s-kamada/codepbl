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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wpdb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpadmin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ':Z baJ38T`0BJopDiVD&Zd.q>};#?,6Zb9*D:$*wV]}UC<$HY@XqgFyoTW~3-W0%');
define('SECURE_AUTH_KEY',  'B?fZi0%Uq`Ig OZ:^5N>A1olea/0X03?}=_5uHg,r~nw&OgY2fk6[3u_)9q]a_q%');
define('LOGGED_IN_KEY',    'NRhUXd%q!@g7GY5*edJxg?x2mTCA|r/nR,5!VH582Q()|UUE%jrnS%6/^tP8K*5I');
define('NONCE_KEY',        '1s8,Zy.`ZmT}G/i^.&OoRV,KH)c||cr`_J;3_<6%Pu>3>$N5L4dN5$-kig4fX|b-');
define('AUTH_SALT',        'S^wMw~eiY!aY7?ZV/p}FWa1JG6_{7n8Hp+!o<Y`Ukt=9EKtx/&v9DArGef,GwM9+');
define('SECURE_AUTH_SALT', 't}5 yht%j~P-wGT2dmnr7!4#/afy,m.M^*Df`N69hehn#@xmXY WN[l*<S:O7:=c');
define('LOGGED_IN_SALT',   '<gKoTv[2+~I=<;G]al;QL%GoKRih75ZELoA9an$&AQOdp(G5u_Cd9&G(BRuc|QZI');
define('NONCE_SALT',       'YV_+o]K@9W_lc+l~OCd:z`AIGmzO7Hvns#Kv>W %B-*:cMsW=ik6x`-`O1Y!6zFF');

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
