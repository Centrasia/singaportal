<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0208738-singaportal');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0208738');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'z3NJ39jR');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql569.phy.lolipop.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
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
define('AUTH_KEY', 'EGLyQ;#G~.w$y3K^?#IN{4,jpa%^iBryjZUO7:TNUpr(SD-37fpjJg/^!;<E%yPN');
define('SECURE_AUTH_KEY', 'D8-3?)%L.?^,H.ysD<?TDOHj_V)W/p<dOU)U+8Carp4BTd"E"I;gK%(rvOD09:/)');
define('LOGGED_IN_KEY', 'QX!BF9EYs<g8s,lil2TD"KrAN8Wqj)~JJ"<d5b/oZ}W5k*-Ke1A7kNh>IggHe6)l');
define('NONCE_KEY', ')|"C*PK0XrK+1Cc#PO<DPv>m312VcIo3O2ArO(qhSk/@p*/J|a),J|*z_y>B?<<=');
define('AUTH_SALT', 'ZISSXEDAEz)on(ZG7eVzE?CnK00+0K#|~K>!jmn:IuwV3q%@:%kYxggnS}uMlR2X');
define('SECURE_AUTH_SALT', 'qfe1j<S|CzhBk5W84TcVGrF3rB_9$JSFwz<K^,.pxro_izL")5HJt9/5$ah?oK~_');
define('LOGGED_IN_SALT', 'G|}PCx^h7$PiZ03@xh<j9;PqT@j5vDP@)@i<B$cra~*Q2F8lueD@~^Lv%<83N9}:');
define('NONCE_SALT', 'Znih8L53|!}t*5OPE^9Xhh"y.k4^k3q0oU"StF}lz~J{z@Ire!x6AiQgv<R.uU^}');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
