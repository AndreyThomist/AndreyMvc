<?php
use App\Providers\Kernel;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . '/src/models');
$isDevMode = false;

$loader = require __DIR__ .'/vendor/autoload.php';
new Kernel();

// Configure o banco de dados aqui
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'nomedobanco',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

?>