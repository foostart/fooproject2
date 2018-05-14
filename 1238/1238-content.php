<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1238">
    <div class="module-4_1">
        <div class="container">
            <!--TITLE-->
                <div class="menu-center">
                    <div class="sep-before"> 
                        <div class="sep-line"></div>
                    </div>
                    <div class="content">
                        <h2 class="text-divider-double">
                            We offer
                        </h2>
                        <div class="text-divider-subtitle">Today Specials</div>
                    </div>
                    <div class="sep-after">
                        <div class="sep-line"></div>
                    </div>
                </div>
                <!--END TITLE-->
            <!--SERVICES-->
            <div class="type-1238_2">
                <div class="row">
                    <div class="m4-services">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                            <div class="m4-limit">
                                <div class="m4-limit-thumbnail">
                                    <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="<?php echo $url_path ?>/images/anh1.jpg " alt="reponsive-img" class="size-full">  </a>
                                    </div>
                                    <h4 class="m4-limit-services-title">
                                        <a href="/" title="Child Friendly">Coffee & Tea</a>
                                    </h4>
                                    <div>
                                        <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="m4-services">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                <div class="m4-limit">
                                    <div class="m4-limit-thumbnail">
                                        <a href="/" title="Coffee &amp; Tea" class="has-border">
                                        <img src="<?php echo $url_path ?>/images/anh2.jpg" alt="reponsive-img" class="size-full"> </a>
                                        </div>
                                        <h4 class="m4-limit-services-title">
                                            <a href="/" title="Child Friendly">Bakery & Sweets</a>
                                        </h4>
                                        <div>
                                            <p>These desserts aren’t simply favorites of ours; they also help define, in their own way…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="m4-services">
                                <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                    <div class="m4-limit">
                                        <div class="m4-limit-thumbnail">
                                            <a href="/" title="Coffee &amp; Tea" class="has-border">
                                            <img src="<?php echo $url_path ?>/images/anh3.jpg" alt="reponsive-img"  class="size-full"> </a>
                                            </div>
                                            <h4 class="m4-limit-services-title">
                                                <a href="/" title="Child Friendly">Lunch Menu</a>
                                            </h4>
                                            <div>

                                                <p>We make our lunches and dinners with the finest ingredients we can find to make our meals as flavorful as possible.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="m4-services">
                                    <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                        <div class="m4-limit">
                                            <div class="m4-limit-thumbnail">
                                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                                <img src="<?php echo $url_path ?>/images/anh4.jpg" alt="reponsive-img" class="size-full">
                                                </a>
                                            </div>
                                            <h4 class="m4-limit-services-title">
                                                <a href="/" title="Child Friendly">Work Spots</a>
                                            </h4>
                                            <div>
                                                <p>Coffice in Stockholm is a great place to work from. Food options beyond pastries. Free WiFi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <!--END SERVICES-->
                    </div>
                </div>
            </div>

