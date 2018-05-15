<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-1247">
        <div class="cone-top cone"></div>
        <!-- TOP ROW -->
        <div class="vamtam-grid-top">
            <div class="grid-dot">
                <p>❈</p>
            </div>

            <div class="grid-text">
                <p>Từ khi còn là một đứa trẻ, tôi là Massimo Bottura - tôi đã trốn thoát khỏi anh trai dưới bàn trong nhà bếp và từ dưới đó, nơi bà tôi bảo vệ tôi, trong khi đó cô ấy đang lăn mì ống, tôi đang nhìn thế giới từ một góc nhìn khác. Đó là những gì chúng tôi làm ở Osteria Francescana mỗi ngày.
                </p>
            </div>

            <div class="grid-dot">
                <p>❈</p>
            </div>
            <div class="cone-midle cone"></div>
        </div>
        <!-- END TOP ROW -->

        <!-- BOTTOM ROW -->
        <div class="vamtam-grid-bottom">
            <div class="limit-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <h4 class="color-accent-1">1995</h4>
                            <p>Khai trương Osteria Francescana, Via Stella 22 Modena Ý</p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <h4 class="color-accent-1">2002</h4>
                            <p>Hướng dẫn Michelin 1 sao Michelin. Giải thưởng Gambero Rosso Up và Coming Chef.</p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <h4 class="color-accent-1">2016</h4>
                            <p>50 nhà hàng tốt nhất thế giới 1 nhà hàng trên thế giới. Bản đồ Michelin<br> three-michelin-stars.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BOTTOM ROW -->
        <div class="cone-bottom cone"></div>
    </div>
