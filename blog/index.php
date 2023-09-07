<?php 

require_once 'classes/BlogPostService.php';

// index.php : default
// index.php?a=products : products
// index.php?a=team : team
// index.php?a=contact : contact

$action = filter_input(INPUT_GET, 'a');

$tpl = 'standard';

$service = new BlogPostService();

switch($action) {

    case 'products':
        $post = $service->findByTitle('Produkte');

        // Array Destruktion funktioniert nicht richtig, da die Keys nicht nummerisch sind
        // [$title, $headline, $content] = $service->findByTitle('Produkte');
        break;

    case 'team':
        $post = $service->findByTitle('Team');
        break;
        
    case 'contact':
        $post = $service->findByTitle('Kontakt');
        break;

    default:
        $post = $service->findByTitle('Home');

}

extract($post); // Erzeugt für jeden Key im Array eine Variable

include 'tpl/'.$tpl.'.php';