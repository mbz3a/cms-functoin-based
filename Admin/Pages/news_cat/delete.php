<?php 
    $id = $_GET['id'];
    newscat_delete_row($id);
    if(newscat_delete_row($id)){
        header('location:dashboard.php?module=news_cat&page=list&del_stat=done');
    }
    else{
        header('location:dashboard.php?module=news_cat&page=list&del_stat=no');
    }
    
?>