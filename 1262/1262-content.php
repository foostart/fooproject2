<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1262">
    <div class="container">
        <div class="row">
            <div class="col-md-5 SoftDrinks">
                <div class="img-top">
                    <img src="images/ornament-top.svg">
                </div>
                <div class="sep-text single centered">
                    <div class="sep-text-before"> 
                        <div class="sep-text-line">
                        </div>
                    </div>
                    <div class="content">
                        <h3>Soft Drinks </h3>
                    </div>
                    <div class="sep-text-after">
                        <div class="sep-text-line">
                        </div>
                    </div>
                    <div class="text-drink">
                        Coffee Specials
                    </div>
                </div>
                <div class="img-drinks">
                    <img src="images/header-small-1.jpg" alt="img-reponsive">
                </div>
                <div class="menu-coffe">
                    <h3>Caffè macchiato
                        <span class="fp_price">$5.90</span>
                    </h3>
                    <div class="menu_description">
                        An espresso coffee drink with a small amount of milk, usually foamed.
                    </div>
                </div>
                <div class="menu-coffe">
                    <h3>Caffè macchiato
                        <span class="fp_price">$5.90</span>
                    </h3>
                    <div class="menu_description">
                        An espresso coffee drink with a small amount of milk, usually foamed.
                    </div>
                </div>      <div class="menu-coffe">
                    <h3>Caffè macchiato
                        <span class="fp_price">$5.90</span>
                    </h3>
                    <div class="menu_description">
                        An espresso coffee drink with a small amount of milk, usually foamed.
                    </div>
                </div>
                <div class="img-bottom">
                    <img src="images/ornament-top.svg">
                </div>
            </div>

            <div class="col-md-2 contact">
                
                <div class="txt-contact">
                    <h3>Contact</h3>
                    <p>Book your table for lunch or dinner.</p>
                    <h4>+359 562 958</h4>
                    <a href="#">
                        <span class="reservation">RESERVATION</span>
                    </a>
                </div>

                <div class="time-contact">
                    
                    <h1>Openning Times</h1>
                    <p>Weekdays</p>
                    <p>07:00am - 11:00pm</p>
                    <p>-</p>
                    <p>Weekends</p>
                    <p>09:00am - 12:00pm</p>
                </div>
               


            </div>

            <div class="col-md-5 SoftDrinks">
                <div class="img-top">
                    <img src="images/ornament-top.svg">
                </div>
                <div class="sep-text single centered">
                    <div class="sep-text-before"> 
                        <div class="sep-text-line">
                        </div>
                    </div>
                    <div class="content">
                        <h3>Wines</h3>
                    </div>
                    <div class="sep-text-after">
                        <div class="sep-text-line">
                        </div>
                    </div>
                    <div class="text-drink">
                        Coffee Specials
                    </div>
                </div>
                <div class="img-drinks">
                    <img src="images/header-small-2.jpg" alt="img-reponsive">
                </div>
                <div class="menu-coffe">
                    <h3>Caffè macchiato
                        <span class="fp_price">$5.90</span>
                    </h3>
                    <div class="menu_description">
                        An espresso coffee drink with a small amount of milk, usually foamed.
                    </div>
                </div>
                <div class="menu-coffe">
                    <h3>Caffè macchiato
                        <span class="fp_price">$5.90</span>
                    </h3>
                    <div class="menu_description">
                        An espresso coffee drink with a small amount of milk, usually foamed.
                    </div>
                </div>      <div class="menu-coffe">
                    <h3>Caffè macchiato
                        <span class="fp_price">$5.90</span>
                    </h3>
                    <div class="menu_description">
                        An espresso coffee drink with a small amount of milk, usually foamed.
                    </div>

                </div>
                <div class="img-bottom">
                    <img src="images/ornament-top.svg">
                </div>
            </div>
        </div>
    </div>
</div>
