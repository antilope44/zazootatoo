<?php


if( array_key_exists( 'route', $_GET ) )
{
    $controller = new FrontController();
    switch( $_GET['route'] )
    {
        case 'home':
            $controller->showHome();
            break;
        case 'carrousel':
            $controller->showCarrousel();
            break;
        case 'form':
            $controller->showForm();
            break;  
        case 'mozaike':
            $controller->showMozaike();
            break;  
        case 'bio':
            $controller->showBio();
            break;  
        default:
            $controller->showNotFound();
            break;
    }

}
else
{
    header( 'Location: index.php?route=home' );
    exit();
};
