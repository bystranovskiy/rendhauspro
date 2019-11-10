<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rendhauspro' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YfdnPQu#W!@,)zi-29$$<+8|2x3v%%>/dZwSe86Ma-E${~Efz=rm3Q0d/663L/@?');
define('SECURE_AUTH_KEY',  'CwcHFV^-mvAS<x|0<|09a95BW:g)4x^){U1FANiiuqU !s!SE.IX h/`o(XN.TRo');
define('LOGGED_IN_KEY',    '?}/Zho|M_[GHAV9(+y<37E.Ta@_GNv@;Q1?$@gJ@0.luGi}nERfv$^bHjv;>Rw.p');
define('NONCE_KEY',        'k*V1OPT]sPbbL+mT-BIi+Y1?kz-kcfl]}SKNAvRrMGuvo(;l?)qT<V[=2WS*kh:z');
define('AUTH_SALT',        'OjJt*Jm T*AJ:r)<71v0KiyqTu1M-Zg#kL8I+}z*O-@)|yz]l~aNYk3d3f+~R=Uf');
define('SECURE_AUTH_SALT', 'VqnjV=pGTTfb)1s8i2PcIV=v_V~} 9G0fIs67j6V;R0f_#RntHGRYLY+7S!-+})n');
define('LOGGED_IN_SALT',   ' (F|HM* 1V%CC,00ME u_bs5I1%pp_TRI:5C91AW@-VOkh`41p2A>%JA|PQcAhsO');
define('NONCE_SALT',       'gc0xUN=$%[S`.yuF2j&&$R(# r# ~AlHWm9zQ _|-i?|(2m0F!&mDTX4<+~J,93 ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'rendhaus_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
