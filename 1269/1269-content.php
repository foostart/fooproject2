<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1269">
    <div class="container-fluid clearfix">\
        <div class="row">
            <div class="header-middle type-featured col-md-12">
                <h5 style="text-align: center">FEATURED POSTS</h5>
                <div class="loop-wrapper clearfix news">
                    <div class="kkk-cubeportfolio cbp cbp-slider-edge cbp-ready cbp-mode-slider">
                        <div class="cbp-wrapper-outer">
                            <div class="cbp-wrapper">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="pading"> 
                                                <div class="post-article">
                                                    <div class="standard-post-format clearfix as-image">
                                                        <div class="post-media">
                                                            <div class="thumbnail">
                                                                <a href="#1"><img src="http://<?php echo $url_path ?>/images/anh1.jpg"  alt="reponsive"></a>
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
                                        <div class="swiper-slide">
                                            <div class="pading"> 
                                                <div class="post-article">
                                                    <div class="standard-post-format clearfix as-image">
                                                        <div class="post-media">
                                                            <div class="thumbnail">
                                                                <a href="#1"><img src="http://<?php echo $url_path ?>/images/anh1.jpg"  alt="reponsive"></a>
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
                                        <div class="swiper-slide">
                                            <div class="pading"> 
                                                <div class="post-article">
                                                    <div class="standard-post-format clearfix as-image">
                                                        <div class="post-media">
                                                            <div class="thumbnail">
                                                                <a href="#1"><img src="http://<?php echo $url_path ?>/images/anh1.jpg"  alt="reponsive"></a>
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
                                        <div class="swiper-slide">
                                            <div class="pading"> 
                                                <div class="post-article">
                                                    <div class="standard-post-format clearfix as-image">
                                                        <div class="post-media">
                                                            <div class="thumbnail">
                                                                <a href="#1"><img src="http://<?php echo $url_path ?>/images/anh1.jpg"  alt="reponsive"></a>
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
                                        <div class="swiper-slide">
                                            <div class="pading"> 
                                                <div class="post-article">
                                                    <div class="standard-post-format clearfix as-image">
                                                        <div class="post-media">
                                                            <div class="thumbnail">
                                                                <a href="#1"><img src="http://<?php echo $url_path ?>/images/anh1.jpg"  alt="reponsive"></a>
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
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>