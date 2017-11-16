<?php
session_start(); 
require_once 'listProduct.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ Hàng</title>
<style>
    ul{
        margin : 0px;
        padding: 0px;
        list-style: none;
    }
    li{
        width: 30%;
        border: 1px dashed #ccc;
        padding: 5px;
        float: left;
    }
    ul li h3{
        font-size: 14px;
    }
   ul li a{
        text-decoration: none;
        color: #000;
    }
    ul li a:hover{
        color:red;
    }
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
    height: 130PX;
}

img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
.header{
    display: block;
    width: 100%;
}
.content{
    width: 100%;
    height: 634px;
    float: left;
}
.footer{
    width: 100%;
    height: 100px;
    display: block;
    float: left;
}
</style>
</head>
<body>
    <h3>Danh Sách Sản Phẩm</h3> 
        <div class="header" style="color:#54BCEC">
            <p><?php
             $total = 0;
                 if(isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
                    foreach($_SESSION['cart'] as $list) {
                        $total += $list['qty'];
                }
             }
            ?>
                Đang Có <a href="viewcart.php"><?php echo $total; ?></a> Sản Phẩm Trong Giỏ Hàng
            </p>
        </div> 
        <div class="content">
            <ul>
                <?php foreach($product as $listProduct) { ?>
                <li>
                    <h3><?php echo $listProduct['name'];?></h3>
                    <p>Giá bán : <?php echo number_format($listProduct['price']);?></p>
                    <p><a href='insertcart.php?id=<?php echo $listProduct['id'];?>'>Mua ngay</a></p>
                    <p><?php echo $listProduct['anh'] ?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="footer">
            <a href="https://www.facebook.com/profile.php?id=100008371620311">FULL HD KHÔNG CHE</a>
        </div>
</body>
</html>
