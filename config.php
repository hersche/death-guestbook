<?php
$GLOBALS["db_type"] = "mysql";
$GLOBALS["db_host"] = "localhost";
$GLOBALS["db_dbname"] = "gb";
$GLOBALS["db_loginname"] = "gb";
$GLOBALS["db_loginpassword"] = "";

/**
 * password_hash defines the hash-algorithm for the sessions and also for the saved passwords. set it just to the beginn, otherwhise you've got errors!
 * Possible values are:
 * whirlpool
 * @var unknown_type
 */
$GLOBALS["password_hash"] = "whirlpool";
$GLOBALS["adminRoles"] = array("admin");
$GLOBALS["min_password_length"] = 6;
$GLOBALS["password_need_specialchars"] = true;
$GLOBALS["showSecurityWarnings"] = true;

/**
 * You should define your timezone here. For valid values, look here: http://www.php.net/manual/en/timezones.php 
 */
$GLOBALS["timezone"] = "Europe/Zurich";
?>