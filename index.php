<?php
include_once './Includes/ad_functions.php';
$menu_rows =  main_menulist(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>CMS</title>
</head>
<body>
    <nav>
        <ul class="menumain">
            <?php 
                foreach ($menu_rows as $val):
            ?><li>
                <a href="<?php echo $val['menu_url'] ?>">
                    <?php echo $val['menu_title'] ?>
                </a>


                <ul class="dropdown_menu">
                <?php 
                    $id = $val['menu_id'];
                    $sub_menu = sub_menulist($id) ;
                    if($sub_menu!=0):
                    foreach ($sub_menu as $key):
                ?>
                
                    <li>
                        <a href="<?php echo $key['menu_url'] ?>">
                            <?php echo $key['menu_title'] ?>
                        </a>
                    </li><?php endforeach; endif; ?>
                </ul>
                        

            </li><?php 
                endforeach;
            ?>
        </ul>                        
    </nav>  
</body>
</html>
