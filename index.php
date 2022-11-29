<?php
ob_start();
session_start();
include "dao/pdo.php";
include "dao/account.php";
include "dao/category.php";
include "dao/comment.php";
include "dao/product.php";
include "dao/oder.php";
include "./site/header.php";
$listProduct = loadall_product();
if(!isset($_SESSION['myCart'])) $_SESSION['myCart']=[];
if(isset($_GET['act']) && ($_GET['act']) != ""){
    $act = $_GET['act'];
    switch ($act){
        case 'signin':
            if(isset($_POST['signin'])){
                $user_customer = $_POST['user_customer'];
                $pass_customer = $_POST['pass_customer'];
                $check_account = check_account($user_customer,$pass_customer);
                if(is_array($check_account)){
                    $_SESSION['user'] = $check_account;
                    header('location:../../../fashinista/index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại!";
                }
            }
            include '../fashinista/site/account/sign-in.php';
            break;

        case 'product':
            $listProduct = loadall_product();
            include './site/product.php';
            break;

        case 'productDetail':
            if(isset($_GET['id_product'])){
                $id_product = $_GET['id_product'];
                $product = loadone_product($id_product);
                $product_detail = loadone_product_detail($id_product);
                extract($product);
                $category = $id_category;
                $load_product_category = load_products_category($id_product,$category);
            }
            include 'site/product_detail.php';
            break;

        case 'signup':
            if(isset($_POST['signup'])){
                $name_customer = $_POST['name_customer'];
                $phone_customer = $_POST['phone_customer'];
                $email_customer = $_POST['email_customer'];
                $address_customer = $_POST['address_customer'];
                $birthday_customer = $_POST['birthday_customer'];
                $user_customer = $_POST['user_customer'];
                $pass_customer = $_POST['pass_customer'];
                $filename=$_FILES['pic']['name'];
                $target_dir = "../fashinista/upload/user/";
                $target_file = $target_dir . basename($_FILES["pic"]["name"]);
                if($name_customer == '' && $phone_customer == '' && $email_customer ==''
                && $address_customer == '' && $user_customer == '' && $pass_customer =='' && $filename == ''){
                    $thongbao = "Vui lòng điền đầy đủ thông tin";
                } else{
                    move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
                    insert_custom($name_customer,$phone_customer,$email_customer,$address_customer,$birthday_customer,$user_customer,$pass_customer,$filename);
                    $thongbao = "Đã đăng ký thành công";
                }
            }
            include '../fashinista/site/account/sign-up.php';
            break;
            
        case 'cart':
            if(isset($_POST['addtoCart'])){
                $id_product = $_POST['id_product'];
                $pic1 = $_POST['pic1'];
                $name_product = $_POST['name_product'];
                $color_product = $_POST['color_product'];
                $size_product = $_POST['size_product'];
                $price_product = $_POST['price_product'];
                $quantity = $_POST['quantity'];
                $infoCart = [$id_product,$pic1,$name_product,$color_product,
                            $size_product,$price_product,$quantity];
                array_push($_SESSION['myCart'],$infoCart);
            }
            include '../fashinista/site/cart.php';
            break;
        default:
            include 'site/index.php';
            break;
        case 'sendComment':
            if(isset($_POST['sendComment'])){
                $id_customer = $_POST['id_customer'];
                $id_product = $_POST['id_product'];
                $content_comment = $_POST['content_comment'];
                $date_comment = date('h:i:sa d/m/Y');
                insert_comment($id_customer,$id_product,$content_comment,$date_comment);
                $link = "../../fashinista/index.php?act=productDetail&id_product=".$id_product;
                header("location: " . $link);
            }
            break;
        case 'addOder':
            if(isset($_POST['oder'])){
                $id_customer = $_POST['id_customer'];
                $unitPrice = $_POST['unitPrice'];
                $method_payment = $_POST['method_payment'];
                $date_oder = date('Y-m-d');
                $name_customer = $_POST['name_customer'];
                $phone_customer = $_POST['phone_customer'];
                $address_customer = $_POST['address_customer'];
                if(!isset($_SESSION['user']) ){
                    header('location:../../fashinista/index.php?act=signin');
                } else{
                    insert_oder($id_customer,$date_oder,$unitPrice,$method_payment,$name_customer,$phone_customer,$address_customer);
                    $id_oder = loadone_oder($address_customer,$name_customer,$phone_customer,$date_oder);
                    extract($id_oder);
                    $_SESSION['id_oder'] = $id_oder;
                    foreach ($_SESSION['myCart'] as $cart) {
                        $id_product = $cart[0];
                        $name_product = $cart[2];
                        $color_product = $cart[3];
                        $size_product = $cart[4];
                        $price_product = $cart[5];
                        $quantity = $cart[6];
                        insert_oder_detail($id_oder,$color_product,$size_product,$quantity,$price_product,$id_product);
                    }
                }
                if($method_payment == 1){
                    header('location:../../fashinista/index.php?act=QRcode');
                }
            }
        case 'QRcode':
            include 'site/QRcode.php';
    }

}else {
    include 'site/home.php';
}
include 'site/footer.php';
ob_start();
?>