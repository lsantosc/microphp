<?PHP
// Steps down one dir below 'config'
$dir = chdir(__DIR__. DS .'..');
// Loading composer autoload vendors
require_once 'vendor'. DS .'autoload.php';
// Router globally defined
$router = new League\Route\RouteCollection;
// Template globally defined
$template = new League\Plates\Engine(APP . DS .'views');
// Add folder to 'layouts'
$template->addFolder('template', APP . DS .'views'. DS .'template');
// Parsing assets folder 'public'
$template->loadExtension(new League\Plates\Extension\Asset(APP . DS . 'public', false));