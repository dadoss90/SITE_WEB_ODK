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
define( 'DB_NAME', 'odc_web' );

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
define( 'AUTH_KEY',         '(/n`#mUl!?d33(y2;$i2sU5d7q>sENCTe=bg&`4h/B-xJbAG1t=}ekPHL4NmV@^v' );
define( 'SECURE_AUTH_KEY',  '/S0,e:axSf2NkRMMqnZzhlZ[;!HeHhp^k[Eyh->%UOJ,+;sO%x5_hJR{ncKSW-9k' );
define( 'LOGGED_IN_KEY',    '|WliVGI@0j(]R6yPXcRwDOYsKA>A*OGLirV]tbG0.J35Lhy!h$o1t+#>$Eq;jBcJ' );
define( 'NONCE_KEY',        'Z)@[3a*dW$QLjq0-Opvdds/(wxJuSnt9j(|3Fw30Y=d$.Co)fqe:Z.@;*^QARC]e' );
define( 'AUTH_SALT',        'CEI08[6I}N<8os0[WW(x,/]@v-lj|_~A+ rJo__>HV-om]x@kbL;7!@1uyN:vLaw' );
define( 'SECURE_AUTH_SALT', 'JGid#QjzIeB|D}FyW2.QABn7iGbBz}-z`#m1w!B_Gg)7e6{-?s@T,-yRSUYve=rI' );
define( 'LOGGED_IN_SALT',   'b.SM@Df2;8+I*xA|EeW=RJMx<(+,$/35#]/W_OPMKcrfL3)QxevF%%rO/=q[Lw[s' );
define( 'NONCE_SALT',       'D}Ak=JHEc0@QtbKi/@$Z~2#<aaMd Nxqim-7[62 597Im@E2af=cCb8m=1>w-J!X' );
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
