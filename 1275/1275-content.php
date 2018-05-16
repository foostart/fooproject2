<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

        <div class="type-1275">
        <div class="container">
            <!--............-->
            <header class="page-header">
                <h1>Theme Options</h1>
                
            </header> 

            <div class="product-menu">
                <!--menu-->
                <div class="Filters " data-parent="olumn-filters">
                    <ul class=" nav nav-tabs">
                        
                        <li ><a data-toggle="tab" href="#a">General Settings</a></li>
                        <li ><a data-toggle="tab" href="#b">Global Layout</a></li>
                        <li ><a data-toggle="tab" href="#c">Global Style</a></li>
                        <li ><a data-toggle="tab" href="#d">Global Typography</a></li>
                        <li ><a data-toggle="tab" href="#e">Top Bar & Header</a></li>
                        <li ><a data-toggle="tab" href="#f">Body</a></li>
                        <li ><a data-toggle="tab" href="#g">Shooter & Subfooter</a></li>
                        <li ><a data-toggle="tab" href="#h">Site Identiy, Product Archives</a></li>
                        <li ><a data-toggle="tab" href="#h">Menu, Widget, Static Front Page</a></li>
                        <li ><a data-toggle="tab" href="#h">Page Options</a></li>
                        <li ><a data-toggle="tab" href="#h">Blog Post Options</a></li>                        
                        <li ><a data-toggle="tab" href="#h">Project Post Options</a></li>
                        <li ><a data-toggle="tab" href="#h">Drag & Drop Builder</a></li>
                    </ul>
                </div>
                <!--..-->
                <div class="portfolio_wrapper">
                    <div class="tab-content">
                        
                        <div id="a" class="tab-pane fade in active">
                        </div>
                        <div id="b" class="tab-pane "style="background: white;" >
                            <div class="all">

                                <div>
                                    <div class="image">
                                        <img class="img-reponsive" src="<?php echo $url_path ?>/image/content.jpg" alt=""/>
                                    </div>
                            </div>
                        </div>
                        <div id="c" class="tab-pane fade in active">
                        </div>

                        <div id="d" class="tab-pane fade in active">
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>


