<?php
echo "MySQLi: " . (extension_loaded('mysqli') ? 'Loaded' : 'Missing') . "\n";
echo "PDO MySQL: " . (extension_loaded('pdo_mysql') ? 'Loaded' : 'Missing');