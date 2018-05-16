<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1281">
    <div class="container">

    <div class="row content">
        <div class="da">
               <img src="<?php echo $url_path ?>/images/ornament-top.svg" alt="hinh">
        </div>
        <div class="row">
              <div class="col-md-2 ">
                
            </div>
            <div class="col-md-8 ">



                <h4 >Welcome to Delicious</h4>

“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”


<p ><a href="#" >M.R. Tyler Florence</a></p>


<p >
    <img src="<?php echo $url_path ?>/images/pho.png" alt="">
</p>
                
            </div>
            <div class="col-md-2 ">
                
            </div>
            
        </div>
          
        <div class="da">
               <img src="<?php echo $url_path ?>/images/ornament-bottom.svg" alt="hinh">
        </div>
        </div>

</div>
</div>


