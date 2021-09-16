<?php

$dsn = "" .
"host="      . getenv('DB_URL') .
" port="     . getenv('DB_PORT') .
" dbname="   . getenv('DB_DATABASE') .
" user="     . getenv('DB_USER') .
" password=" . getenv('DB_PASSWORD');

$dbconn = pg_connect($dsn);

?>
