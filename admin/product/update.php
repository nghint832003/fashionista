<?php
if(is_array($product)){
    extract($product);
}
?>

<p style="text-align:center;color:green;font-size:24px">Cập nhật sản phẩm</p>
<form  action="index.php?act=updateProduct" method="post" enctype="multipart/form-data">
    <div style="margin-left: 50px;">
        <div class="form-group">
            <label class="col-md-4 control-label">Mã sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md"  name="id_product" value="<?php if(isset($id_product)&&($id_product>0)) echo $id_product ;?>">
            </div>

            <label class="col-md-4 control-label" >Tên sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md" type="text" name="name_product" value="<?php if(isset($name_product)&&($name_product!="")) echo $name_product ;?>">
            </div>

            <label class="col-md-4 control-label" >Mã loại</label>
            <select id="product_categorie" name="id_category" class="form-control">
                <option value="<?php if(isset($id_category)&&($id_category!="")) echo $id_category ;?>"></option>
                <?php
                foreach ($listCategory as $category) {
                    extract($category);
                    echo '<option value="'.$id_category.'">'.$name_category.'</option>';
                }
                ?>
            </select>

            <label class="col-md-4 control-label" >Ảnh 1</label>
            <div class="col-md-4">
                <input class="form-control input-md" name="pic1" value="<?php if(isset($pic1)&&($pic1!="")) echo $pic1 ;?>" class="form-control input-md" type="file">
            </div>

            <label class="col-md-4 control-label" >Ảnh 2</label>
            <div class="col-md-4">
                <input class="form-control input-md" name="pic2" value="<?php if(isset($pic)&&($pic2!="")) echo $pic2 ;?>" class="form-control input-md" type="file">
            </div>

            <label class="col-md-4 control-label" >Ảnh 3</label>
            <div class="col-md-4">
                <input class="form-control input-md" name="pic3" value="<?php if(isset($pic3)&&($pic3!="")) echo $pic3 ;?>" class="form-control input-md" type="file">
            </div>

            <label class="col-md-4 control-label" >Ảnh 4</label>
            <div class="col-md-4">
                <input class="form-control input-md" name="pic4" value="<?php if(isset($pic4)&&($pic4!="")) echo $pic4 ;?>" class="form-control input-md" type="file">
            </div>

            <label class="col-md-4 control-label" >Mô tả sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md" name="des_product" value="<?php if(isset($des_product)&&($des_product!="")) echo $des_product ;?>"" class="form-control input-md"  >
            </div>

            <label class="col-md-4 control-label" >Giá sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md" name="price_product" value="<?php if(isset($price_product)&&($price_product!="")) echo $price_product ;?>"" class="form-control input-md"  >
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <input type="submit" name="updateProduct" value="Cập nhật">
                <input type="reset" value="Nhập lại">
            </div>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
    </div>

</form>
</div>