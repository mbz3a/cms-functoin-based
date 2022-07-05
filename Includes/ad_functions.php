<?php
include_once 'config.php';

function vardump2($arr){
    echo "<pre dir='ltr'>";
    var_dump($arr);
    echo "</pre>";
}
function    adlogin($ad_data){
    $username = $ad_data['username'];
    $password = $ad_data['password'];
    $databse = db_config();

    $password = md5($password);
    $sql_select_user = "SELECT * FROM admin_tbl WHERE ad_username='$username' ";
    $sql_run_ad = mysqli_query($databse,$sql_select_user);
    $results = mysqli_fetch_assoc($sql_run_ad); 
    if($results){
        if($results['ad_password']==$password){
            $_SESSION['user_id']= $results['ad_id'];
            if(isset($ad_data['remember'])){
                setcookie("ad_username","$username",time()+(60*60*24*30));
                setcookie("ad_password","$password",time()+(60*60*24*30));
            }
            header('location:pages/dashboard.php');
        }
    }
    else{
        echo  "no";
    }
}

function    loginwithCookie(){
    if(isset($_COOKIE['ad_password'])&&isset($_COOKIE['ad_username'])){
        $username = $_COOKIE['ad_username'];
        $password = $_COOKIE['ad_password'];
        $databse = db_config();

        $sql_select_user = "SELECT * FROM admin_tbl WHERE ad_username='$username' ";
        $sql_run_ad = mysqli_query($databse,$sql_select_user);
        $results = mysqli_fetch_assoc($sql_run_ad); 
        if($results){
            if($results['ad_password']==$password){
                $_SESSION['user_id']= $results['ad_id'];
                header('location:pages/dashboard.php');
            }
        }
        else{
            echo  "no";
        }
    }
}

function uploader($inptname,$dir,$folder){
    $f_data = $_FILES[$inptname];
    $name = $f_data['name'];
    $namearr = explode(".",$name);
    $exten = end($namearr);

    if(!file_exists($dir)){
        mkdir($dir);
    }
    if(!file_exists($dir.$folder)){
        mkdir($dir.$folder);
    }

    $file_newName = rand().".".$exten;
    $from = $f_data['tmp_name'];
    $to = $dir.$folder."/".$file_newName;
    
    move_uploaded_file($from,$to);
    return $to;
}


if(isset($_GET['module'])){

    $module = $_GET['module'];
    if($module=='menu'){
        include_once 'ad_menu.php';
    }
    else if($module=='prod_cat'){
        include_once 'ad_product_cat.php';
    }
    else if($module=='products'){
        include_once 'ad_products.php';
    }
    else if($module=='news_cat'){
        include_once 'ad_news_cat.php';
    }
    else if($module=='news'){
        include_once 'ad_news.php';
    }
}
else{
    include_once 'ad_menu.php';
}

?>