:: Run easy-coding-standard (ecs) via this batch file inside your IDE e.g. PhpStorm (Windows only)
:: Install inside PhpStorm the  "Batch Script Support" plugin
cd..
cd..
cd..
cd..
cd..
cd..
php vendor\bin\ecs check vendor/markocupic/vue-playground/src --fix --config vendor/markocupic/vue-playground/tools/ecs/config.php
php vendor\bin\ecs check vendor/markocupic/vue-playground/contao --fix --config vendor/markocupic/vue-playground/tools/ecs/config.php
php vendor\bin\ecs check vendor/markocupic/vue-playground/config --fix --config vendor/markocupic/vue-playground/tools/ecs/config.php
php vendor\bin\ecs check vendor/markocupic/vue-playground/templates --fix --config vendor/markocupic/vue-playground/tools/ecs/config.php
php vendor\bin\ecs check vendor/markocupic/vue-playground/tests --fix --config vendor/markocupic/vue-playground/tools/ecs/config.php
