<?php
session_start();
if ($_SESSION == NULL) {
    header("location:../index.php");
}
include "../dao/pdo.php";
include "../dao/account.php";
include "../dao/category.php";
include "../dao/comment.php";
include "../dao/product.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addCategory':
            if(isset($_POST['addCate'])){
                $name_category = $_POST['name_category'];
                $pic_category = $_POST['pic_category']
                if($name_category == ''){
                    echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                }else if($pic_category == ''){
                    echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                } else {
                    insert_category($tenloai);
                    $thongbao = "Thêm thành công";
                }
            }
            include "category/add.php";
            break;
        
        case 'listCategory':
            $listCategory = loadall_category();
            include "category/list.php";
            break;
        
        case 'deleteCategory':
            if(isset($_GET['name_category']) && $_GET['name_category'] >0){
                delete_category($_GET['id_category']);
            }
            $listCategory = loadall_category();
            include 'category/list.php';
            break;

        case 'loadCategory':
            if(isset($_GET['id_category']) && $_GET['id_category'] > 0){
                $category = loadone_category($_GET['id_category']);
            }

            include 'category/update.php';
            break;

        case 'updateCategory':
            if(isset($_POST['updateCate'])){
                $name_category = $_POST['name_category'];
                $id_category = $_POST['id_category'];
                $pic_category = $_POST['pic_category'];
                if($name_category == ''){
                    echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                } else if($id_category == ''){
                    echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                } else if($pic_category == ''){
                    echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                }
                else{
                    $filename = $_FILES['pic']['name'];
                    $target_dir = "../upload/category/";
                    $target_file = $target_dir . basename($_FILES["pic"]["name"]);
                    if ($name_category == '' && $id_category == '' && $pic_category == '') {
                        echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                    } else {
                        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        update_category($id_category, $name_category, $filename);
                        $thongbao = "Cập nhật thành công";
                    }
                }
            }
            $listCategory = loadall_category();
            include 'category/list.php';
            break;

            case 'addProduct':
                if(isset($_POST['updatePro'])){
                    $name_product = $_POST['name_product'];
                    $id_category = $_POST['id_category'];
                    $des_product = $_POST['des_product'];
                    $date_product = date('d/m/Y');
                    $price_product = $_POST['price_product'];
                    $pic1 = $_FILES['pic1']['name'];
                    $pic2 = $_FILES['pic2']['name'];
                    $pic3 = $_FILES['pic3']['name'];
                    $pic4 = $_FILES['pic4']['name'];
                    if($name_product == '' && $id_category == '' && $des_product == '' $price_product==''
                    && $pic1=='' && $pic2=='' && $pic3=='' &&$pic4==''){
                        echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                    } else {
                        move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_file);
                        move_uploaded_file($_FILES["pic2"]["tmp_name"], $target_file);
                        move_uploaded_file($_FILES["pic3"]["tmp_name"], $target_file);
                        move_uploaded_file($_FILES["pic4"]["tmp_name"], $target_file);
                        insert_product($name_product, $id_category, $pic1, $pic2, $pic3, $pic4, $des_product, $date_product,$price_product);
                        $thongbao = "Thêm thành công";
                    }

                }
                include 'product/add.php';
                break;
            case 'listProduct':
                if(isset($_POST['listPro'])){
                    $name_product =$_POST['name_product'];
                    $name_category = $_POST['name_category'];
                    $search_products = search_products($name_product, $name_category);
                    $listProduct = loadall_product();
                }
                include 'product/list.php'; 
                break;
            case 'deleteProduct':
                if(isset($_GET['id_product'])){
                    delete_product($_GET['id_product']);
                }
                $listProduct = loadall_product();
                include 'product/list.php';
                break;
            
            case 'loadProduct':
                if(isset($_GET['id_product'])){
                    $product = loadone_product($_GET['id_product']);
                }
                $listProduct = loadall_product();
                include 'product/update.php';
                break;
            
            case 'updateProduct':
                if(isset($_POST['updateProduct'])){
                    $name_product = $_POST['name_product'];
                    $id_category = $_POST['id_category'];
                    $des_product = $_POST['des_product'];
                    $date_product = date('d/m/Y');
                    $price_product = $_POST['price_product'];
                    $pic1 = $_FILES['pic1']['name'];
                    $pic2 = $_FILES['pic2']['name'];
                    $pic3 = $_FILES['pic3']['name'];
                    $pic4 = $_FILES['pic4']['name'];
                    if($name_product == '' && $id_category == '' && $des_product == '' $price_product==''
                    && $pic1=='' && $pic2=='' && $pic3=='' &&$pic4==''){
                        echo "<script>alert('Không Để Trống dữ liệu !');</script>";
                    } else {
                        move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_file);
                        move_uploaded_file($_FILES["pic2"]["tmp_name"], $target_file);
                        move_uploaded_file($_FILES["pic3"]["tmp_name"], $target_file);
                        move_uploaded_file($_FILES["pic4"]["tmp_name"], $target_file);
                        update_product($name_product, $id_category, $pic1, $pic2, $pic3, $pic4, $des_product, $date_product,$price_product);
                        $thongbao = "Cập nhật thành công";
                    }
                }
                $listCategory = loadall_category();
                $listProduct = loadall_product();
                include 'product/list.php';
                break;

            case 'listCustomer':
                $listCustomer = loadall_account();
                include 'account/list.php';
                break;

            case 'deleteCustomer':
                if(isset($_GET['id_customer'])){
                    delete_account($_GET['id_customer']);
                }
                $listCustomer =loadall_account();
                include 'account/list.php';
                break;

            case 'listComment':
                $listComment = loadall_comment(0);
                include 'comment/list.php';
                break;

            case 'deleteComment':
                if(isset($_GET['id_comment'])){
                    delete_comment($_GET['id_comment']);
                }
                $listComment = loadall_comment(0);
                include 'comment/list.php';
                break;

            default:
                include 'home.php';
                break;

    }
} else {
    include "home.php";
}
include 'footer.php';