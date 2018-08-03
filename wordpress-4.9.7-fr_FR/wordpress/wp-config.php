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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'helder');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Rastatengo32');

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
define('AUTH_KEY',         'RXDrVE-A<5se:qsk),1rc2dF?RXowLl!r9@Ogbjw3z]4>5?L?-J0G-mMlfhzD{7_');
define('SECURE_AUTH_KEY',  'sreKs-k|&G~=fSi~.mL-F@O|p3h]ki=1^?iMQ+&l|` nM03=E)#@+j)Or=<K+#0&');
define('LOGGED_IN_KEY',    '=@YY84gM%18byO>1: :t:!]?A8l;8I/&FVX)+<Oj-VX 8e}!Y%{60T1sxe0H78VV');
define('NONCE_KEY',        'L-y*l|Ue]ud[ZdyHbzg=U6=6@/o8]QD[w%qGzJo.m-:wFNKkWOLJoP!7mER5W_OF');
define('AUTH_SALT',        'vLoc&($.Tk/ZAE9Bjr:,bC)u9-@mjwqJKq)5mvL!!wjRf4&Em*7_kKS{[c. {=yz');
define('SECURE_AUTH_SALT', 'D@EX)/@3GrAa?):!Y_JQS7VJh6M!^zr+Ti5m!~1/hRd@9ojDV=V$y]oRh,uOoKX,');
define('LOGGED_IN_SALT',   '9r,wv@^u+>C#RT  tw;.R#M-ar$(k5pd<5&{Dz`b3EKD |I:q4CPQ{5,z+O0ormQ');
define('NONCE_SALT',       '.1bCx>ovSeaRx%)F5 `1A{2UqeXB^mL(dZ,xdeOoGX-Le#%,pW}UL?dn> zdSP=f');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
