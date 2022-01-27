<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpfolder' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wpfolder' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Niki12' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i+_R *:o%G-4d/%FWaFefFhf(bKv<xQ|S:PhiC7-*ig&Wpt|A`?{OUFetN5OsI8b' );
define( 'SECURE_AUTH_KEY',  'vsBYWp|@]1F1RUpx@s9:U]miVCbejr.kFzP%jm_+%S3>6E0X9o,>;d3~Ff%<W~xs' );
define( 'LOGGED_IN_KEY',    '0{|+N.%eLQPMZ+={_.6U82 *g]n(fz==zAk?]rs=F8&>ePRWBteJ{q9=e$>]MsA.' );
define( 'NONCE_KEY',        'Oa*H]FB(Wz>T^Bs:_XWCNWU,%j<))1zDC+mGI z2,ZpZ1s1+!]f;HK(afmF^&QJT' );
define( 'AUTH_SALT',        '}s7nCl8ycUGt`V,SU/][SOi:]-LE#I.E37lV4-&$&C)OQN/+V5zN4iE~X{)&R$B/' );
define( 'SECURE_AUTH_SALT', 'c>b.K(o0+?A>C3WxYFzFz{x=MT1E`{,r~e~&/%wlrQ/!=EsV4or!~D1rrn{0tmzw' );
define( 'LOGGED_IN_SALT',   '>eg;vhrfQRmESQlaXXrjqo>OE)~F%H_5^dkr#lY~}17,{)bd!_ ~rJSA~,zbG*3#' );
define( 'NONCE_SALT',       '({z>wnoJO+un*/qCKiF&z!`rlUkI:/1&jPX}%y~@fUS%AFa>fT_TeYJt}O`t+,3x' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
