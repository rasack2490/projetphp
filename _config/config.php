<?php

session_start();
// ini_set('session.cookie_lifetime', false);

error_reporting(E_ALL);
ini_set('display_errors', true);

define("PATH_REQUIRE", substr($_SERVER["SCRIPT_FILENAME"], 0, -9));
define("PATH", substr($_SERVER["PHP_SELF"], 0, -9));

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");
define("DATABASE_NAME", "projetphp");
