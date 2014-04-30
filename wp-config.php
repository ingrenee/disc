<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'hayemple_test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'hayemple_root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '97856832');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Z9gbWJZ8X(tInx6DGpSXeMZ@$u~g5kYtq,f/1_s0WF/}=cBJ0w/Ib4^0W1!5>zVh'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Ht2+(b^YFK[R|x3sF2,OaIv4u*AH0(e[/aJu7kPZ)Hg^+Ys06acT{/BxZaQ`!ir*'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '?E,40NuMk<a >TiLNe)[ 3U]2#]Y0ij(h [=i:N&*_g@5Kk!Dp7xm-j.UJXr6Uq|'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'v#-kZ[$5~vIv-gaySm0@^BF+#g{u[Y_MlzQq? UygIw2r5NYI$i.,2zY1Im5R+e7'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'UYWc?KFaoDJOqWdP2hsV.R}a,n -1$_[rNtMMPGl>_BAF7]zG/s]inQb-7FiI@Ys'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'pEe L<.<v3^{5nn[@ l-8Sj<Hd^<(%DGl+A+@of/NSGq;[Jq.AZRv7JfE9[iUOoL'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'M2Nl<-*Rgw]YYy9ZKfc`eiUub^Zi+j2.<([F~-L;9Z/NGyZQ_U136l/*|k6Im*Kv'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '9ZzfX,:cJ[spR|#CvEbMUNA!Ks_l2907B[`?=Bp?413ILE#-aj3_iH$m`q8-4t| '); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_test_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

