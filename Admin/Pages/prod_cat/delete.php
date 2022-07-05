<?php 
    $id = $_GET['id'];
    prodcat_delete_row($id);
    if(prodcat_delete_row($id)){
        header('location:dashboard.php?module=prod_cat&page=list&del_stat=done');
    }
    else{
        header('location:dashboard.php?module=prod_cat&page=list&del_stat=no');
    }
    
?>