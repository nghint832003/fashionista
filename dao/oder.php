<?php
function insert_oder($id_customer,$date_oder,$unitPrice,$method_payment,$name_customer,$phone_customer,$address_customer){
    $sql = "insert into oders(id_customer,date_oder,unitPrice,method_payment,name_customer,phone_customer,address_customer)
            values('$id_customer','$date_oder','$unitPrice','$method_payment','$name_customer','$phone_customer','$address_customer')";
    pdo_execute($sql);
}

function insert_oder_detail($id_oder,$color_product,$size_product,$quantity,$price_product,$id_product){
    $sql = "insert into oder_detail(id_oder,color_product,size_product,quantity,price_product,id_product)
            values('$id_oder','$color_product','$size_product','$quantity','$price_product','$id_product')";
    pdo_execute($sql);
}

function loadone_oder($address_customer,$name_customer,$phone_customer,$date_oder){
    $sql = "select * from oders where address_customer = '".$address_customer."'
            and name_customer = '".$name_customer."' 
            and phone_customer = '".$phone_customer."' 
            and date_oder = '".$date_oder."'
            order by id_oder desc";
    $id_oder = pdo_query_one($sql);
    return $id_oder;

}