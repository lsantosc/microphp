<?PHP
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$template = include __DIR__ . '/bootstrap.php';

$router = new League\Route\RouteCollection;

$router->addRoute('GET', '/', function (Request $request, Response $response) use($template) {
    $response->setContent($template->render('index'));
    return $response;
});

$router->addRoute('GET', '/test', function (Request $request, Response $response) use ($template) {
    $response->setContent($template->render('test'));
    return $response;
});

// not edit
$dispatcher = $router->getDispatcher();
$request = Request::createFromGlobals();
$response = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());
$response->send();