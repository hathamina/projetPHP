<?php

function render(string $path, array $variables){

    extract($variables);

    ob_start();// j ouvre un tompon et tous ce qu il va s'afficher s'affiche dans ce tompon
    require('templates/'. $path .'.html.php');
    $pageContent = ob_get_clean();  // dans cette affichage je mit laffichage de require('templates/articles/index.html.php');
    
    require('templates/layout.html.php');
}



function redirect(string $url): void{
    header("Location: $url");
    exit();
}
?>