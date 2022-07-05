
<div class="pages-wrpper">
    <h2 class="titles">لیست دسته بندی  ها</h2>
    <div class="tbl-container">
        <table>
            <thead>
                <tr>
                    <th>عنوان دسته بندی </th>
                    <th>ترتیب</th>
                    <th>وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $all_prodcat = prodcatlist();
                        foreach ($all_prodcat as $prodcat) {
                        ?>
                        <tr>
                            <td><?php echo "$prodcat[prodcat_title]"; ?></td>
                            <td><?php echo "$prodcat[prodcat_sort]"; ?></td>
                            <td><?php
                                if($prodcat['prodcat_statues']==0){
                                    echo "غیر فعال" ;
                                }
                                else{
                                    
                                    echo "فعال" ;
                                }
                            ?></td>
                            <td>
                                <a href="
                                <?php 
                                    $dd = $prodcat['prodcat_id'] ;
                                    echo "dashboard.php?module=prod_cat&page=edit&id=".$dd; ?>
                                ">
                                    ویرایش
                                </a>
                            </td>
                            <td>
                                <a href="
                                <?php 
                                    $dd = $prodcat['prodcat_id'] ;
                                    echo "dashboard.php?module=prod_cat&page=delete&id=".$dd; ?>
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