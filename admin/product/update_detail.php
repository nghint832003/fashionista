<?php
if(is_array($productDetail)){
    extract($productDetail);
}
?>

<p style="text-align:center;color:green;font-size:24px">Cập nhật chi tiết sản phẩm</p>
<form  action="index.php?act=updateProductDetail" method="post" enctype="multipart/form-data">
    <div style="margin-left: 50px;">
        <div class="form-group">
            <label class="col-md-4 control-label">Mã chi tiết sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md"  name="id_pd" value="<?php if(isset($id_pd)&&($id_pd>0)) echo $id_pd ;?>">
            </div>

            <label class="col-md-4 control-label" >Mã sản phẩm</label>
            <select id="product_categorie" name="id_product" class="form-control">
                <option value="<?php if(isset($id_category)&&($id_category!="")) echo $id_category ;?>"></option>
                <?php
                foreach ($listProduct as $product) {
                    extract($product);
                    echo '<option value="'.$id_product.'">'.$name_product.'</option>';
                }
                ?>
            </select>

            <label class="col-md-4 control-label" >Màu sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md" value="<?php if(isset($color_product)&&($color_product>0)) echo $color_product ;?>" name="color_product" class="form-control input-md" type="text">
            </div>

            <label class="col-md-4 control-label" >Kích cỡ sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md" value="<?php if(isset($size_product)&&($size_product>0)) echo $size_product ;?>" name="size_product" class="form-control input-md" type="text">
            </div>

            <label class="col-md-4 control-label" >Số lượng sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control input-md" value="<?php if(isset($quantity_product)&&($quantity_product>0)) echo $quantity_product ;?>" name="quantity_product" class="form-control input-md" type="text">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <input type="submit" name="updateProductDetail" value="Cập nhật">
                <input type="reset" value="Nhập lại">
            </div>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
    </div>

</form>
</div>