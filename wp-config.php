<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressrendu' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's6![9imaCHpEoG09gJ95w&[5EzaYCwdwO^HK|f3~!4/#u:v[RYMv$Z~GA&olY)oE' );
define( 'SECURE_AUTH_KEY',  'zCjWJ9JYF[;HnvwalKEWJG%#2`]F@o%v;51IpCu(zd>T;`m&Ms u,o7b=#EYN#Q_' );
define( 'LOGGED_IN_KEY',    '[BE~38^h_?i,{6D0aI1JKTLoYGvBFc:;o4t.0{j:$:^PtrMm[zrX]upOQXOL2vUv' );
define( 'NONCE_KEY',        'bM5+tjGb>Bd`0L}u!D4wj-`BOzqz(h=1]<|^6 ot2ONq3Hd$r,g*3Pf0/Uhtb/e-' );
define( 'AUTH_SALT',        'IHla)M92D7i6l^Rr(?6>f?]y=rWRB}+b{j4ds& zC*$0acCuxQP7AyBMN[*fMN&[' );
define( 'SECURE_AUTH_SALT', '^N5o,{#b5X-`5C>u;)Y0md~Zn!p&za?PhA2}OP;Hh_Yr-K1JZK~;Cca(?c^N.UvK' );
define( 'LOGGED_IN_SALT',   '3RDdaV7&>%Ne$#E7tx#SQ; /OaMtF$]V, XS+]j]#F 3W|cRJZF`rj.ylO4kHlIL' );
define( 'NONCE_SALT',       '/(M|8:oMd{t~V[pu<Kr}I@Me|k)EIjxDIp9:m85?O%my LZ]fzDQmNGru.Gvx,2E' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'peppa_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
