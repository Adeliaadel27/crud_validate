<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation menus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Web Master</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
            <ul>
                <li><a href="index.php?modul=home">Home</a></li>
                <li><a href="index.php?modul=product">Product</a></li>
                <li><a href="index.php?modul=blog">Blog</a></li>
                <li><a href="index.php?modul=contact">Contact</a></li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
    </header>
    <div id="main-content">
    <?php
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
    }else{
        $pages = "home";
    }
    if(!isset($_GET['modul']) || $pages == "home"){
     ?>
       <div id="content-home">
        <h1>Title Home</h1><br>
        <p>Matahari menyinari bumi dengan cahayanya dipagi hari.<br>
        Bunga-bunga yang bermekaran dipagi hari menciptakan aroma yang harum.<br>
        Ayam yang berkokok dipagi hari membuat semua orang terbangun.<br>
        Semua orang bangun pagi untuk melakukan aktifitas mereka sehari-hari.
        </p>
        </div>
    <?php
    }
    if($pages == "product"){
    ?>
        <div id="content-product">
        <h1>Title Product</h1><br>
        <p>Matahari menyinari bumi dengan cahayanya dipagi hari.<br>
        Bunga-bunga yang bermekaran dipagi hari menciptakan aroma yang harum.<br>
        Ayam yang berkokok dipagi hari membuat semua orang terbangun.<br>
        Semua orang bangun pagi untuk melakukan aktifitas mereka sehari-hari.
        </p>
        <a href="index.php?modul=product1">Product 1</a>
        <a href="index.php?modul=product2">Procuct 2</a>
        <a href="index.php?modul=product3">Product 3</a>
        </div>
        <?php
         }
         if($pages == "product1"){
        ?>
        <div id=content-product1>
            <h1>Produk Olahraga</h1>
            <li>Bola Basket</li>
        </div>
        <?php
         }
         if($pages == "product2"){
        ?>
        <div id=content-product2>
            <h1>Produk Elektronik</h1>
            <li>Blender</li>
        </div>
        <?php
         }
         if($pages == "product3"){
        ?>
        <div id=content-product3>
            <h1>Produk Furniture</h1>
            <li>Sofa</li>
        </div>
    <?php
    }
    if($pages == "blog"){
    ?>
    <div id="content-blog">
        <h1>Title Blog</h1><br>
        <p>Matahari menyinari bumi dengan cahayanya dipagi hari.<br>
        Bunga-bunga yang bermekaran dipagi hari menciptakan aroma yang harum.<br>
        Ayam yang berkokok dipagi hari membuat semua orang terbangun.<br>
        Semua orang bangun pagi untuk melakukan aktifitas mereka sehari-hari.
        </p>
        </div>
    <?php
    }
    if($pages == "contact"){
    ?>
    <div id="content-contact">
        <h1>Title Contact</h1><br>
        <p>Matahari menyinari bumi dengan cahayanya dipagi hari.<br>
        Bunga-bunga yang bermekaran dipagi hari menciptakan aroma yang harum.<br>
        Ayam yang berkokok dipagi hari membuat semua orang terbangun.<br>
        Semua orang bangun pagi untuk melakukan aktifitas mereka sehari-hari.
        </p>
        <a href="index.php?modul=aboutme">Tentang saya</a>
        </div>
    <?php
    }
    if($pages == "aboutme"){
    ?>
    <div id="content-about">
        <h1>Tentang saya</h1><br>
        <label>Nama: Adelia</label><br>
        <label>Kelas: 11 RPL 1</label><br>
        <label>Umur: 16 tahun</label>
    </div>
    <?php
    }
    ?>
  </div>
</body>
</html>