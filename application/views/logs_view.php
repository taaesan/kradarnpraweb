<?php 

foreach ($files as $k => $v) {
    
    if(preg_match('/[.](php)$/', $v)){
        
        $pieces = explode(".", $v);
        echo("<a href=\"viewlogs/$pieces[0]\" >$v</a><br/>");
    }
}

?>