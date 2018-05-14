<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1248">
    <div id="span-setting" class="open">
        <span id="toggle-style-switcher" class="open"></span>
    </div>
    <div id="style-switcher" class="open">

        <section class="style-switcher-group clearfix buttons">
            <h4>- Styles -</h4>
            <div class="section-contents">
                <a href="#" id="Orange" class="active" style="background-color: rgb(203, 113, 82); width: 50px; height: 50px;"></a><a href="#" id="Gold" style="background-color: rgb(205, 155, 51); width: 50px; height: 50px;"></a>
                <a href="#" id="Green" style="background-color: rgb(136, 182, 73); width: 50px; height: 50px;"></a><a href="#" id="Blue" style="background-color: rgb(95, 177, 178); width: 50px; height: 50px;"></a>
            </div>
        </section>
        <section class="style-switcher-group clearfix select">
            <h4>- Header Layout -</h4>
            <div class="section-contents">
                <div class="clearfix">
                    <select>
                        <option value="#">Single Row</option>
                        <option value="#">Logo - Left</option>
                        <option value="#">Logo - Centered</option>
                    </select>
                </div>
            </div>
        </section>
        <section class="style-switcher-group clearfix select">

            <h4>- Top Bar -</h4>
            <div class="section-contents">
                <div class="clearfix">
                    <select>
                        <option value="#">Off</option>
                        <option value="#">Menu, Social Icons</option>
                        <option value="#">Social Icons, Menu</option>
                        <option value="#">Social Icons, Text</option>
                        <option value="#">Text, Menu</option>
                        <option value="#">Menu, Text</option>
                        <option value="#">Text, Social Icons</option>
                    </select>
                </div>
            </div>
        </section>
        <section class="style-switcher-group clearfix buttons">
            <div class="section-contents"><h2><a href="#" id="Reset">Reset</a></h2></div>
        </section>
    </div>

    <a href="#" id="back-to-top" title="Back to top"><span class="glyphicon glyphicon-chevron-up"></span></a>
</div>





