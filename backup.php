<?php
$DATABASE="dbName";
$DBUSER="dbUser";
$DBPASSWD="dbPass";
$PATH="/my-backups/";
$FILE_NAME=$DATABASE."-backup-" . date("Y-m-d") . ".sql";
$OUTPUT = [];
exec('/usr/bin/mysqldump -u '.$DBUSER.' -p'.$DBPASSWD.' '.$DATABASE.' > '.$PATH.$FILE_NAME, $OUTPUT);
var_dump($OUTPUT);
?>
