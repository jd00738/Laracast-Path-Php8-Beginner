<?php

/**
 * BELOW CONDITION WILL HELP IN ROUTING OF THE APP ACCORDING TO PATH IN THE URL 
 */

return [
    '/' => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/notes' => "controllers/notes/index.php",
    '/note' => "controllers/notes/show.php",
    '/notes/create' => "controllers/notes/create.php",

];
