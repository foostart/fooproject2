<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7000">
        <div class="container">
            <div class="form">
                <form class="form-content">
                    <div class="form-header">
                        <h3 class="form-title">Do you have any Questions?</h3>
                        <p>Fields marked with an <span class="req-symbol">*</span> are required</p>
                    </div>
                    <!-- form-header -->

                    <div class="inline-group row">
                        <div class="field required col-sm-4">
                            <!-- add class error show error -->
                            <label >Name</label>

                            <div class="nf-field-element">
                                <input id="nf-field-37" name="nf-field-37" aria-invalid="true"  class="ninja-forms-field nf-element" type="text" value="">
                            </div>
                           
                        </div>

                        <div class="field required col-sm-4">
                            <!-- add class error show error -->
                            <label >Email</label>
                            <div class="nf-field-element">
                                <input id="nf-field-38" name="nf-field-38" aria-invalid="true"  class="ninja-forms-field nf-element" type="email" value="">

                            </div>
                            <div class="nf-after-field">
                                <nf-section>

                                    <div class="nf-input-limit"></div>

                                    <div id="nf-error-38" class="nf-error-wrap nf-error" role="alert">
                                        <div class="nf-error-msg nf-error-required-error"><div class="hide">This is a required field.</div></div>
                                    </div>

                                </nf-section>
                            </div>

                        </div>

                        <div class="field col-sm-4">
                            <label>Phone</label>
                            <div class="nf-field-element">
                                <input id="nf-field-39" name="nf-field-39"  class="ninja-forms-field nf-element" type="tel" value="" >
                            </div>
                            <div class="hide">This is a required field.</div>
                        </div>
                    </div>

                    <div class="field required">
                        <label>Message </label>
                        <div class="nf-field-element">
                            <textarea id="nf-field-40" name="nf-field-40" aria-invalid="true"  class="ninja-forms-field nf-element "></textarea>
                        </div>
                        <div class="nf-after-field ">
                            <nf-section>
                                <div class="nf-input-limit"></div>

                                <div class="nf-error-wrap nf-error "><div class="nf-error-msg nf-error-required-error "><div class="hide">This is a required field.</div></div></div>
                            </nf-section></div>
                    </div>

                    <input class="btn-form " type="submit"  value="Send"/>
                    
                </form>
                <!-- end form-content -->
            </div>
            <!-- end form -->
        </div>
        <!-- end container -->
</div>