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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tpcms' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '++tF,Z$+.]#gv1Z}+$FGbdbD~>4dbH]1vl3o1yhYUpjtj,oO-ec1S*_}wFn[Oi:U' );
define( 'SECURE_AUTH_KEY',  '9oF_=YoE*0w6JZ>$6jek-++N|-|]mk}#tPq6P%{~bCspo#?x- DDxWSfR`F@u.Lm' );
define( 'LOGGED_IN_KEY',    '^6w*H+oXj,eqrm:*>^#4]%Jg8?YUIXDT}7X8%:|@le )#V-}DZL?BDT<[*NA;hR*' );
define( 'NONCE_KEY',        '@HDAFx.o-jT^P*Qse}_GDO+:-.ss`ONX?/h7h)M4W$UgsFw.a4uf.;jk*zHN9l3`' );
define( 'AUTH_SALT',        '$.FQHy<X@5x0s(lgr#K*Kwx}lzLBIhH[}pGi3),,9L!Po7lE_}{=Da-gO=|)nz}^' );
define( 'SECURE_AUTH_SALT', 'E(&X-fVs!B5_-noD^)p[tj>Od^~(UZStPb#kjZmo449L!RW0:{7@IHb&MF^?rx*4' );
define( 'LOGGED_IN_SALT',   'fu pRm.nfu)z`ea}jh4:^AqY!ITas.1^M_48in(KEY;#]4dzqZK9zah_$Bir7mVS' );
define( 'NONCE_SALT',       'PGj- vNdB(0^0:Gt5l`]TA}c;~Q^<OXl%c?UF*~ZRNU;}}!hE%hdW)`{B>P?Y8)v' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
