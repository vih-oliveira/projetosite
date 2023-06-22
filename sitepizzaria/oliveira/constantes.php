<?php
/**
 * Created by PhpStorm.
 * User: Luciano
 * Date: 19/10/2019
 * Time: 14:31
 */
//-------------configuração banco de dados
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR');
session_start();
define( 'URLBASEPATH', __DIR__ . '/../');
define( 'BASEPATH', __DIR__ . DIRECTORY_SEPARATOR );
define( 'BASEPATHFILE', __FILE__);
define( 'BASEPATHVIRTUAL',$_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR);
define('DOMINIO',$_SERVER['SERVER_NAME']);
define('DATATIMEATUAL', date("Y-m-d H:i:s"));

$servidorLocal = true;
if ($servidorLocal) {
    define('HOST', 'localhost');
    define('USER','root' );
    define('PASS','' );
    define('DBNAME', 'dbrestaurante');
} else {
    define('HOST', 'localhost');
    define('USER', '');
    define('PASS', '');
    define('DBNAME', 'dbrestaurante');
}