<?php

// Configuration for database connection

$host       = getenv('AZURE_MYSQL_HOST');
$username   = getenv('AZURE_MYSQL_MYSQL_96028_USERNAME');
$password   = getenv('AZURE_MYSQL_MYSQL_96028_PASSWORD');
$db_name     = getenv('AZURE_MYSQL_MYSQL_96028_DBNAME');
$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";
