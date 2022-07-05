<?php 
    $id = $_GET['id'];
    menu_delete_row($id);
    if(menu_delete_row($id)){
        header('location:dashboard.php?module=menu&page=list&del_stat=done');
    }
    else{
        header('location:dashboard.php?module=menu&page=list&del_stat=no');
    }
    
?>