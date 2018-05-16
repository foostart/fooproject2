<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1279">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text">
                <h2>Private Dinning</h2>
                <img src="<?php echo $url_path ?>/images/resevation-1.jpg">
                <p>Opt for a more intimate approach to your next dining experience in one of our many private dining rooms, some even with unobstructed views into the kitchen. Whether you are a couple wishing to dine in privacy, business colleagues holding a meeting to impress clients, a birthday celebration or an intimate wedding party, we can help you.</p>
            </div>

        <div class="col-md-2 del-space">
            <div class="contact">
                <div class="img-top">
                    <img src="<?php echo $url_path ?>/images/ornament-top.svg" alt="">
                </div>
                <div class="contact-1">
                    <img src="<?php echo $url_path ?>/images/Capture1.png" alt="">
                    <h2 class="padding">Call</h2>
                    <h4 class="padding">+359 562 958</h4>
                    <h5 class="padding">MAKE AN ENQUIRY TODAY</h5>
                    <img class="owl padding" src="<?php echo $url_path ?>/images/owl1.png" alt="">
                    <div class="padding icon">
                        <a href="#" class="a-icon">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#" class="a-icon">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="a-icon">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="a-icon">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="contact-2">
                <h4 class="padding">Openning Time</h4>
                <h5 class="padding">Weekdays</h3>
                <h5 class="padding">07:00 am - 11:00 pm</3>
                <h5 class="padding">Weekdays</h3>
                <h5 class="padding">07:00 am - 11:00 pm</3>
            </div>
        </div>

        <div class="col-md-5 text">
             <h2>Private Dinning</h2>
                <img src="<?php echo $url_path ?>/images/resevation-1.jpg">
                <p>Opt for a more intimate approach to your next dining experience in one of our many private dining rooms, some even with unobstructed views into the kitchen. Whether you are a couple wishing to dine in privacy, business colleagues holding a meeting to impress clients, a birthday celebration or an intimate wedding party, we can help you.</p>
            </div>
        </div>
    </div>
</div>
</div>
