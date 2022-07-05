<?php
$id = $_GET['id'];
$sh_data = showedit_data($id);


if(isset($_POST['newsbtn'])){

    $data = $_POST['news'];

    if($_FILES['images']['name']){
        $img_path = $sh_data['news_img'];
        $im_p_arr = explode("/",$img_path);
        $idx = count($im_p_arr);
        $maindir = $im_p_arr[$idx-2];
        unlink($img_path);
        $img = uploader("images",'../img/news/',$maindir);
    }
    else{
       $img =$sh_data['news_img'];
    }
    editnews($data,$img,$id);
}
?>

<div id="set_title" data-set-title="ویرایش خبر جدید" ></div>
<div class="pages-wrpper">
    <h2 class="titles">ویرایش خبر<?php echo " ".$sh_data['news_title'];  ?></h2>
    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="frm-ipt">
                <input type="text" name="news[title]" placeholder="عنوان خبر" value="<?php
                    echo  $sh_data['news_title']; 
                ?>">
            </div>

            <div class="frm-ipt">
                <label for="text-area">
                    متن مربوط به خبر
                </label>
                <textarea name="news[text]" id="text-area" ><?php
                    echo  $sh_data['news_text']; 
                ?></textarea>
            </div>

            <div class="frm-ipt">
                <select name="news[procat]" id="">
                    <?php
                        $rows_newscat = shownewscats();
                        foreach ($rows_newscat as $key) {
                            echo "<option value='$key[newscat_id]'  " ;
                            if($key['newscat_id']==$sh_data['news_newscat']){
                                echo "  "." selected >";
                            }
                            else{
                                echo " >";
                            }
                            echo $key['newscat_title']."</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="frm-ipt">
                <img  src="<?php
                    echo $sh_data['news_img'];
                ?>" data-loc="news" alt="">
                <input type="file" name="images" id="inpt-file">  
            </div>

            <div class="frm-ipt">
                <input type="submit" name="newsbtn" value="ویرایش خبر">
            </div>
        </form>
    </div>
</div>