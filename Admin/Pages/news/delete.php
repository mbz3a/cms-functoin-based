<?php 
    $id = $_GET['id'];
    news_delete_row($id);
    header('location:dashboard.php?module=news&page=list&del_stat=done');
    
?>