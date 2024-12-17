<?php
//phpinfo();
echo date('Y-m-d H:i:s');
date_default_timezone_set('America/Toronto');

if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone');
}
echo date('Y-m-d H:i:s');
phpinfo();
?>