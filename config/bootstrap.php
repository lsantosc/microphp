<?PHP
// Steps down one dir below 'config'
$dir = chdir(__DIR__.'/..');
// Loading composer autoload vendors
require_once 'vendor/autoload.php';
// Router globally defined
$router = new League\Route\RouteCollection;
// Template globally defined
$template = new League\Plates\Engine(__DIR__.'/../views');
// Add folder to 'layouts'
$template->addFolder('template', __DIR__.'/../views/template');
// Parsing assets folder 'public'
$template->loadExtension(new League\Plates\Extension\Asset(getcwd().'\public', true));