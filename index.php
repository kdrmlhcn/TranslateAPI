<?php
/**
 * Created by PhpStorm.
 * User: melihcan
 * Date: 2019-04-17
 * Time: 10:01
 */

include("src/translateInterface.php");
include("src/translate.php");

use TranslateAPI\translate;

$translate = new translate("trnsl.1.1.20190417T072820Z.f816adda340087a3.32588d37813ee15288dd03f9ecc996b29eb9fb4e", "tr-en");
$translate->translate("merhaba herkese");
