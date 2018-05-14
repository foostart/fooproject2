<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    
        <div class="type-1242">
      
            <div class="row">
           
                
               
                            <p>
                                <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sbg!2sbg!4v1466707607406!6m8!1m7!1svsXUo6yo0NdjsXT6vPIAXA!2m2!1d51.51879257446717!2d-0.1547868106266257!3f74.10829252425589!4f-9.830256425407029!5f0.4000000000000002" width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen">
                                    
                                </iframe>
                            </p>
                        

      
            </div>
            <div class="space"></div>
            <div class="wapper">
                <div class="row">
                    <div class="main">
                        <div class="grid2-5  col-md-5 col-sm-12 col-xs-12">
                            <div class="spacespane"></div>
                            <h4>Opening Times</h4>
                            <table class="timetable">
                                <tbody>
                                    <tr>
                                        <td>Week days</td>
                                        <td></td>
                                        <td>9.00 – 18:00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td></td>
                                        <td>10.00 – 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td></td>
                                        <td>Closed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="grid1-5  col-md-2 col-sm-12 col-xs-12">
                            <div class="blank-space1"></div>
                            <div class="row">
                                <div class="grid1">
                                    <div class="grid1-1">
                                        <p>
                                            <img src="<?php echo $url_path ?>/images/icon.JPG" alt=""/>
                                            <span></span>
                                        </p>
                                        <h4>Directions</h4>
                                        <p>London, UK<br>
                                            10, Firs Avenue, Muswell Hill
                                        </p>
                                        <p>
                                            <a href="#" class="button">
                                                <span class="text-button">View on map</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid2-5 lastgrid  col-md-5 col-sm-12 col-xs-12">
                            <div class="spacespane"></div>
                            <h4>Get in touch</h4>
                            <h4>+359 562 958</h4>
                            <p class="email"><a href="#">hello@yoursite.com</a></p>
                            <p>
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-pinterest"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank-space"></div>
        </div>
  