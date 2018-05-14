<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1243">
    <div class="container main">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="lavender-grid">
                    <div class="menu-center">
                        <div class="sep-before"> 
                            <div class="sep-line"></div>
                        </div>
                        <div class="content">
                            <h2 class="text-divider-double">
                                News & Events
                            </h2>
                            <div class="text-divider-subtitle">Today Specials</div>
                        </div>
                        <div class="sep-after">
                            <div class="sep-line"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m10-description">
                <div class="m10-limit">
                    <div class="row row-all">
                        <div class="m10-description-main">
                            <div class="m10-description-all content-main">
                                <div class="col-lg-3 col-md-3 col-sm-6 item-main">
                                    <div class="m10-description-one">
                                        <div class="m10-description-one-pic">
                                            <img src="http://<?php echo $url_path ?>/images/Meat-1-292x195.jpg" alt="reponsive-img">
                                        </div>
                                        <div class="m10-description-one-meta">
                                            <a href="#">Recipes</a>
                                            <a href="#">Tips & Tricks</a>
                                        </div>
                                        <div class="m10-description-one-title">
                                            <div class="shei">
                                                <a href="#">
                                                    <h4>Which Lamb is the Best: American, Australian or New Zealand?</h4>
                                                </a>
                                                <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>

                                            </div>
                                            <div class="m10-description-one-tag">
                                                <a href="#">Bio</a>,
                                                <a href="#">Dinner</a>,
                                                <a href="#">Food</a>,
                                                <a href="#">Hand Made</a>,
                                                <a href="#">Lamb</a>,
                                                <a href="#">Recipe</a>,
                                                <a href="#">Tricks</a>
                                            </div>
                                            <div class="m10-description-one-category">
                                                <a href="#">
                                                    <span  class="cate-1">
                                                        Jon Madison
                                                    </span></a>
                                                <a href="#">
                                                    <span class="cate-2">
                                                        27 Sep, 2014 
                                                    </span>
                                                </a>
                                                <a href="#" class="cate-3">
                                                    <span class="fa fa-comment-o">
                                                        1
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3  col-sm-6 item-main">
                                    <div class="m10-description-one">
                                        <div class="m10-description-one-pic">
                                            <img src="http://<?php echo $url_path ?>/images/Cocktails-2-292x195.jpg" alt="reponsive-img">
                                        </div>
                                        <div class="m10-description-one-meta">
                                            <a href="#">Healthy Food</a>
                                            <a href="#">Recipes</a>
                                        </div>
                                        <div class="m10-description-one-title">
                                            <div class="shei">
                                                <a href="#">
                                                    <h4>The Caipirinha Is The Brazilian Cocktail You've Been Too Afraid To Pronounce</h4>
                                                </a>
                                                <p>It’s time to take a break from the mojito, put down the margarita, and give…</p>

                                            </div>
                                            <div class="m10-description-one-tag">
                                                <a href="#">cocktail</a>,
                                                <a href="#">Food</a>,
                                                <a href="#">healthy</a>,
                                                <a href="#">recipe</a>,
                                                <a href="#">Lamb</a>,
                                                <a href="#">Recipe</a>,
                                                <a href="#">Tricks</a>
                                            </div>
                                            <div class="m10-description-one-category">
                                                <a href="#">
                                                    <span  class="cate-1">
                                                        Jon Madison
                                                    </span></a>
                                                <a href="#">
                                                    <span class="cate-2">
                                                        1 Sep, 2018 
                                                    </span>
                                                </a>
                                                <a href="#" class="cate-3">
                                                    <span class="fa fa-comment-o">
                                                        1
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3  col-sm-6  item-main">
                                    <div class="m10-description-one">
                                        <div class="m10-description-one-pic">
                                            <img src="http://<?php echo $url_path ?>/images/Sandwiches-1-292x195.jpg" alt="reponsive-img">
                                        </div>
                                        <div class="m10-description-one-meta">
                                            <a href="#">Cooking</a>
                                            <a href="#">Healthy Food</a>
                                        </div>
                                        <div class="m10-description-one-title">
                                            <div class="shei">
                                                <a href="#">
                                                    <h4>The Plum Recipes That’ll Make You Fall In Love With This Stone Fruit</h4>
                                                </a>
                                                <p>It’s easy to forget about plums. They’re not the most popular of summer fruits. Plums…</p>

                                            </div>
                                            <div class="m10-description-one-tag">
                                                <a href="#">cooking</a>,
                                                <a href="#">healthy</a>,
                                                <a href="#">plum's</a>,
                                                <a href="#">recipe</a>,
                                                <a href="#">Lamb</a>,
                                                <a href="#">Recipe</a>,
                                                <a href="#">Tricks</a>
                                            </div>
                                            <div class="m10-description-one-category">
                                                <a href="#">
                                                    <span  class="cate-1">
                                                        Jon Madison
                                                    </span></a>
                                                <a href="#">
                                                    <span class="cate-2">
                                                        27 Sep, 2014 
                                                    </span>
                                                </a>
                                                <a href="#" class="cate-3">
                                                    <span class="fa fa-comment-o">
                                                        1
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6 item-main">
                                    <div class=" m10-description-one">
                                        <div class="m10-description-one-pic">
                                            <img src="http://<?php echo $url_path ?>/images/Vegetarian-3-292x195.jpg" alt="reponsive-img">
                                        </div>
                                        <div class="m10-description-one-meta">
                                            <a href="#">category tag</a>
                                  
                                            <a href="#">Healthy Food</a>
                                            <div>
                                            <a href="#">Recipes</a>
                                            </div>
                                            
                                        </div>
                                        <div class="m10-description-one-title">
                                            <div class="shei tag">
                                                <a href="#">
                                                    <h4>24 Reasons To Seek Out Fresh Figs</h4>
                                                </a>
                                                <p class="tag-text">Dried figs are great and all, but if you’ve ever tasted a fresh fig you…</p>

                                            </div>
                                            <div class="m10-description-one-tag tag1">
                                                <a href="#">cooking</a>,
                                                <a href="#">Food</a>,
                                                <a href="#">Food</a>,
                                                <a href="#">healthy</a>,
                                                <a href="#">tips</a>,
                                                <a href="#">tricks</a>,
                                                <a href="#">Tricks</a>
                                            </div>
                                            <div class="m10-description-one-category">
                                                <a href="#">
                                                    <span  class="cate-1">
                                                        Jon Madison
                                                    </span></a>
                                                <a href="#">
                                                    <span class="cate-2">
                                                        27 Sep, 2018
                                                    </span>
                                                </a>
                                                <a href="#" class="cate-3">
                                                    <span class="fa fa-comment-o">
                                                        1
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m10-button">
                            <p class="c1-btn">
                                <a href="#">
                                    <span class="span-hover">Load more</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>