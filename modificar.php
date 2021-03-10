<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Attribute;
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);

$atribut= $_POST['camp'];
$nou_contingut= $_POST['valor'];

$uid = $_POST['usr'];
$unorg = $_POST['ou'];
$dn = 'uid='.$uid.',ou='.$unorg.',dc=fjeclot,dc=net';

$opcions = [
    'host' => 'zend-arclca.fjeclot.net',
    'username' => 'cn=admin,dc=fjeclot,dc=net',
    'password' => 'fjeclot',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];

$ldap = new Ldap($opcions);
$ldap->bind();
$entrada = $ldap->getEntry($dn);
if ($entrada){
    Attribute::setAttribute($entrada,$atribut,$nou_contingut);
    $ldap->update($dn, $entrada);
    echo "Atribut modificat";
} else {
    echo "Aquest usuari no existeix";
}
?>

<br>
<a href="http://zend-arclca.fjeclot.net/projecte/menu.php">Tornar</a>