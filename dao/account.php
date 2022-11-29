<?php
function insert_custom($name, $phone, $email, $address, $birthday, $user, $pass,$pic)
{
    $sql = "insert into customers(name_customer, phone_customer, email_customer, address_customer, birthday_customer, user_customer, pass_customer, pic) 
    values('$name','$phone','$email','$address','$birthday','$user','$pass','$pic')";
    pdo_execute($sql);
}

function check_account($user, $pass)
{
    $sql = "select * from customers where user_customer='" . $user . "' AND pass_customer='" . $pass . "'";
    $account = pdo_query_one($sql);
    return $account;
}

function check_email($email)
{
    $sql = "select * from customers where email_customer='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_account($id_customer,$name_customer,$phone_customer,$email_customer,$address_customer,$birthday_customer,$user_customer,$pass_customer,$pic_customer)
{
    if ($pic_customer != "")
        $sql = "update customers 
                set `name_customer`='" . $name_customer . "',`phone_customer`='" . $phone_customer . "',`email_customer`='" . $email_customer . "',`address_customer`='" . $address_customer . "',`birthday_customer`='" . $birthday_customer . "',`pass_customer`='" . $pass_customer . "',`pic_customer`='" . $pic_customer . "' where `id_customer`='" . $id_customer . "';";
    else
        $sql = "update customers 
                set `name_customer`='" . $name_customer . "',`phone_customer`='" . $phone_customer . "',`email_customer`='" . $email_customer . "',`address_customer`='" . $address_customer . "',`birthday_customer`='" . $birthday_customer . "',`pass_customer`='" . $pass_customer . "' where `id_customer`='" . $id_customer . "';";
    pdo_execute($sql);
}

function loadall_account()
{
    $sql = "select * from customers order by id_customer desc";
    $listaccount = pdo_query($sql);
    return $listaccount;
}

function delete_account($id_customer)
{
    $sql = "DELETE FROM customers WHERE `customers`.`id_customer` = '$id_customer'";
    pdo_query($sql);
}
?>