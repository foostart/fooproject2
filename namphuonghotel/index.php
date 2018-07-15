
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="vi">
    <head>
        <title>KaYa Store</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=100" />
        <meta http-equiv="REFRESH" content="1800" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-title" content="Tai lieu web" />
        <meta name="description" content="Tai lieu web" />
        <meta name="keywords" content="Tai lieu web"/>

        <link href="../menu/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../menu/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/swiper.min.css"  rel="stylesheet" type="text/css"/>
        
        <link href="../menu/css/menu.css" rel="stylesheet" type="text/css"/> 
        <link href="../css/trangchu.css" rel="stylesheet" type="text/css"/> 
        <link href="..css/gioithieu.css" rel="stylesheet" type="text/css"/>
        <link href="../footer/css/footer.css" rel="stylesheet" type="text/css"/> 
        
        <script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script> 
        <script src="../js/gioithieu.js" type="text/javascript"></script> 
        <script src="../js/swiper.min.js" type="text/javascript"></script>
        

    </head>
    <body>
        <script>
                $(document).ready(function(){
                        var swiper = new Swiper('.swiper-container', {
                          slidesPerView: 3,
                          spaceBetween: 30,
                          loop: true,
                          breakpoints: {
                                1024: {
                                  slidesPerView: 3,
                                  spaceBetween: 30,
                                },
                                768: {
                                  slidesPerView: 2,
                                  spaceBetween: 20,
                                },
                                500: {
                                  slidesPerView: 1,
                                  spaceBetween: 10,
                                },
                                320: {
                                  slidesPerView: 1,
                                  spaceBetween: 10,
                                }
                          },
                          navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                          },
                        });
                });
        </script>
        <?php include 'menu-content.php'; ?>
            <?php             
                $pages = $_GET['page'];
                if(!isset($pages)){
                    include 'trangchu.php';
                }else{
                    if($pages=='gioithieu') include 'gioithieu.php';
                }
           ?>
        <?php include 'footer-content.php'; ?>
    </body>
</html>
