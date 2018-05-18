<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

        <div class="type-1274">
            <div class="container">
                <div class="row">
                    <div class="content-1">
                        <div class="col-md-3 text-center">
                            <i class="fa fa-eye hvr-grow" style="font-size: 46px;"></i>
                            <h2>Live Customizer</h2>
                            <p>Tất cả các tùy chọn chủ đề có sẵn trong WordPress Live Customizer để tạo kiểu cho trang web của bạn dễ dàng ở giao diện người dùng.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="material-icons hvr-grow" style="font-size: 46px;"> layers</i>
                            <h2>Drag & Drop Builder</h2>
                            <p>Chủ đề sử dụng trình tạo mẫu linh hoạt cho phép bạn tạo các trang và bài đăng duy nhất.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="fa fa-cutlery hvr-grow" style="font-size: 46px;"></i>
                            <h2>FoodPress</h2>
                            <p>Plugin đặt chỗ và trình đơn phổ biến nhất FoodPress được tích hợp đầy đủ.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="material-icons hvr-grow" style="font-size:46px">access_time</i>
                            <h2>Timely Support</h2>
                            <p>Trợ giúp bàn với một trên một email và hỗ trợ vé và nhân viên hỗ trợ chuyên dụng sẵn sàng hỗ trợ bạn.</p>
                        </div>
                    </div>

                    <div class="content-2">
                        <div class="col-md-12">
                            <div class="top text-center">
                                <h1>DANH SÁCH ĐẶC ĐIỂM</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-sm-12">
                                    <div class="text-center">
                                        <i class="fa fa-star hvr-grow" style="font-size: 46px;"></i>
                                        <h3>Highlights</h3><hr>
                                    </div>

                                    <ul>
                                        <li>
                                            <p>23 Hướng dẫn bằng video HD được biên soạn một cách tỉ mỉ và chuyên nghiệp cho người mới bắt đầu trị giá <strong>$79!</strong></p> 
                                        </li>
                                        <li>
                                            <p>Cube Portfolio Grid có giá trị <strong>$16!</strong></p>
                                        </li>
                                        <li>
                                            <p>Kiểu dáng đẹp và dễ sử dụng trang Drag & Drop, bài đăng trên blog và bài đăng danh mục đầu tư, hoàn toàn dựa trên Visual Composer phổ biến</p>
                                        </li>
                                        <li>
                                            <p>Bộ biểu tượng cao cấp 1200+ - <strong>$39 !</strong></p>
                                        </li>
                                        <li>
                                            <p>Cuộc cách mạng Slider Responsive WordPress Plugin – <strong>$19 !</strong></p>
                                        </li>
                                        <li>
                                            <p>Max Mega Menu plugin.</p>
                                        </li>
                                        <li>
                                            <p>Max Mega Menu plugin.</p>
                                        </li>
                                        <li>
                                            <p>Max Mega Menu plugin.</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="text-center">
                                        <i class="fa fa-adjust hvr-grow" style="font-size: 46px;"></i>
                                        <h3>Top notch customer support</h3><hr>
                                    </div>

                                    <ul>
                                        <li>
                                            <p>Trợ giúp bàn với một trên một email và hỗ trợ vé và nhân viên hỗ trợ chuyên dụng sẵn sàng hỗ trợ bạn.</p>
                                        </li>
                                        <li>
                                            <p>Thời gian đáp ứng thường ít hơn 8 giờ</p>
                                        </li>
                                        <li>
                                            <p>23 Hướng dẫn bằng video HD được biên soạn một cách tỉ mỉ và chuyên nghiệp cho người mới bắt đầu có giá trị $79!</p>
                                        </li>
                                        <li>
                                            <p>Hướng dẫn thiết lập mở rộng.</p>
                                        </li>
                                        <li>
                                            <p>100 + help articles written by us</p>
                                        </li>
                                        <li>
                                            <p>In-Dashboard Contextual Help. Тhere are little helpers everywhere in the interface, that let you retrieve quick information about the particular fields you are currently viewing.</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="text-center">
                                        <i class="fa fa-adjust hvr-grow" style="font-size: 46px;"></i>
                                        <h3>Page/Post drag & drop builder</h3><hr>
                                    </div>

                                    <ul>
                                        <li>
                                            <p>VamTam Kéo và Thả Builder dựa trên Visual Composer phổ biến.</p>
                                        </li>
                                        <li>
                                            <p>Trình xây dựng trang kéo và thả của VamTam là một công cụ rất phong phú với giao diện đơn giản để xây dựng bất kỳ trang hoặc bố cục bài đăng nào bằng cách kéo và thả đơn giản. Bạn không cần chạm vào một dòng mã để tạo bố cục trang và các phần tử của bạn. Công cụ này sẽ giúp bạn tiết kiệm rất nhiều thời gian để xây dựng trang hoặc bài đăng của bạn.</p>
                                        </li>
                                        <li>
                                            <p>Trình xây dựng trang kéo và thả của VamTam được tích hợp chặt chẽ với trình chỉnh sửa tinymce và bạn có thể chuyển sang trình chỉnh sửa trực quan hoặc văn bản bất kỳ lúc nào mà không mất bất kỳ thay đổi nào. Các yếu tố tab và Accordion có giao diện kéo và thả. Trình tạo trang kéo và thả hoạt động với các trang, bài đăng trên blog và danh mục đầu tư.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
