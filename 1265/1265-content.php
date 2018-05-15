<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1265">
    <div class="container">
        <div class="row">
            <!--content-->
            <div class="logo-footer col-md-4 col-sm-4 col-xs-12">
                <!--columns-->
                <div class="content">   
                    <h2>Bánh kép</h2>

                    <div class="content1">
                        <a href="#"><div class="title">Combo thức ăn nhẹ kiểu Mỹ.</div><div class="price">$15</div></a><br>
                        <div class="content3">...........................................................</div>    
                    </div>
                    <div class="content2">
                        <a href="#">Trứng với thịt xông khói, cà chua, hành lá và phô mai cheddar.</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Bánh kép nhân chuối, việt quất.</div><div class="price">$5</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#">Chuối, sữa hạnh nhân, vani, quế, quả việt quất.</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Bánh kép truyền thống với bơ và mứt dâu.</div><div class="price">$5</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#">Sữa, trứng, dâu tây, bơ, xi-rô.</a>
                    </div>  
                </div>
                <!--end columns-->
            </div>
            <div class="logo-footer col-md-4 col-sm-4 col-xs-12">
                <!--columns-->
                <div class="content">   
                    <h2>Bánh Sandwiches</h2>

                    <div class="content1">
                        <a href="#"><div class="title">Bánh mì nướng kiểu pháp và mứt dâu.</div><div class="price">$11</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#">Cà phê nóng, bánh mì nướng tươi cùng với bơ dâu tây tự làm và xi-rô...</a>
                    </div>
                    <div class="content1">
                        <a href="#"><div class="title">Bánh mì truyền thống</div><div class="price">$3 each</div></a><br>
                        <div class="content3">...........................................................</div>   
                    </div>
                    <div class="content2">
                        <a href="#">Bánh mì được làm thủ công cho hương vị thơm ngon.</a>
                    </div>
                    <div class="content1">
                        <a href="#"><div class="title">Cà chua khô Bruschetta</div><div class="price">$7</div></a><br>
                        <div class="content3">...........................................................</div>      
                    </div>
                    <div class="content2">
                        <a href="#"></a>
                    </div>

                </div>
                <!--end columns-->
            </div>
            <div class="logo-footer col-md-4 col-sm-4 col-xs-12">
                <!--columns-->
                <div class="content">   
                    <h2>Thức ăn nhẹ</h2>

                    <div class="content1">
                        <a href="#"><div class="title">Combo Cà phê & Mứt dâu Bánh mì nướng Pháp với Bơ dâu.</div><div class="price">$11</div></a><br>
                        <div class="content3">...........................................................</div>       
                    </div>
                    <div class="content2">
                        <a href="#">Cà phê nóng, bánh mì nướng tươi cùng với bơ dâu tây tự làm và xi-rô......</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Combo Cafe & Bánh sừng bò.</div><div class="price">$11</div></a><br>
                        <div class="content3">...........................................................</div>       
                    </div>
                    <div class="content2">
                        <a href="#">Cà phê nóng cùng với bánh sừng bò tự làm tuyệt đẹp, mỗi loại có chứa một thanh sôcôla đen chất lượng cao, làm cho...</a>
                    </div>  
                    <div class="content1">
                        <a href="#"><div class="title">Combo bữa sáng lớn.</div><div class="price">$20</div></a><br>
                        <div class="content3">...........................................................</div>       
                    </div>
                    <div class="content2">
                        <a href="#"></a>
                    </div>  
                </div>
                <!--end columns-->
            </div>
            <!--end content-->
        </div>
    </div>
</div>


