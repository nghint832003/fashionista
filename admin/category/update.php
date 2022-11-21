<?php
if(is_array($category)){
    extract($category);
}
?>

<p style="text-align:center;color:green;font-size:24px">Cập nhật loại sản phẩm</p>

<!--        <form action="index.php?act=updateCategory" method="post" enctype="multipart/form-data">-->
<!--            <div style="margin-left: 50px;">-->
<!--            <div class="form-group">-->
<!--                <div class="row mb10">-->
<!--                    Mã loại <br>-->
<!--                    <input type="text" name="maloai" disabled placeholder="auto number">-->
<!--                </div>-->
<!--                <div class="row mb10">-->
<!--                    Tên loại <br>-->
<!--                    <input type="text" name="name_category" value="--><?php //if(isset($name_category)&&($name_category!="")) echo $name_category ;?><!--">-->
<!--                </div>-->
<!--            </div>-->
<!--            </div>-->
<!--            <div class="row mb10">-->
<!--                <input type="hidden" name="id_category" value="--><?php //if(isset($id_category)&&($id_category>0)) echo $id_category ;?><!--">-->
<!--                <input type="file"  name="pic">-->
<!--                <input type="submit" name="updateCate" value="Cập nhật">-->
<!--                <input type="reset" value="Nhập lại">-->
<!--            </div>-->
<!--            --><?php
//            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
//            ?>
<!--        </form>-->
<!--    </div>-->
<form  action="index.php?act=updateCategory" method="post" enctype="multipart/form-data">
    <div style="margin-left: 50px;">
        <div class="form-group">
            <label class="col-md-4 control-label">Mã loại</label>
            <div class="col-md-4">
                <input class="form-control input-md"  name="id_category" value="<?php if(isset($id_category)&&($id_category>0)) echo $id_category ;?>">
            </div>

            <label class="col-md-4 control-label" >Tên loại</label>
            <div class="col-md-4">
                <input class="form-control input-md" type="text" name="name_category" value="<?php if(isset($name_category)&&($name_category!="")) echo $name_category ;?>">
            </div>

            <label class="col-md-4 control-label" >Ảnh loại</label>
            <div class="col-md-4">
                <input class="form-control input-md" name="pic" placeholder="tên danh mục" class="form-control input-md" type="file">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <input type="submit" name="updateCate" value="Cập nhật">
                <input type="reset" value="Nhập lại">
            </div>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
    </div>

</form>
</div>
