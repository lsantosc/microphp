<?PHP
ini_set('display_errors', 1);
// Load contants variables of paths
require __DIR__ . '/paths.php';
// Loading composer autoload vendors
require_once APP . DS . 'vendor'. DS .'autoload.php';
// Template globally defined
$template = new League\Plates\Engine(APP . DS .'views');
// Add folder to 'layouts'
$template->addFolder('template', APP . DS .'views'. DS .'template');
// Parsing assets folder 'public'
$template->loadExtension(new League\Plates\Extension\Asset(WWW_ROOT, true));

return $template;