<?php

require_once "../config.php";


if(!isset($_GET['p'])) {
    
    include ROOT_PATH."/view/accueil.php";


}else if(in_array($_GET['p'],PUBLIC_PAGES)){

    
    include ROOT_PATH."/view/".$_GET['p'].".php";
}

else {
   
    include ROOT_PATH."/view/erreur404.php";
}
?>