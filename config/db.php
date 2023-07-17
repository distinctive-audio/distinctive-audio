<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 *
 * @see craft\config\DbConfig
 */

return [
    'dsn' => getenv('CRAFT_DB_DSN'),
    'user' => getenv('CRAFT_DB_USER'),
    'password' => getenv('CRAFT_DB_PASSWORD'),
    'schema' => getenv('CRAFT_DB_SCHEMA'),
    'tablePrefix' => getenv('CRAFT_DB_TABLE_PREFIX'),
];
