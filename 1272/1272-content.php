<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<header class='type-1272'>                      
    <div class="container">
        <div class="row">
            <div class = "col-md-8 col-sm-8 col-xs-12">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <section id="categories-9" class="widget">
                    <h4 class="widget-title">Categories</h4> 
                    <ul>
                        <li class="cat-item "><a href="#">Cooking</a></li>
                        <li class="cat-item "><a href="#">Features</a></li>
                        <li class="cat-item "><a href="#">Healthy Food</a></li>
                        <li class="cat-item "><a href="#">Recipes</a></li>
                        <li class="cat-item "><a href="#">Tips &amp; Tricks</a></li>
                    </ul>
                </section>
                <section id="archives-10" class="widget widget_archive">
                    <h4 class="widget-title">Archives</h4> 
                    <ul>
                        <li><a href='#'>August 2016</a></li>
                        <li><a href='#'>September 2014</a></li>
                        <li><a href='#'>March 2014</a></li>
                        <li><a href='#'>September 2013</a></li>
                        <li><a href='#'>August 2013</a></li>
                        <li><a href='#'>May 2013</a></li>
                        <li><a href='#'>March 2013</a></li>
                    </ul>
                </section>
                <section id="tag_cloud-2" class="widget widget_tag_cloud">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tagcloud">
                        <a href="#" " style="font-size: 8pt;" aria-label="basil (1 item)">basil</a>
                        <a href="#" " style="font-size: 11.6pt;" aria-label="Bio (2 items)">Bio</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="blueberry (1 item)">blueberry</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="cocktail (1 item)">cocktail</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="coffee (1 item)">coffee</a>
                        <a href="#" " style="font-size: 20pt;" aria-label="cooking (7 items)">cooking</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="crimp (1 item)">crimp</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="Dinner (1 item)">Dinner</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="Experiments (1 item)">Experiments</a>
                        <a href="#" " style="font-size: 16pt;" aria-label="Food (4 items)">Food</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="granita (1 item)">granita</a>
                        <a href="#" " style="font-size: 11.6pt;" aria-label="Hand Made (2 items)">Hand Made</a>
                        <a href="#" " style="font-size: 21pt;" aria-label="healthy (8 items)">healthy</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="lamb (1 item)">lamb</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="Left-Right-Sidebar (1 item)">Left-Right-Sidebar</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="Left-Sidebar (1 item)">Left-Sidebar</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="pie (1 item)">pie</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="plum (1 item)">plum</a>
                        <a href="#" " style="font-size: 22pt;" aria-label="recipe (9 items)">recipe</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="Right-Sidebar (1 item)">Right-Sidebar</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="strawberry (1 item)">strawberry</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="sushi (1 item)">sushi</a>
                        <a href="#" " style="font-size: 22pt;" aria-label="tips (9 items)">tips</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="Top-Widgets (1 item)">Top-Widgets</a>
                        <a href="#"" style="font-size: 20pt;" aria-label="tricks (7 items)">tricks</a>
                        <a href="#" " style="font-size: 8pt;" aria-label="Video (1 item)">Video</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</header>