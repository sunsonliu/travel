<?php
/**
 * WordPress.......
 *
 * ............MySQL..............
 * WordPress......ABSPATH...........
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * ..wp-config.php}Codex...MySQL.................
 *
 * ...............wp-config.php.....
 * .................wp-config.php..........
 *
 * @package WordPress
 */

// ** MySQL .. - .............. ** //
/** WordPress...... */
define('DB_NAME', 'travel');

/** MySQL...... */
define('DB_USER', 'root');

/** MySQL..... */
define('DB_PASSWORD', 'hv2883HVV');

/** MySQL.. */
define('DB_HOST', 'localhost');

/** ............. */
define('DB_CHARSET', 'utf8');

/** ................ */
define('DB_COLLATE', '');

/**#@+
 * .........
 *
 * .............
 * ......{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org......}
 * ..........cookies...............
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/:0zM,xzan@h{Ap:zGH;>?9*r3Mji)A>Iu@|+~[Vny;nuDhAVihV}$:vL<NwL{>I');
define('SECURE_AUTH_KEY',  'w}jqru6Bdv#&rm$wSM}hF0d-|TF3@{SsCWUqNR=_JFBX}{N-+9PRg*Z}`3[$N?oy');
define('LOGGED_IN_KEY',    '%E4JH#q,5rUgr}Q2rmw!4!oC&S/(Md88 }X=F5z0$QSTRk,:Rgq{73I+f-[|NPql');
define('NONCE_KEY',        'yYWpHCcN9tL`nwo0-Ag#bI$WOJ,Zxk-n+cPX.%n}TWc{.U^X6|*iH|/~V%J~hxi6');
define('AUTH_SALT',        'XF^Y&ir[${H&ZS!=A*s!?Cg6$]1J59i)S{i+ux^DzvHvkW:}$)XT;J_,p||KQr_{');
define('SECURE_AUTH_SALT', '/&Rtp>|;Bq){fTb(8:HP]l].y(N0h2k6MOAc;Bhp/Sk[h.$ zuXI]q3c3A|O z%h');
define('LOGGED_IN_SALT',   'R}<)1x#55ag?$g@86o3rlzbRh>0|QyUdf:: V;7!IyoSP|.LW)]  `S@u29(]7EL');
define('NONCE_SALT',       'zS)V^-bZRmP>S%94~e@W4pjez<R?.d%p=M1b]hUhh-B{LA3?>kS_-PC0;8tr]N+H');

/**#@-*/

/**
 * WordPress......
 *
 * ...............WordPress........WordPress..
 * .........................
 */
$table_prefix  = 'trav_';

/**
 * WordPress...............
 *
 * .......WordPress.........
 * wp-content/languages........mo.....
 * ......WordPress.........wp-content/languages
 * ..zh_CN.mo...WPLANG..'zh_CN'.
 */
define('WPLANG', 'zh_CN');

/**
 * ......WordPress.....
 *
 * ......true.WordPress.............
 * .................WP_DEBUG.
 */
define('WP_DEBUG', false);

/**
 * zh_CN........ICP.....
 *
 * ...........
 * ...............
 */
define('WP_ZH_CN_ICP_NUM', true);

/* ........................ */

/** WordPress........ */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ..WordPress........ */
require_once(ABSPATH . 'wp-settings.php');

