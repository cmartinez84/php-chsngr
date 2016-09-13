<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Change.php";

    session_start();
    if (empty($_SESSION['collection'])) {
        $_SESSION['collection'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

  //loads actual twig file
    $app->get("/", function() use ($app) {
      return $app['twig']->render("home.html.twig");
    });

  //loads basic php
    $app->post("/results", function() use ($app) {
        $newChange = new Change;
        $newChange->quarters($_POST['user_input']);
        return $app['twig']->render("results.html.twig", array('newChange' => $newChange));
    });

    return $app;
?>
