<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cvxuvlmy_ss_dbname78b');

/** MySQL database username */
define('DB_USER', 'cvxuvlmy_ss_d78b');

/** MySQL database password */
define('DB_PASSWORD', 'Wj3fCIbZ6Mlb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Xd%M&CdIyMx]cA&XVoxK$B@<XeK=}<mCiuI+C/?]LN[|=AfqC=idr&a)B^DbM;/thm]a+)Vy*ZoGjhJV*umsX|yS}ZYL+$YA!*>WfWSkslqBg])CCdk[jaULUp<whSRS');
define('SECURE_AUTH_KEY', 'v;UwI_RkOxKwfBQa(tddm$Fe@{?p@xjJO)QTSVpLF[LFuACD&eu;b(y]Z^lN<c^%n;zqfM)T=ubP[ZQCJoh>l$bavmHLaTNNl_@=|SkJ|Sx}/nu<rdm+L@F/get<QLWE');
define('LOGGED_IN_KEY', 'heua]b@?P-h)b<K^BzGN-JOHDCezqSi=>K<t%PW}}|KmS[OQpCZ?wbT{<[r;qyln)z>BPIkoLL<|R(jmHTNE-K=bIfxnH!NIPG{%HdYwfv*hx_+w;I>kI;raNqjQRR{{');
define('NONCE_KEY', 'Vo+*d+Hdn<X{YaY^DnZPgW_fyDMeVJK(p+a]N|PgoRxd-oHPCvFqHHbzJv|SG_/|YfN%%jHju{qAXV[(%rHBz(+pcQHOA<*wwij>(aHQ%HTvbFaI]i&|nlqUx=d|g[%]');
define('AUTH_SALT', 'Lhj&;@)vzh+-dkQ{a?h}@=e=p%y<>M?LJuqiD*MO]WjZt;n<]OTy;XWKo@Oguq{JASW)nrzJkJhX++OlRe{A*r]ToSTGWv=u/*O;l&gX{J)|i@dyRDc-!gg|-B@K?CAz');
define('SECURE_AUTH_SALT', ')Pr;PCCZdQNY/KtKkU!WcIZ_]?rR?PYZBp{Dt-!H)cm{]drEJRRx^S}bitcSImWlZdt*l|u%}O%oB)xbvMMXzDoytUb>?FRy*VDK@]Bd[Zsh+w_N*y!nWs?DKVeSdqfs');
define('LOGGED_IN_SALT', 'B[WxCLTnMG[wUit?OzUys|gF%n]Su/w+gjqj%tH?uC*tECD(gk=uOdsWD%b_=K;?PhBEqDYc@Zi|GO-)$=^[{K->aQBcQpxKZ|XuDXr@a+Xt%n_NSC;=HS^!Ztxh*I<]');
define('NONCE_SALT', 'L{tSOfyWl[eCfEDxtWYBUahlicAgRdgo<(v{WqYKKa%CZa&-QHrMoGE(>tKu]oeMeJ&}vRCeH?jDKXgZP+n{Hidju@Xbbn>lxu?IxUp}s*q@$Jnl+k@fNr+C<c)/>;[q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ejrf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
