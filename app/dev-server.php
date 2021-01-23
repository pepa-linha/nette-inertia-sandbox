<?php declare(strict_types = 1);

use App\Bootstrap;
use Nette\Application\Application as NetteApplication;

$_SERVER['SCRIPT_NAME'] = '/index.php';

$url = (array) parse_url($_SERVER['REQUEST_URI']);
$path = $url['path'] ?? '';
$ext = pathinfo($path, PATHINFO_EXTENSION);

// Send static file content
if ($ext !== '') {
    return false;
}

// Run application
require __DIR__ . '/../vendor/autoload.php';

$boostrap = Bootstrap::boot();
$container = $boostrap->createContainer();
$application = $container->getByType(NetteApplication::class);
$application->run();