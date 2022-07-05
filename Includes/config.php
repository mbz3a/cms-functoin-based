<?php
session_start();

date_default_timezone_set("Asia/Tehran");

// 

function db_config(){

    $db = mysqli_connect("localhost","root","","cms-functionbased");
    mysqli_set_charset($db,"utf8"); 
    mysqli_query($db,"SET NAME 'utf8'");

    // creating admin tables

    $ad_tablechecker = "SELECT * FROM admin_tbl";
    $ad_check =mysqli_query($db,$ad_tablechecker);

    if(!$ad_check){
        $sql_creat_table = "CREATE TABLE admin_tbl(
            ad_id INT AUTO_INCREMENT,
            ad_username VARCHAR(30),
            ad_password VARCHAR(60),
            ad_name VARCHAR(30),
            ad_lastname VARCHAR(30),
            PRIMARY KEY (ad_id) )";
        $sql_run = mysqli_query($db,$sql_creat_table);
    }
    
    // creating menu tables

    $menu_tablechecker = "SELECT * FROM menu_tbl";
    $menu_check =mysqli_query($db,$menu_tablechecker);

    if(!$menu_check){
        $sql_creat_table = "CREATE TABLE menu_tbl(
            menu_id INT AUTO_INCREMENT,
            menu_title VARCHAR(30),
            menu_url VARCHAR(60),
            menu_sort INT,
            menu_statues ENUM('0','1') DEFAULT '0',
            menu_chid INT,
            PRIMARY KEY (menu_id) )";
        $sql_run = mysqli_query($db,$sql_creat_table);
    }

    // creating menu tables

    $prodcat_checker = "SELECT * FROM prodcat_tbl";
    $prodcat_checker_run =mysqli_query($db,$prodcat_checker);

    if(!$prodcat_checker_run){

        $sql_creat_table = "CREATE TABLE prodcat_tbl(
            prodcat_id INT AUTO_INCREMENT,
            prodcat_title VARCHAR(30),
            prodcat_sort INT,
            prodcat_statues ENUM('0','1') ,
            PRIMARY KEY (prodcat_id) )";

        $sql_run = mysqli_query($db,$sql_creat_table);
    }

    // creating products tables

    $products_checker = "SELECT * FROM products_tbl";
    $products_checker_run =mysqli_query($db,$products_checker);

    if(!$products_checker_run){

        $sql_creat_table = "CREATE TABLE products_tbl(
            products_id INT AUTO_INCREMENT,
            products_title VARCHAR(30),
            products_text TEXT,
            products_prodcat INT,
            products_date  DATETIME,
            products_img VARCHAR(150),
            PRIMARY KEY (products_id) )";

        $sql_run = mysqli_query($db,$sql_creat_table);
    }

    $newscat_checker = "SELECT * FROM newscat_tbl";
    $newscat_checker_run =mysqli_query($db,$newscat_checker);

    if(!$newscat_checker_run ){
        $sql_creat_table = "CREATE TABLE newscat_tbl(
            newscat_id INT AUTO_INCREMENT,
            newscat_title VARCHAR(30),
            PRIMARY KEY (newscat_id) )";

        $sql_run = mysqli_query($db,$sql_creat_table);
    }

    $news_checker = "SELECT * FROM news_tbl";
    $news_checker_run =mysqli_query($db,$news_checker);

    if(!$news_checker_run){

        $sql_creat_table = "CREATE TABLE news_tbl(
            news_id INT AUTO_INCREMENT,
            news_title VARCHAR(30),
            news_text TEXT,
            news_newscat INT,
            news_date  DATETIME,
            news_img VARCHAR(150),
            PRIMARY KEY (news_id) )";

        $sql_run = mysqli_query($db,$sql_creat_table);
    }
    
    $contacts_checker = "SELECT * FROM contacts_tbl";
    $contacts_checker_run =mysqli_query($db,$contacts_checker);

    if(!$contacts_checker_run){

        $sql_creat_table = "CREATE TABLE contacts_tbl(
            contacts_id INT AUTO_INCREMENT,
            contacts_name VARCHAR(30),
            contacts_text TEXT,
            contacts_email VARCHAR(30),
            PRIMARY KEY (contacts_id) )";

        $sql_run = mysqli_query($db,$sql_creat_table);
    }

    return $db;
}

db_config();

?>