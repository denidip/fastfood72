<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'fasfood');

/** Имя пользователя MySQL */
define('DB_USER', 'fasfood');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1020315');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+x;!Y9gSbp&cH$qF+]+n^-d/:^SPOUHa&b,f8[i<GEk,``-T!AiSskr<k7`UV|iK');
define('SECURE_AUTH_KEY',  'g3#wcv^_n|zZu00BHI-8d||B087@-+ x6{<X@TmIj7KZ|[5+!%>=^I~^J,hGAb%h');
define('LOGGED_IN_KEY',    ',]8;e-G b~LgY:3%r+-7L#-VR4s ANS}HQ:=F4c7o5<*,}_fU|eBnac^ <}aaY7m');
define('NONCE_KEY',        'y#SzQDb{O/Ov|#-.A?;-Y/wm_Xo~r%ci+maTQ@R,*l0 pdmii-f:IM6=Mj`8`D?0');
define('AUTH_SALT',        'Ig8~6EaG_F|t^1qxob{|~Y)c#V<lZ+fY7x/8whV}YzV[q+_?#s`ZCdi9lgFw<0@1');
define('SECURE_AUTH_SALT', 'WzR%+l-L7If}ivl>.|rETxt`t71M-CY|ciD3nPP2UrZ8Bv|_=H>nWVMo!ezzrX|6');
define('LOGGED_IN_SALT',   'W+fqfn*&Hv-|l?=$)?+AKQcX7ZZ*Esj,+- ,h<W88@qd=TE+x[uD=+[-#m]17*j&');
define('NONCE_SALT',       'OSr7`-wbX$gU@A{XQV0Jq8$-hpQmlKl%S+G(1vM;`aia{^Yd=33:fFcm^bL2X$Na');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
