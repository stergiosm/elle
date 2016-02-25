<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'elle_test');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost:8889');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XB{N@PKNF?Z56a7gI:vP2uGA(WufI2bW`Tl`VnhPh@Ov,q?gfy{&##>f>sDC^>Tg');
define('SECURE_AUTH_KEY',  '5|-C%o2KMq&-~P=|]3OmBeJ rcF*+rn<5vL+-q++n%/-PN FJ0TT%E-jR,91:(Wn');
define('LOGGED_IN_KEY',    '/?9rm%aZ0-te,<0R4@1;iFk![!ER&f@*aDl9N-x)ee{U3YX|YLibb+ A<PeNy{Lu');
define('NONCE_KEY',        'H;dMWStA~/c:N3L58v>dq/KOX=PA&}0Lw2iA3:&@wwJ#[[;@w!GNISPm+},QIA!O');
define('AUTH_SALT',        'Y.|ma=<2#tJhQzgzI@MakH`_(J+b-P8ehxA+0}gf#W34_j_E&0qcNQO!FcNPf}ZE');
define('SECURE_AUTH_SALT', '!B?r FZU}afYx$&zh8}8}XemMRbgI ,@u*2O]0lH[h4@$Mf+-gUh!~]V|}V{%)1-');
define('LOGGED_IN_SALT',   '$+/0BIr;(H;8)<-PR&[p.Ws4B=tcnUV]8g@A7$1_s8M?y]@$x1BtEQy*kGi VH.)');
define('NONCE_SALT',       'x<K8BwZeDYOSA=@1q{04bWz*y>~-&1tt60EeiCchD^KN>?@`v3E^mf!L!jw@};Qt');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');