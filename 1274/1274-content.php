<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

        <div class="type-1274">
            <div class="container">
                <div class="row">
                    <div class="content-1">
                        <div class="col-md-3 text-center">
                            <i class="fa fa-eye hvr-grow" style="font-size: 46px;"></i>
                            <h2>Live Customizer</h2>
                            <p>All theme options are available in the WordPress Live Customizer to style your site easily in the front end.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="material-icons hvr-grow" style="font-size: 46px;"> layers</i>
                            <h2>Drag & Drop Builder</h2>
                            <p>All theme options are available in the WordPress Live Customizer to style your site easily in the front end.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="fa fa-cutlery hvr-grow" style="font-size: 46px;"></i>
                            <h2>FoodPress</h2>
                            <p>All theme options are available in the WordPress Live Customizer to style your site easily in the front end.</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="material-icons hvr-grow" style="font-size:46px">access_time</i>
                            <h2>Timely Support</h2>
                            <p>All theme options are available in the WordPress Live Customizer to style your site easily in the front end.</p>
                        </div>
                    </div>

                    <div class="content-2">
                        <div class="col-md-12">
                            <div class="top text-center">
                                <h1>FULL FEATURE LIST</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-sm-12">
                                    <div class="text-center">
                                        <i class="fa fa-star hvr-grow" style="font-size: 46px;"></i>
                                        <h3>Highlights</h3><hr>
                                    </div>

                                    <ul>
                                        <li>
                                            <p>23 Meticulously-scripted and professionally-produced HD video tutorials for beginners worth <strong>$79!</strong></p> 
                                        </li>
                                        <li>
                                            <p>Cube Portfolio Grid worth <strong>$16!</strong></p>
                                        </li>
                                        <li>
                                            <p>Sleek and easy to use Drag & Drop page, blog posts and portfolio posts builder, entirely based on the popular Visual Composer.</p>
                                        </li>
                                        <li>
                                            <p>1200+ Premium Icon Set – <strong>$39 !</strong></p>
                                        </li>
                                        <li>
                                            <p>Revolution Slider Responsive WordPress Plugin – <strong>$19 !</strong></p>
                                        </li>
                                        <li>
                                            <p>Max Mega Menu plugin.</p>
                                        </li>
                                        <li>
                                            <p>Max Mega Menu plugin.</p>
                                        </li>
                                        <li>
                                            <p>Max Mega Menu plugin.</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="text-center">
                                        <i class="fa fa-adjust hvr-grow" style="font-size: 46px;"></i>
                                        <h3>Top notch customer support</h3><hr>
                                    </div>

                                    <ul>
                                        <li>
                                            <p>Help Desk with one on one email and ticket support and dedicated support staff ready to assist you.</p>
                                        </li>
                                        <li>
                                            <p>Response times usually less than 8 hours.</p>
                                        </li>
                                        <li>
                                            <p>23 Meticulously-scripted and professionally-produced HD video tutorials for beginners worth $79!</p>
                                        </li>
                                        <li>
                                            <p>Extensive setup guide.</p>
                                        </li>
                                        <li>
                                            <p>100 + help articles written by us</p>
                                        </li>
                                        <li>
                                            <p>In-Dashboard Contextual Help. Тhere are little helpers everywhere in the interface, that let you retrieve quick information about the particular fields you are currently viewing.</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="text-center">
                                        <i class="fa fa-adjust hvr-grow" style="font-size: 46px;"></i>
                                        <h3>Page/Post drag & drop builder</h3><hr>
                                    </div>

                                    <ul>
                                        <li>
                                            <p>The VamTam Drag and Drop Builder is based on the popular Visual Composer.</p>
                                        </li>
                                        <li>
                                            <p>The VamTam drag & drop page builder is a very rich tool with simple interface for building any page or post layout with simple drag & drop. You don’t need to touch one line of code for creating your page layout and elements. This tool will save you lots of time on building your pages or posts.</p>
                                        </li>
                                        <li>
                                            <p>The VamTam drag & drop page builder is tightly integrated with tinymce editor and you can switch to visual or text editor at any time without losing any changes. Tabs and Accordion elements with drag and drop interface. Drag & Drop page builder works with pages, blog and portfolio posts.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
