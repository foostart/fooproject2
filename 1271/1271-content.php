<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?> 


<div class="type-1271">
    <div class="container">
        <div class="content">
            <h1 class="classic"> Classic Blog </h1>
            <div class="line"><span></span></div>
        </div>
        <div class="des1">
            <div class="hour">
                <div class="post-date">
                        <a href="https://vip-restaurant.vamtam.com/blog-post-with-top-widgets/" title="Blog post with Top Widgets">
                            <span class="top-part">
                                17 
                            </span>
                            <span class="bottom-part">
                                08 '16 
                            </span>
                        </a>
                    </div>
                    <span class="vamtam-meta-author">
                        <a href="https://vip-restaurant.vamtam.com/author/admin/" title="Posts by Jon Madison" rel="author">
                            <i class="fa fa-pencil fa-2x" aria-hidden="true">
                            </i>
                            <span class="icon shortcode theme  use-hover">
                                <br>Jon Madison
                            </span>
                        </a>
                    </span>
                    <span class="comment-count vamtam-meta-comments">
                        <a href="https://vip-restaurant.vamtam.com/blog-post-with-top-widgets/#respond">
                            <i class="fa fa-comment-o fa-2x" aria-hidden="true">
                            </i>
                            <span class="icon shortcode theme  use-hover">
                                <br>0 Comments
                            </span>

                        </a>
                    </span>
               

            </div>
            <div class="img-content">
                <a href="#"><img src="images/blog2.jpg" alt="img-reponsive"></a>
            </div>
            <div class="text-content">
                <div class="title-des">
                    <h3><a href="#">Blog post with Left & Right Sidebars</a></h3>
                </div>
                <div class="post-des">
                    <p>
                        Lamb is a very subjective item. Many people feel that New Zealand or Australian is the best and others feel there is no lamb other than American and are willing to pay the premium price for it. Lamb from each…
                    </p>
                </div>

                <div class="post-meta">
                    <div class="vamtam-meta-tax">
                        <i class="fa fa-tags" aria-hidden="true"></i>  
                        <a href="#" rel="category tag">Features</a>
                    </div>
                    <div class="the-tags vamtam-meta-tax">
                        <i class="fa fa-database" aria-hidden="true"></i>  
                        <a href="#" rel="tag">LEFT-RIGHT-SIDEBAR</a> 
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>

    <hr>
</div>
