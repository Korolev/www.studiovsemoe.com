<?php
    $url="http://learn.knockoutjs.com";
    $req = $_SERVER['REQUEST_URI']
    
    return file_get_contents($url + $req);

?>