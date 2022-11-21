<p style="text-align:center;color:green;font-size:24px">Thêm chi tiết sản phẩm</p>
<form  class="" action="/admin/index.php?act=addDetailProduct" method="post" enctype="multipart/form-data">
    <div style="margin-left: 50px;">
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Mã chi tiết sản phẩm</label>
            <div class="col-md-4">
                <input id="product_id" name="id_pd" placeholder="auto number" disabled class="form-control input-md" required="" type="text">
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-4 control-label" for="product_categorie">Tên sản phẩm</label>
            <div class="col-md-4">
                <select id="product_categorie" name="id_product" class="form-control">
                    <?php
                    foreach ($listProduct as $product) {
                        extract($product);
                        echo '<option value="'.$id_product.'">'.$name_product.'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">Màu sản phẩm </label>
            <div class="col-md-4">
                <input id="available_quantity" name="color_product" class="form-control input-md" required="" type="text">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="product_weight">Size sản phẩm</label>
            <div class="col-md-4">
                <input id="product_weight" name="size_product" class="form-control input-md" required="" type="text">

            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="des_product">Số lượng sản phẩm</label>
            <div class="col-md-4">
                <input class="form-control" id="quantity_product" name="quantity_product">
            </div>
        </div>




        <div class="form-group">
            <div class="col-md-4">
                <button id="singlebutton" name="addDetailPro" class="btn btn-primary">thêm</button>
            </div>
        </div>
    </div>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>


</div>