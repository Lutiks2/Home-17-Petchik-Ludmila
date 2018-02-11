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
define('DB_NAME', 'notify');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4/i#S<>*2e:J/XsPpiJ]~Em<}R/vDV=YKRnqxjUDq[P,]a|<6])6t5_78BaMKa4=');
define('SECURE_AUTH_KEY',  'd&l,Y$~)@y8gH~I_;Rzmm,iNkSbT|HdRbj]r0z-GI,A=&t_HaLwq2X#|LvgsN0mf');
define('LOGGED_IN_KEY',    ':p~.tk)1*}BigUl|O$B.Kho&y0yq6+-/oFr}Z=Ke7kC#=+Mf@xCmVMoc?vrfkW]r');
define('NONCE_KEY',        '4.v@|r9e{TO4l_*S+;<$YFj105&OYft;y>PFW*]q/lj(%_I k.jUb5T>ktp}0 Nd');
define('AUTH_SALT',        'SrT}AQ}k:MoEBFQzMs|Fc9zvr<+.QtQXetH:q()bw{y!#)xmWOEBVOdb:!t=iWpv');
define('SECURE_AUTH_SALT', '5RP7P,[nX`K&|IG9DaY7nHko,1Jg/ `M]*m{20R$9ys:@R9g@O`~z1?&SD!W[X=c');
define('LOGGED_IN_SALT',   'Oo>0:OlCyF:Q?!Pt?.S+->Ar>&awU.t)b]&lKI=hq2X!pBPb &:mJuT&Dj#L;vLB');
define('NONCE_SALT',       '{Sp&qaL^-m>XzL/v-Hk]ekGS rNby)vu$f W=e<kXzQ#!kbJh8D{ :;:ul@GAr{u');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'notify_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
