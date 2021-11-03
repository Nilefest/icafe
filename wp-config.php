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
define( 'DB_NAME', 'icafedb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '*Sge>nH|5=BsQw~$wtyV04DOe +GP3A?>Lusle9`zIoCujwd?.wAxV-O|`#Mn1MG' );
define( 'SECURE_AUTH_KEY',  ':-gmz a=i*6>kOpXd[oZy&%t5&w9eOBN1YvR.p4<,30eC9k|WRmdU =.cMM W;us' );
define( 'LOGGED_IN_KEY',    'Sz*TAdPWM<b[-n;2QZ)e*]HTdVbW#()d>/>wI2jEt}1={lk@e#o1_ku8>&h]C`|X' );
define( 'NONCE_KEY',        'cwYd_)3OXy^lMVE5m+^=a:L2&#~0_W%D~qUX{QRFA.:[@vdefS[`j.Q$`Hdl09SM' );
define( 'AUTH_SALT',        ',?&fxY{9UcLZrV@N0-KPpY odg+7!Fy$jnudR3}Xp|?l8LT$|:d(wFN;1)Nvif5U' );
define( 'SECURE_AUTH_SALT', '1$j^/VvIq]er#)4FwT<5#<0+wBK 3YD NI~s~_TEI=>^L_h3Vml;/coGz(NA&QrI' );
define( 'LOGGED_IN_SALT',   'lJ%Ai>#p#mduLi_Zm,=9MNU #G1.)0`_,c_`@.E9WULG@Bgz)2H*H~VKb7V=};^$' );
define( 'NONCE_SALT',       'wv)(uj1{7U7$Tz{<PguNn?Q aw}V_.vC$3%dwrT6h9nv^c+{$YuYWg~<[p)#_yhx' );

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
