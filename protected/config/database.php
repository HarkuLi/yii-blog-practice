<?php

// This is the database connection configuration.
return array(
    'class' => 'system.db.CDbConnection',
    // 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
    'connectionString' => 'mysql:host=localhost;dbname=blog',
    // the parsed database schema data can remain valid in cache for 3600 seconds
    'schemaCachingDuration' => 3600,
    // 'emulatePrepare' => true,
    'username' => 'root',
    'password' => '1234,Qwer',
    // 'charset' => 'utf8',
    'tablePrefix' => 'tbl_',
);
