<?php

use App\models\User;
use App\models\Good;
use App\services\Autoload;
use App\services\DB;

include dirname(__DIR__) . "/services/Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$db = new DB();
$good = new Good($db);

var_dump($good->getOne(12));
var_dump($good->getAll());

$user = new User($db);

var_dump($user->getOne(12));
var_dump($user->getAll());
var_dump($user->calc([123,123,123,123,123]));

