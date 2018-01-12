<?php



    require_once ('vendor/autoload.php');

    $f3 = Base::instance();

    //turn on error reporting
    $f3->set('DEBUG',3);

    $f3->route('GET /', function() {
        echo '<h1>routing demo</h1>';
    });

    $f3->route('GET /page1', function(){
        echo '<h1>This is page 1</h1>';
    });

    $f3->route('GET /page1/subpage-a', function(){
        echo '<h1>This is page 2</h1>';
    });

    $f3->run();
?>