<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd}T6QrC@5+FS/-PyN2mG;Y}+(`[]5t~?T OocC]9S80D%i%;wBBI6N,QquNPtp-?');
define('SECURE_AUTH_KEY',  'Ez8^{dw %`Bj%#8ygXNg(`UTsi)f`8+L?2TA|BDX#Xml9A^^Ed:~n<>f1>D?zcSB');
define('LOGGED_IN_KEY',    'q|[Pw=T]d=op|kX-lw|Qm`!NgOX? +AC5-j9P/0y;:K#asB|keW_8]lG>4+1*lc#');
define('NONCE_KEY',        '6}!:%r1egK3@E0nQboZKV(6r9!kyZ^`7NmPJ|guLWFuPU^?a:pD(SC}M0qIRtB.<');
define('AUTH_SALT',        '?NXZwHo!s>&1/-+EWR<NwqxdeC4g)_0M_vOz<JzL6]{?9<xXuXKVUBINT$jY{bV8');
define('SECURE_AUTH_SALT', '>Ew0GpHB&mI-tc+5N]}L?61G$dt1j);poGvc~|-q8XH`CnLiyO8`P<0f$[GHB>h ');
define('LOGGED_IN_SALT',   'C;KVjZ+AWa.U(mhXE`g[ncXPn5Nm&^cW??nh#op<>9(s1|2m5c5p,Q5K-B@-u|fE');
define('NONCE_SALT',       '^P F/-$^s0f^EILe+<6<>]2gU~-fxn kb%8%DnDg8U),fuxrA(k}FyRl52$(-wd=');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
