<?php
if(isset($_POST['newsbtn'])){
    $data = $_POST['news'];
    $foldername = "news-".rand();
    
    $img = uploader('images','../img/news/',$foldername);
    addnew_news($data,$img);
}


?>

<div id="set_title" data-set-title="افزودن خبر جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">افزودن خبر جدید</h2>
    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="frm-ipt">
                <input type="text" name="news[title]" placeholder="عنوان خبر">
            </div>
            <div class="frm-ipt">
                <label for="text-area">
                    متن مربوط به خبر
                </label>
                <textarea name="news[text]" id="text-area" ></textarea>
            </div>
            <div class="frm-ipt">
                <select name="news[procat]" id="">
                    <?php
                        $rows_newscat = shownewscats();
                        foreach ($rows_newscat as $key) {
                            echo "<option value='$key[newscat_id]'>$key[newscat_title]</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="frm-ipt">
                <input type="file" name="images" id="inpt-file">  
            </div>
            
            <div class="frm-ipt">
                <input type="submit" name="newsbtn" value="افزودن خبر جدید">
            </div>

        </form>
    </div>
</div>