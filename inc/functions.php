<?php
function str2html(string $string) :string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
function db_open() :PDO {
    $user     = 'koma09_komatsu';
    $password = 'pass0111';
    $host     = 'mysql1.php.xdomain.ne.jp' ;
    $dbname   = 'koma09_shop';
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, $opt);
    return $dbh;
}
