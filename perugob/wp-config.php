<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'perugob');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LJAv~-RGmwjN&y@!9muzex5b(S5<P[]_58OEFkO9JM[gv.G~-tSJP#kteEsnBK:I');
define('SECURE_AUTH_KEY',  'xu0HBspE!-SUgf$l*wX,1w<O;IxZXU`AU>~9we`,%QmG(`EG@1M[QnJ8??89pJu9');
define('LOGGED_IN_KEY',    'Su)GHKILr#?MvM30:!aM_=}0)v:{xWs9~7_.-TJ|`Pbz=)jC6k%LR,zkw>s1CcV!');
define('NONCE_KEY',        'O;&YNxJ5<b$N/LrFwq6>{{vCe[?{l=4:.L7/tC;(w>`-d|Y{F54r9.~}3$|s!hTO');
define('AUTH_SALT',        '@{o18DPMTboRpylhSmz,7a1((kUhZJI!Ta$b8vo)BVhK${D67_]-(BCu1ZJI*^Mp');
define('SECURE_AUTH_SALT', 'Q|K7<U%~e7OA0LD6~egEG:wqt^v|RE=Zuy^,,UfkQsHo_K=XT<zdy:]2)1:OoD*T');
define('LOGGED_IN_SALT',   'w?J*sXSb`3m{Z~wZR(vnoNiW,4:PxwA. _jOT`XFDi<BxSb$hQzcQVWk.t7S/;^d');
define('NONCE_SALT',       '(|{4[H-}Nu{?ed*Yxvx|i28{K&Nv^[5> f:+%$;vC$<4!V3<0^` G5Sfjdl(5NK|');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
