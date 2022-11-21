<?php
function insert_product($name_product, $id_category, $pic1, $pic2, $pic3, $pic4, $des_product, $date_product,$price_product)
{
    $sql = "insert into products(name_product, id_category, pic1, pic2, pic3, pic4, des_product, date_product,price_product)
     values('$name_product','$id_category','$pic1','$pic2','$pic3','$pic4','$des_product','$date_product','$price_product')";
    pdo_execute($sql);
}

function insert_product_detail($id_product,$color_product,$size_product,$quantity_product)
{
    $sql = "insert into product_detail(id_product,color_product,size_product,quantity_product)
     values('$id_product','$color_product','$size_product','$quantity_product')";
    pdo_execute($sql);
}

function delete_product($id)
{
    $sql = "delete from products where id_product=" . $id;
    $sql1 = "delete from product_detail where id_product=" . $id;
    pdo_query($sql);
    pdo_query($sql1);
}

function delete_products_detail($id_product)
{
    $sql = "delete from product_detail where id_product=" . $id_product;
    pdo_query($sql);
}

function loadall_product()
{
    $sql = "select * from products";
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function load_product_detail($id_product)
{
    $sql = "select * from product_detail where id_product =".$id_product;
    $listProductsDetail = pdo_query($sql);
    return $listProductsDetail;
}

function search_products($name_product, $name_category)
{
    $sql = "select * from products where 1";
    if ($name_product != "") {
        $sql .= " and name_product like '%" . $name_product . "%'";
    }
    if ($name_category != "") {
        $sql .= " and name_category = '" . $name_category . "'";
    }
    $sql .= " order by name_category desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadone_product($id)
{
    $sql = "select * from products where id_product=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function loadone_product_detail($id)
{
    $sql = "select * from product_detail where id_pd=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_products_category($id_product, $id_category)
{
    $sql = "select * from san_pham where ma_loai='" . $id_category . "' AND ma_sp <> " . $id_product;
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function update_product($id_product,$name_product, $id_category, $pic1, $pic2, $pic3, $pic4, $des_product,$price_product)
{
    if ($pic1 != "" && $pic2 != "" && $pic3 != "" && $pic4 != "")
        $sql = "update products
        set name_product='" . $name_product . "',id_category='" . $id_category . "',pic1='" . $pic1 . "',pic2='" . $pic2 . "',pic3='" . $pic3 . "',pic4='" . $pic4 . "',des_product='" . $des_product . "',price_product='" . $price_product . "'where id_product=" . $id_product;
    else
        $sql = "update products 
        set name_product='" . $name_product . "',id_category='" . $id_category . "',des_product='" . $des_product . "',price_product='" . $price_product . "'where id_product=" . $id_product;
    pdo_execute($sql);
}

function update_product_detail($id_pd,$id_product,$color_product,$size_product,$quantity_product){
    $sql = "update product_detail
            set id_product='".$id_product."',color_product='".$color_product."',size_product='".$size_product."',quantity_product='".$quantity_product."' where id_pd = ". $id_pd;
    pdo_execute($sql);
}
?>