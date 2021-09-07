<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'lesiteduheros' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '1egoPLaB>7c)jJrSyN#.O+/Kx4P$/bC,^m3}+-jz<u5EISZ1,d-si*!m|&N@Q1[f' );
define( 'SECURE_AUTH_KEY',  '-K~zyhS3qayXI?S<koV4w@55y`G5s5pWb%IIz;Uh*);45eKe+7F9r:lE7MZGLqOj' );
define( 'LOGGED_IN_KEY',    'pvo!PIUf-12>C;gOU-6O*q:T`SoAinn3F> hYvD2w2~5bQ,2i=2^tAO}cO(n>4<9' );
define( 'NONCE_KEY',        'sM=`m[kx_UywI`p8M*]IDEPkR_/qPw@ +D/R}Lo@&I4tRV9P$xV)5WSpg)oTt!r7' );
define( 'AUTH_SALT',        '1.4jwD6i:WHH`vNXD:B|DgGwkX7C-ZuVA/oV}D(sihF7,wXT0a.ODZ59>*z1OC?.' );
define( 'SECURE_AUTH_SALT', 'h)$}}uG&8Ej`%[.ft_UZPC=iiwsX]nr[SR8ZkQl_ 1pUbitW(N>=4PCr4)J2<:>K' );
define( 'LOGGED_IN_SALT',   'UCr(f{|OPtKes3lMiYbk07rig9o)+1VGBV]JtU=0[@G}5dl$K#k</a}H,1RwN^I]' );
define( 'NONCE_SALT',       '6imUxXO)_#*#EK|EZ(Wx_GF%zL2QAK2$I%A i+u5M7w>qLA 8h{f&X[b:N,?BjN ' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
