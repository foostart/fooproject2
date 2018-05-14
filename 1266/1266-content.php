<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1266">
    <div class="container">
        <div class="sep-text centered">
            <div class="sep-text-before"> 
                <div class="sep-text-line">
                </div>
            </div>
            <div class="content">
                <h3>Breakfast</h3>
            </div>
            <div class="sep-text-after">
                <div class="sep-text-line">
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img-products">
                    <div class="menu-products">
                        <img src="<?php echo $url_path ?>/images/8.jpg" alt="img-reponsive">
                        <span class="pd-price">$8</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Antioxidant Fruits Mix</h3>
                        </div>
                    </div>
                </div>
                
                <br>
                
               
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img-products">
                    <div class="menu-products">
                        <img src="<?php echo $url_path ?>/images/Desserts-12-700x469.jpg" alt="img-reponsive">
                        <span class="pd-price">$5</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                        </div>
                    </div>
                </div>
                
                <br>
                
               
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img-products">
                    <div class="menu-products">
                        <img src="<?php echo $url_path ?>/images/Desserts-10-700x469.jpg" alt="img-reponsive">
                        <span class="pd-price">$7</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Fig and lemon cake</h3>
                        </div>
                    </div>
                </div>
                
                <br>
                
                
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="img-products">
                    <div class="menu-products">
                        <img src="<?php echo $url_path ?>/images/8.jpg" alt="img-reponsive">
                        <span class="pd-price">$8</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Antioxidant Fruits Mix</h3>
                        </div>
                    </div>
                </div>
                
                <br>
                
               
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img-products">
                    <div class="menu-products">
                        <img src="<?php echo $url_path ?>/images/8.jpg" alt="img-reponsive">
                        <span class="pd-price">$8</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Antioxidant Fruits Mix</h3>
                        </div>
                    </div>
                </div>
                
                <br>
                
               
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img-products">
                    <div class="menu-products">
                        <img src="<?php echo $url_path ?>/images/8.jpg" alt="img-reponsive">
                        <span class="pd-price">$8</span>
                    </div>    
                        <div class="menu_info">
                            <div class="fp_inner_box">
                                <h3>Antioxidant Fruits Mix</h3>
                            </div>
                        </div>
                    </div>
                <br>
            </div>
        </div>  
        <div class="clearfix"></div>
    </div>
</div>


