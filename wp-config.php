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
define('DB_NAME', 'eprojet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'y7Js%#Q)Ioj|bHU]& l95H8*Zcy<ACn]:n!<4O3WT)r_VCHJQ}p5p%1-^4ha4i{U');
define('SECURE_AUTH_KEY',  '?Q>HV|I[B#nOiJ=eWZk&0}xUsY,`M0B]+jVbY1;e~V>OLtJ_uMjCW,2xK5dt!!8s');
define('LOGGED_IN_KEY',    '{%^Y@zcu_tT(_x#}.;4Q3dK$.5n:kC:m!M{r@p{|bH8!GKoep Os(D8*,rNt@qAW');
define('NONCE_KEY',        ']Y3)>iF%a3J^3_Wewlx);S=,iE_dlwugp;ujV6;]SoHXLO:IbZCzp=&)`1%f=ZqU');
define('AUTH_SALT',        'Aj|(lc@~Xv-rp)+xFDvKJU#I(Hmx;%ZL)hQs/nI_a*X?ygm@AcQCY:!.f52mG6;!');
define('SECURE_AUTH_SALT', 'l-|NH&NmQ?]9DPJJ,a#4c azDo~CI|[e(^n{TzM3t$asK @RR6A @J4Se}4C_+`n');
define('LOGGED_IN_SALT',   'q]$g,fa1@A@me%yR<f-8G!R[  *k#QlzV}B?&Py!+ar71xXCH{:&c_DbO2doI%@W');
define('NONCE_SALT',       '9+?W0bS0>.6U-6w-Fy%US?yUdQQW#ID^eD8T/Iyt4-CM:4_(YNYgm&G0]eEL#&<Q');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');