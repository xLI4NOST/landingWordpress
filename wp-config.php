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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'new_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'g>Dy$C~>J6zdc|buPi^0cC=vh.#W)eC]U>/k}:FNZh8a5&`{hiFY(5?(CN58Df@y' );
define( 'SECURE_AUTH_KEY',  'jZ_Lf&t`n#h[T&L_C>,tTTct%K<|V>]8B~|yt5%(N1Wb<(CB1N[}q~Qp~z_Txe}?' );
define( 'LOGGED_IN_KEY',    'a/aof3.epSna4C[7n%`6yamR(3q8J7gr05=cO4A<wJI Aa-dBI<N[GM 877=7g|y' );
define( 'NONCE_KEY',        'yYTVFgM!JSw@6#6yrp{#k^B>X Jo|#d}jpnm4-tm6(*Rc1(%r[9nOt.P7glCu$ X' );
define( 'AUTH_SALT',        'A6$~ZF&w/gbO01<zJ9xm;32yBFog!.w30WbgL]hfm5Pm> jL-8MgB`FzMm8&HT6Z' );
define( 'SECURE_AUTH_SALT', '^DiBl}q}.?IuTWik7g*smR<HxE$30M_s]2UE{pB1*+rZ&TT7d!vU>co8q= SBA*N' );
define( 'LOGGED_IN_SALT',   'a0kUPmtH_!tP[]QtKE-H34[}?Cu)/iZFssh<|D5Yy1W*4XpA_M4w7G<x}_W@k&7c' );
define( 'NONCE_SALT',       '9>sZVdAdP*+WFrZCX|rXr[j+ui_> gQ&o pRa%G4&K{/Y@:G~wSM(e^eolrOP,GE' );


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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
