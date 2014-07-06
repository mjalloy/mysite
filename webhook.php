<?php

// Auto sync GitHub

$path = "/var/www/wordpress/mysite"; 

echo exec('whoami');

chdir($path);
exec("sudo -u www-data git pull");
exec("sudo -u www-data git reset --hard origin/master");

die(" done " . mktime());

?>
