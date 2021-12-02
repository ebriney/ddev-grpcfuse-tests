<?php

/**
 #ddev-generated: Automatically generated WordPress settings file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 It is recommended that you leave this file alone.
 */

/** Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'OHMlWZKEPCrwnXwtVQscujgEWdyKONMZgKbuTmzJZatTcoPTZQNSeasQmqdHXIHN');
define('SECURE_AUTH_KEY',  'DADrMfUmVdadYWrFwGpYKCxYdNdPPYMuAnrCnUaOrqlXtEEeWkTOaSvTadhgUkgd');
define('LOGGED_IN_KEY',    'qWYUcmOxBsnDhQMtHbhmiGRCpfbutFMTYTxWIEpoMDYudbfRIQmXXKQbDvxBFFVF');
define('NONCE_KEY',        'ZYyjvUzxYfTNzhVsdlesgxrZSblxYdjzNuVzPinaJLldhEGuwoYqTCaGOrElWwoz');
define('AUTH_SALT',        'NrXQSCQHZDWFGtobfjTSPSiTNKaAAaEzFaOQRaFeVgUsImPItxgJjqfwwybyEQSp');
define('SECURE_AUTH_SALT', 'ESlvlniPkRrHqvEqzzHzySevJxMHFROcXkpQhiBMzBPvaciZHWhvQzEUjMMQzgWU');
define('LOGGED_IN_SALT',   'DWyBSmUicoLGiVNPGyuWmiWdnDVvUOlXGHXBmGPOAUZAYpDfCEFMGmTGOyzWTnqJ');
define('NONCE_SALT',       'XNYUzRsgaeuWGyEGXrhhehisRmHfNMIDYgBTAyrFQRNeraSxrgSWvsawHukhrSeG');

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

// Include for settings managed by ddev.
$ddev_settings = dirname(__FILE__) . '/wp-config-ddev.php';
if (is_readable($ddev_settings) && !defined('DB_USER') && getenv('IS_DDEV_PROJECT') == 'true') {
  require_once($ddev_settings);
}

/** Include wp-settings.php */
if (file_exists(ABSPATH . '/wp-settings.php')) {
  require_once ABSPATH . '/wp-settings.php';
}
