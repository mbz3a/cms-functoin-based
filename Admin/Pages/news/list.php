
<div class="pages-wrpper">
    <h2 class="titles">لیست خبرات</h2>
    <div class="tbl-container">
        <table>
            <thead>
                <tr>
                    <th>عنوان خبر</th>
                    <th>متن</th>
                    <th>دسته بندی خبر</th>
                    <th>تاریخ</th>
                    <th>عکس</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
                <tbody>
                <?php
                    $rows = shownews();
                    foreach ($rows as $key){   
                ?>
                    <tr>
                        <td><?php echo $key['news_title']; ?></td>
                        <td><?php echo $key['news_text']; ?></td>
                        <td><?php 
                            $id = $key['news_newscat'];                
                            $results = shownewscat_list($id);
                            // vardump2($results);
                            echo $results['newscat_title'];
                        ?></td>
                        <td class="dir-left" ><?php echo $key['news_date']; ?></td>
                        <td class="tbls-img" >
                            <img src="<?php echo $key['news_img']; ?>" data-loc="news" alt="image">
                        </td>
                        <td class="dir-left" >
                            <a href="
                                <?php 
                                    $dd = $key['news_id'] ;
                                    echo "dashboard.php?module=news&page=edit&id=".$dd; 
                                ?>"
                            >
                                ویرایش
                            </a>
                        </td>
                        <td class="dir-left" >
                            <a href="
                                <?php 
                                    $dd = $key['news_id'] ;
                                    echo "dashboard.php?module=news&page=delete&id=".$dd; 
                                ?>"
                            >
                                حذف
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
        </table>
    </div>
</div>


<div id="set_title" data-set-title="لیست دسته بندی ها" ></div>