<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1236">
<div class="container">   
    <div class="m2">
        <div class="m2-container">
            <div class="m2-grip">
                <div class="m2-grip-content">
                    <div class="m2-grip-content-1 col-md-4">
                        <div class="m2-grip-content-1-left col-md-10">
                            <h4>Dụng Cụ</h4>
                            <p>“Đầu bếp chuyên nghiệp dựa vào pin của các dụng cụ và thiết bị. Đầu bếp phải ý thức về dụng cụ nhà bếp của họ khi lập kế hoạch một thực đơn và hiểu được việc sử dụng và năng lực sản xuất của họ. ”</p>
                        </div>
                    </div>
                    <div class="m2-grip-content-2 col-md-4">
                        
                        <h3>Chào Mừng</h3>
                        <p>“Đầu tiên và trước hết tôi là một đầu bếp, cho dù đằng sau bếp lò tại một trong những nhà hàng ở Bắc California của tôi hoặc trong 15 năm qua trước máy quay trên các chương trình nấu ăn trong chương trình Mạng lưới Thực phẩm của tôi. Tạo ra các món ăn và hương vị kết hợp mới mang lại cho đầu bếp và khách hàng của chúng tôi niềm vui là công việc của tôi và tôi thích nó. ”</p>
                    </div>
                    <div class="m2-grip-content-1 m2-grip-content-3 col-md-4">
                        <div class="m2-grip-content-1-left col-md-10">
                            <h4>Món Ăn</h4>
                            <p>Tạo ra các món ăn và hương vị kết hợp mới mang lại cho đầu bếp niềm vui của khách hàng của chúng tôi là công việc của tôi và tôi thích nó</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>    
</div>
</div>