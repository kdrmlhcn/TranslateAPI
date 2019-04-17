Basic Yandex Translate API Helper

Usage:

Step 1:

composer require kdrmlhcn/translate-helper dev-master

Step 2:

use TranslateAPI\translate;

$apiKey = "YOURAPIKEY";
$translate = new translate($apiKey,"en-tr");

echo $translate->translate("Hello World");

// Result: Merhaba Dünya
