<?php
// define-t aláhúzza, mert PHP a const-ot szereti
// am mindkettővel működik
// define('APP_PATH',  __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);
const APP_PATH = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

echo "INDEX ELEJE".PHP_EOL;

/*
include '';
include_once '';
require '';
require_once '';
*/

// be szeretném hívni ide az a.php fájlt
include APP_PATH.'a.php';
include APP_PATH.'a.php';
// többször is behívhatom, ha szeretném
// de lehet, hogy van olyan, amit nem szeretnék, hogy többször behívható legyen
// ilyenkor használjuk az include_once-ot
include_once APP_PATH.'b.php';
include_once APP_PATH.'b.php';
// ezt a parancsot beadhatomtöbbször is, csak 1x fogja teljesíteni

//include eltűri, hogy ne legyen meg a fájl. ha valami nincs meg, ott hibát dob, de utána tovább fut a progri
//require nem, ő megköveteli, és ha nem létezik a fájl, onnan tól nem fut tovább a progi, fatal errort dob

// többször is behívja
require APP_PATH.'c.php';
require APP_PATH.'c.php';
// csak egyszer fogja
require_once APP_PATH.'d.php';
require_once APP_PATH.'d.php';

echo "INDEX VÉGE".PHP_EOL;