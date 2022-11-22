<!--<form action="/admin/index.php?act=addCategory" method="post" enctype="multipart/form-data">-->
<!--                    <div class="row mb10">-->
<!--                        Mã loại <br>-->
<!--                        <input type="text" name="maloai" disabled placeholder="auto number">-->
<!--                    </div>-->
<!--                    <div class="row mb10">-->
<!--                        Tên loại <br>-->
<!--                        <input type="text" name="name_category">-->
<!--                    </div>-->
<!--                    <div class="row mb10">-->
<!--                        Ảnh loại <br>-->
<!--                        <input type="file" name="hinh">-->
<!--                    </div>-->
<!--                    <div class="row mb10">-->
<!--                        <input type="submit" name="addCate" value="Thêm mới">-->
<!--                        <input type="reset" value="Nhập lại">-->
<!--                        <a href="index.php?act=listCategory"><input type="button" value="Danh sách"></a>-->
<!--                    </div>-->
<!--                    --><?php
//
//                         if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
//                    ?>
<!--</form>-->
<p style="text-align:center;color:green;font-size:24px">Thêm danh mục sản phẩm</p>
<form action="/admin/index.php?act=addCategory" method="post" enctype="multipart/form-data" onsubmit="return true">
    <div style="margin-left: 50px;">
        <div class="form-group">
            <label class="col-md-4 control-label">Mã loại</label>
            <div class="col-md-4">
                <input name="id_category" placeholder="auto number" disabled class="form-control input-md" type="text">
            </div>

            <label class="col-md-4 control-label" >Tên loại</label>
            <div class="col-md-4">
                <input name="name_category" class="form-control input-md" type="text">
            </div>

            <label class="col-md-4 control-label" for="product_id">Ảnh loại</label>
            <div class="col-md-4">
                <input name="hinh" placeholder="tên danh mục" class="form-control input-md" type="file">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <input class="add" type="submit" name="addCate" value="Thêm mới">
                <input type="reset" value="Nhập lại">
            </div>
        </div>
<!--        --><?php
//            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
//        ?>
    </div>
    <script>
        $('.add').click( ()=>
        {
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        })
    </script>
</form>
</div>
