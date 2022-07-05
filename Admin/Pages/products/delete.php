<?php 
    $id = $_GET['id'];
    products_delete_row($id);
    header('location:dashboard.php?module=products&page=list');
    
?>