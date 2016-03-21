<?php

$path = dirname("var/www/html/project/practices/cronjob");
$cron = $path . "/cronjob.sh";
echo exec("***** php -q ".$cron." &> /dev/null");

?>
