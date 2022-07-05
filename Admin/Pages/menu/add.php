<?php
if(isset($_POST['menubtn'])){
    addmenu($_POST['menu']);
}


?>

<div id="set_title" data-set-title="افزودن منو جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">افزودن منوی جدید</h2>
    <div class="form-container">
        <form action="" method="POST">
            <div class="frm-ipt">
                <input type="text" name="menu[title]" placeholder="عنوان منو" >
            </div>
            <div class="frm-ipt">
                <input type="text" name="menu[url]" placeholder="آدرس منو" >
            </div>
            <h3>وضعیت نمایشس</h3>
            <div class="radio-container">
                <input type="radio" name="menu[status]" id="menu-status1" value="0">
                <label for="menu-status1"> غیر فعال</label>
            </div>
            <div class="radio-container">
                <input type="radio" name="menu[status]" id="menu-status2" value="1">
                <label for="menu-status2">فعال</label>
            </div>
            
            <div class="frm-ipt">
                <select name="menu[chid]" id="">
                    <option value="0">سرگروه</option>
                    <?php
                        $submenu = chid_menu_sub();
                        foreach ($submenu as $subs ) {
                            echo "<option value='$subs[menu_id]'>$subs[menu_title]</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="frm-ipt">
                <input type="text" name="menu[sort]" placeholder="ترتیب بر اساس" >
            </div>
            <div class="frm-ipt">
                <input type="submit" name="menubtn" value="افزودن منوی جدید" >
            </div>
        </form>
    </div>
</div>

<!-- <div id="ad_modal-con" class="modal" 
data-err="
<?php
/*
    if(isset($_GET['add_m_err'])){
        $add_res = $_GET['add_m_err'];
        echo "$add_res";
    }
    else{
        echo "modal-off";
    }
    */
?>" > -->

    <!-- <div class="box" id="ad_modal-box">
        <img id="ad_err_img" src="img/error.png" alt="">
        <p id="ad_err_msg">
            Menu is not added
        </p>
    </div> -->
</div>
