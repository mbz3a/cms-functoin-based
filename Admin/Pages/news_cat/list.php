
<div class="pages-wrpper">
    <h2 class="titles">لیست دسته بندی  ها</h2>
    <div class="tbl-container">
        <table>
            <thead>
                <tr>
                    <th>عنوان دسته بندی</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $all_newscat = newscatlist();
                        foreach ($all_newscat as $newscat) {
                        ?>
                        <tr>
                            <td><?php echo "$newscat[newscat_title]"; ?></td>

                            <td>
                                <a href="
                                <?php 
                                    $dd = $newscat['newscat_id'] ;
                                    echo "dashboard.php?module=news_cat&page=edit&id=".$dd; ?>
                                ">
                                    ویرایش
                                </a>
                            </td>

                            <td>
                                <a href="
                                <?php 
                                    $dd = $newscat['newscat_id'] ;
                                    echo "dashboard.php?module=news_cat&page=delete&id=".$dd; ?>
                                ">
                                    حذف
                                </a>
                            </td>

                        </tr>
                    <?php }  ?>
                </tbody>
        </table>
    </div>
</div>


<div id="set_title" data-set-title="لیست دسته بندی ها" ></div>