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
define('DB_NAME', 'chateau');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'aII![u@Lv;$@K$BxhkP1CliJ x)%sgptu<VTi[M(/`Dt!,ST*_?XuQ+fdK~RJ|Q^');
define('SECURE_AUTH_KEY',  'yBbONHQ|l^s.T@,H.M@,Sg[Z-,bJFo2$9dE#:sN3o!`/v-i]3_BbZ0fBw|b..um0');
define('LOGGED_IN_KEY',    '78XwHradPB@qTK61jmCP ~! 3Y1w[*YB9KwGuW>&k.z/;#O1a`F;yMJ=kf9@<QTl');
define('NONCE_KEY',        ']WSMhjsM_Tx:~wiCCx0~7 }Kg&.O([Tg_!RSw7d ~ujO}13o0u5o+,-SBy~k$/;9');
define('AUTH_SALT',        'u>:iCv#?$Fn>YeO(27U=2P0[$dw,4;ZVVlI%GfKC9}LI| 4Td!/PPaKC.]be;H>V');
define('SECURE_AUTH_SALT', ' <uK+ex=ZXjJZJeLHm%u?-]UguW4LclUWwjs?o .2P$x*ZmfHk]$~?K973@CP2m3');
define('LOGGED_IN_SALT',   'B8Os!Lfr0/cwTtd-<I%,1iB [K]m%vtZh_M:x#7H:}pD1Q6| nM(nxQh(SaL?N+g');
define('NONCE_SALT',       '+h6(oRM9DaQSdN J:N_^l&^}UJ{DQ4vE!+827WbbR:6Lr|~FCF|59;;`texh$FA:');
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