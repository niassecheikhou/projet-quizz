 <?php 
 


    if(isset($_REQUEST['controlers'])){
        switch($_REQUEST['controlers']){
            case "securite" :
                    require_once (PATH_SRC."controlers/securite.controlers.php");
            break;
            case "user":
                    require_once (PATH_SRC."controlers/user.controlers.php");
            break;
            
                    
        }
    }else{
       
        require_once (PATH_SRC."controlers/securite.controlers.php");
    }

?> 