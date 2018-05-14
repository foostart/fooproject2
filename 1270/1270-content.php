<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1270">
    <div class="container-fluid clearfix">
        <div class="header-middle type-featured col-md-12">
            <a href="1270.php"></a>
            <h5 style="text-align: center">FEATURED POSTS</h5>
            <!--Begin Follow-->
            <div class="loop-wrapper clearfix news">
                <div class="kkk-cubeportfolio cbp cbp-slider-edge cbp-ready cbp-mode-slider">
                    <div class="cbp-wrapper-outer">
                        <div class="cbp-wrapper">
                            <!-- SINGLE POST ONE LOOP-->
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="pading"> 
                                        <div class="post-article">
                                            <div class="standard-post-format clearfix as-image">
                                                <div class="post-media">
                                                    <div class="thumbnail">
                                                        <a href="#1"><img src="images/Cocktails-4.jpg"  alt="reponsive"></a>
                                                    </div>
                                                </div>

                                                <div class="post-content-wrapper">
                                                    <div class="post-content-meta">
                                                        <div class=" the-categories">

                                                            <span class="visuallyhidden">Category </span>
                                                            <a href="#" rel="category tag">Recipes</a>
                                                            <a href="#" rel="category tag">Tips &amp; Tricks</a>
                                                        </div>
                                                     </div>
                                                    <header class="single">
                                                        <div >
                                                            <h4><a href="#" >Which Lamb is the Best: American, Australian or New Zealand?</a></h4>
                                                        </div>
                                                    </header>
                                                    <div class="post-content-outer">
                                                        <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                                    </div>
                                                    <div class="post-content-meta">
                                                        <div >

                                                            <a href="#" rel="tag">Bio</a>
                                                        </div>
                                                    </div>
                                                    <div class="post-actions-wrapper clearfix">
                                                        <div class="author kkk-meta-author">
                                                            <a href="#" title="Posts by Jon Madison" rel="author"><span class="icon shortcode use-hover"></span> Jon Madison</a>
                                                        </div>
                                                        <div class="post-date">
                                                            <a href="#" title="Which Lamb is the Best: American, Australian or New Zealand?"> 27 Sep, 2014 </a>
                                                        </div>
                                                        <span class="comment-count">
                                                            <a href="">
                                                                <i class="fa fa-comment-o"></i>
                                                                1
                                                                <span class="comment-word">Comment</span>
                                                            </a>
                                                        </span>
                                                    </div>

                                                </div>

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- END SINGLE POST ONE -->

                                <!-- SINGLE POST TWO -->
                                <div class="item">
                                    <div class=" pading"> 
                                        <div class="post-article">
                                            <div class="standard-post-format clearfix as-image">
                                                <div class="post-media">
                                                    <div class="thumbnail">
                                                        <a href="#1"><img src="images/Cocktails-2.jpg"  alt="reponsive"></a>
                                                    </div>
                                                </div>

                                                <div class="post-content-wrapper">
                                                    <div class="post-content-meta">
                                                        <div class=" the-categories">

                                                            <span class="visuallyhidden">Category </span>
                                                            <a href="#" rel="category tag">Recipes</a>
                                                            <a href="#" rel="category tag">Tips &amp; Tricks</a>
                                                        </div>
                                                    </div>
                                                    <header class="single">
                                                        <div >
                                                            <h4><a href="#" title="#" >The Caipirinha Is The Brazilian Cocktail You’ve Been Too Afraid To Pronounce</a></h4>
                                                        </div>
                                                    </header>
                                                    <div class="post-content-outer">
                                                        <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                                    </div>
                                                    <div class="post-content-meta">
                                                        <div >

                                                            <a href="#" rel="tag">Bio</a>
                                                        </div>
                                                    </div>
                                                    <div class="post-actions-wrapper clearfix">
                                                        <div class="author kkk-meta-author">
                                                            <a href="#" title="Posts by Jon Madison" rel="author"><span class="icon shortcode use-hover"></span> Jon Madison</a>
                                                        </div>
                                                        <div class="post-date">
                                                            <a href="#" title="Which Lamb is the Best: American, Australian or New Zealand?"> 27 Sep, 2014 </a>
                                                        </div>
                                                        <span class="comment-count">
                                                            <a href="#">
                                                                <i class="fa fa-comment-o"></i>
                                                                1
                                                                <span class="comment-word">Comment</span>
                                                            </a>
                                                        </span>
                                                    </div>

                                                </div>

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- END SINGLE POST TWO -->

                                <!-- SINGLE POST THREE -->
                                <div class="item">
                                    <div class=" pading"> 
                                        <div class="post-article">
                                            <div class="standard-post-format clearfix as-image">
                                                <div class="post-media">
                                                    <div class="thumbnail">
                                                        <a href="#1"><img src="images/cocktails-3.jpg"  alt="reponsive"></a>
                                                    </div>
                                                </div>

                                                <div class="post-content-wrapper">
                                                    <div class="post-content-meta">
                                                        <div class=" the-categories">

                                                            <span class="visuallyhidden">Category </span>
                                                            <a href="#" rel="category tag">Recipes</a>
                                                            <a href="#" rel="category tag">Tips &amp; Tricks</a>
                                                        </div>
                                                    </div>
                                                    <header class="single">
                                                        <div >
                                                            <h4><a href="#" title="#" >The Plum Recipes That’ll Make You Fall In Love With This Stone Fruit</a></h4>
                                                        </div>
                                                    </header>
                                                    <div class="post-content-outer">
                                                        <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                                    </div>
                                                    <div class="post-content-meta">
                                                        <div >

                                                            <a href="#" rel="tag">Bio</a>
                                                        </div>
                                                    </div>
                                                    <div class="post-actions-wrapper clearfix">
                                                        <div class="author kkk-meta-author">
                                                            <a href="#" title="Posts by Jon Madison" rel="author"><span class="icon shortcode use-hover"></span> Jon Madison</a>
                                                        </div>
                                                        <div class="post-date">
                                                            <a href="#" title="Which Lamb is the Best: American, Australian or New Zealand?"> 27 Sep, 2014 </a>
                                                        </div>
                                                        <span class="comment-count">
                                                            <a href="#">
                                                                <i class="fa fa-comment-o"></i>
                                                                1
                                                                <span class="comment-word">Comment</span>
                                                            </a>
                                                        </span>
                                                    </div>

                                                </div>

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" pading"> 
                                        <div class="post-article">
                                            <div class="standard-post-format clearfix as-image">
                                                <div class="post-media">
                                                    <div class="thumbnail">
                                                        <a href="#1"><img src="images/cocktails-3.jpg"  alt="reponsive"></a>
                                                    </div>
                                                </div>

                                                <div class="post-content-wrapper">
                                                    <div class="post-content-meta">
                                                        <div class=" the-categories">

                                                            <span class="visuallyhidden">Category </span>
                                                            <a href="#" rel="category tag">Recipes</a>
                                                            <a href="#" rel="category tag">Tips &amp; Tricks</a>
                                                        </div>
                                                    </div>
                                                    <header class="single">
                                                        <div >
                                                            <h4><a href="#" title="#" >The Plum Recipes That’ll Make You Fall In Love With This Stone Fruit</a></h4>
                                                        </div>
                                                    </header>
                                                    <div class="post-content-outer">
                                                        <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                                    </div>
                                                    <div class="post-content-meta">
                                                        <div >

                                                            <a href="#" rel="tag">Bio</a>
                                                        </div>
                                                    </div>
                                                    <div class="post-actions-wrapper clearfix">
                                                        <div class="author kkk-meta-author">
                                                            <a href="#" title="Posts by Jon Madison" rel="author"><span class="icon shortcode use-hover"></span> Jon Madison</a>
                                                        </div>
                                                        <div class="post-date">
                                                            <a href="#" title="Which Lamb is the Best: American, Australian or New Zealand?"> 27 Sep, 2014 </a>
                                                        </div>
                                                        <span class="comment-count">
                                                            <a href="#">
                                                                <i class="fa fa-comment-o"></i>
                                                                1
                                                                <span class="comment-word">Comment</span>
                                                            </a>
                                                        </span>
                                                    </div>

                                                </div>

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- END SINGLE POST THREE -->

                                <!-- SINGLE POST FOUR -->
                                <div class="item">
                                    <div class=" pading"> 
                                        <div class="post-article">
                                            <div class="standard-post-format clearfix as-image">
                                                <div class="post-media">
                                                    <div class="thumbnail">
                                                        <a href="#1"><img src="images/cocktails-4.jpg" alt="img-reponsive" > </a>
                                                    </div>
                                                </div>

                                                <div class="post-content-wrapper">
                                                    <div class="post-content-meta">

                                                        <span class="visuallyhidden">Category </span>
                                                        <a href="#" rel="category tag">Recipes</a>
                                                        <a href="#" rel="category tag">Tips &amp; Tricks</a>
                                                    </div>
                                                    <header class="single">
                                                        <div >
                                                            <h4><a href="#" title="#" >24 Reasons To Seek Out Fresh Figs</a></h4>
                                                        </div>
                                                    </header>
                                                    <div class="post-content-outer">
                                                        <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                                    </div>
                                                    <div class="post-content-meta">
                                                        <div >

                                                            <a href="#" rel="tag">Bio</a>
                                                        </div>
                                                    </div>
                                                    <div class="post-actions-wrapper clearfix">
                                                        <div class="author kkk-meta-author">
                                                            <a href="#" title="Posts by Jon Madison" rel="author"><span class="icon shortcode use-hover"></span> Jon Madison</a>
                                                        </div>
                                                        <div class="post-date">
                                                            <a href="#" title="Which Lamb is the Best: American, Australian or New Zealand?"> 27 Sep, 2014 </a>
                                                        </div>
                                                        <span class="comment-count">
                                                            <a href="#">
                                                                <i class="fa fa-comment-o"></i>
                                                                1
                                                                <span class="comment-word">Comment</span>
                                                            </a>
                                                        </span>
                                                    </div>

                                                </div>

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- END SINGLE POST FOUR -->

                            </div>
                        </div>
                    </div>
                    <div class="cbp-nav">
                        <div class="cbp-nav-controls">
                            <div class="cbp-nav-prev" onclick="prevSlide()"><i class="fa fa-chevron-left"></i></div>
                            <div class="cbp-nav-next" onclick="nextSlide()"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
