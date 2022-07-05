<?php
include_once "../../Includes/ad_functions.php";
if(!isset($_SESSION['user_id'])){
    header('location:../index.php');
    
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <div class="topmenu">
            0
        </div>
        <div class="menu">
            <div class="menu_item">
                <a href="?module=index&page=index">
                    صفحه ی اصلی 
                </a>
            </div>
            <div class="menu_item">
                <div class="menu-heading">
                    منو
                </div>
                <div class="menu-sub-menus">
                    <div class="items">
                        <a href="?module=menu&page=add">
                            منو جدید
                        </a>
                    </div>
                    <div class="items">
                        <a href="?module=menu&page=list" >
                            لیست منو ها
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="menu-heading">
                    محصولات
                </div>
                <div class="menu-sub-menus">
                    <div class="items">
                        <a href="?module=products&page=add">
                            افزودن محصول جدید
                        </a>
                    </div>
                    <!-- 0930 152 1727 -->
                    <div class="items">
                        <a href="?module=products&page=list" >
                            لیست محصولات
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="menu-heading">
                    دسته بندی محصولات
                </div>
                <div class="menu-sub-menus">
                    <div class="items">
                        <a href="?module=prod_cat&page=add">
                            افزودن دسته بندی جدید
                        </a>
                    </div>
                    <div class="items">
                        <a href="?module=prod_cat&page=list" >
                            لیست دسته بندی ها
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="menu-heading">
                    دسته بندی اخبار
                </div>
                <div class="menu-sub-menus">
                    <div class="items">
                        <a href="?module=news_cat&page=add">
                            افزودن دسته بندی جدید اخبار
                        </a>
                    </div>
                    <div class="items">
                        <a href="?module=news_cat&page=list" >
                            لیست دسته بندی ها اخبار
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu_item">
                <div class="menu-heading">
                    اخبار
                </div>
                <div class="menu-sub-menus">
                    <div class="items">
                        <a href="?module=news&page=add">
                            افزودن خبر جدید
                        </a>
                    </div>
                    <div class="items">
                        <a href="?module=news&page=list" >
                            لیست اخبار
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <?php 
                // if(isset($_GET['module'])&&isset($_GET['page'])){
                //     $module = $_GET['module'];
                //     $page = $_GET['page'];
                //     include_once "$module/$page.php";
                // }
                // else{
                //     include_once "index/index.php";
                // }
                @$module = $_GET['module']?$_GET['module']:'index';
                @$page = $_GET['page']?$_GET['page']:'index';

                include_once "$module/$page.php";
            ?>
        </div>
    </div>


    <script src="../../Javascripts/scripts.js" ></script>
    <script src="../../Javascripts/admin-public.js" ></script>
</body>
</html>