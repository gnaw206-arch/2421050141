<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nét phờ lích</title>
    <style>
        body{
            background-color: #2F2C38;
            color: white;
        }
        .danh-sach-muc{
    list-style: none;
    display: flex;
    gap: 20px;
    align-items: center;
}
header{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.muc{
    padding: 15px;
    border-radius: 25px;
}
.muc:hover{
    background-color: gray;
    text-decoration: none;
}
.lien-ket-muc{
color: azure;
text-decoration: none;
}
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
   <nav class="danh-muc">
                <ul class="danh-sach-muc">
                    <li class="muc dang-chon"><a class="lien-ket-muc dang-chon " href="index.php?plo=trangchu">Trang chủ</a></li>
                    <li class="muc "><a class="lien-ket-muc" href="index.php?plo=taikhoan">Tài Khoản</a></li>
                    <li class="muc "><a class="lien-ket-muc" href="index.php?plo=danhmuc">Danh Mục</a></li>
                    <li class="muc "><a class="lien-ket-muc" href="index.php?plo=phim">Phim</a></li>

                </ul>
             </nav>

    </header>
  <?php
    if(isset($_GET['plo'])){
        $page= $_Get['plo'];
        switch($page){
            case 'trangchu':
                include 'trangchu.php'
                break;
            case 'taikhoan':
                include 'taikhoan.php'
                break;
            case 'danhmuc':
                include 'danhmuc.php'
                break;
            case 'phim':
                include 'phim.php'
                break;  
        }
    }

</body>
</html>