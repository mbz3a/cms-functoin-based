<?php
    $id = $_GET['id'];
    $row = menu_find_by_id($id);
?>

<?php
if(isset($_POST['menubtn'])){
    $data = $_POST['menu'];
    editmenu($data,$id);
}


?>

<div id="set_title" data-set-title="افزودن منو جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">ویرایش منو ی
        <?php
            echo $row['menu_title'];
        ?>
    </h2>
    <div class="form-container">
        <form action="" method="POST">
            <div class="frm-ipt">
                <input type="text" name="menu[title]" 
                value="<?php
                    echo $row['menu_title'];
                ?>"  
                placeholder="عنوان منو" >
            </div>
            <div class="frm-ipt">
                <input type="text" name="menu[url]"

                value="<?php
                    echo $row['menu_url'];
                ?>" 

                placeholder="آدرس منو" >
            </div>
            <h3>وضعیت نمایشس</h3>

            <div class="radio-container">
                <input type="radio" name="menu[status]" id="menu-status1"
                <?php
                    if($row['menu_statues']==0){
                        echo "checked";
                    }
                ?>
                value="0" />
                <label for="menu-status1"> غیر فعال</label>
            </div>
            <div class="radio-container">
                <input type="radio" name="menu[status]" id="menu-status2" 
                <?php
                    if($row['menu_statues']==1){
                        echo "checked";
                    }
                ?> 
                 value="1" />
                <label for="menu-status2">فعال</label>
            </div>
            
            <div class="frm-ipt">
                <select name="menu[chid]" id="">
                    <option value="0">سرگروه</option>
                    <?php
                        $submenu = chid_menu_sub();
                        foreach ($submenu as $subs ) {
                            echo "<option value='$subs[menu_id]' ";

                            if($row['menu_chid']==$subs['menu_id']){
                                echo " selected  >";
                            }
                            else{
                                echo " >";
                            }
                            echo "$subs[menu_title]</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="frm-ipt">
                <input type="text" 
                value="<?php
                    echo $row['menu_sort'];
                ?>"  
                name="menu[sort]" placeholder="ترتیب بر اساس" >
            </div>
            <div class="frm-ipt">
                <input type="submit" name="menubtn" value="ویرایش" >
            </div>
        </form>
    </div>
</div>
