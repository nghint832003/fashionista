<p style="text-align:center;color:green;font-size:24px">Thêm chi tiết sản phẩm</p>
<form  class="" action="/admin/index.php?act=addProduct" method="post" enctype="multipart/form-data">
    <div style="margin-left: 50px;">
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Mã sản phẩm</label>
            <div class="col-md-4">
                <input id="product_id" name="product_id" placeholder="auto number" disabled class="form-control input-md" required="" type="text">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Tên sản phẩm</label>
            <div class="col-md-4">
                <input id="product_name" name="name_product" class="form-control input-md" required="" type="text">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="product_categorie">Loại sản phẩm</label>
            <div class="col-md-4">
                <select id="product_categorie" name="id_category" class="form-control">
                    <?php
                    foreach ($listCategory as $category) {
                        extract($category);
                        echo '<option value="'.$id_category.'">'.$name_category.'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">ngày thêm </label>
            <div class="col-md-4">
                <input id="available_quantity" name="date_product" placeholder="ngày thêm" class="form-control input-md" required="" type="date">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="product_weight">Giá sản phẩm</label>
            <div class="col-md-4">
                <input id="product_weight" name="price_product" class="form-control input-md" required="" type="text">

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="des_product">Mô tả sản phẩm</label>
            <div class="col-md-4">
                <textarea class="form-control" id="des_product" name="des_product"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">ảnh 1</label>
            <div class="col-md-4">
                <input id="filebutton" name="pic1" class="input-file" type="file">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">ảnh 2</label>
            <div class="col-md-4">
                <input id="filebutton" name="pic2" class="input-file" type="file">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">ảnh 3</label>
            <div class="col-md-4">
                <input id="filebutton" name="pic3" class="input-file" type="file">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">ảnh 4</label>
            <div class="col-md-4">
                <input id="filebutton" name="pic4" class="input-file" type="file">
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-4">
                <button id="singlebutton" name="updatePro" class="btn btn-primary">thêm</button>
            </div>
        </div>
    </div>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>


</div>