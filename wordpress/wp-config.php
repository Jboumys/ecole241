<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'k>yk4&]5tVQ%BRZS_4`Ik g#vim6@|`4m-G,L8[4|6eFdN3M*<m;?]oCJ?6Fln_q' );
define( 'SECURE_AUTH_KEY',  'aSIo:RoKBB]:ec,dEx#1Mb$(4X|o>@3o{%$l!NWyW +^Z$Ny1_HZZ~Eo%<ty&Mp0' );
define( 'LOGGED_IN_KEY',    '20],o|:=PDr9aN`K&8qsgk&oD[xK5]N<Mr*I?i#%&;X+.G,MyUxIL*bRM[*msc7u' );
define( 'NONCE_KEY',        'Ow<}2`eQwlz&c@q6T+c+UGoAc0U!$?8VoRbLMX@Y20@_fbbhdg@IV8NN/LHGr9QH' );
define( 'AUTH_SALT',        '9*W#WW=/C-][+]G6Ci_1KWG]0v2Qryc|B(*+lv/E:*1Q.42<y@VzM+r[i0r.{%c_' );
define( 'SECURE_AUTH_SALT', 'u#nS8O[,%%87VbGy2-oVL8LA{.(y[/y#b@WEfx}jVssC}02Wgq9y)K.}8Mqn&s>m' );
define( 'LOGGED_IN_SALT',   'hkVBPDQx^4]/v*C#c{u5#Bo~dv9J<iO_?3CPa4qNbm:mu2frOeWX$kE(=KZZ%q m' );
define( 'NONCE_SALT',       '7}FCA/aE/VnNJ_G3K,lX =XClj[QG0X.K%eS)q&PaNGx[(uxQ9VB./Y!,v<W|n9c' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'bm_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
