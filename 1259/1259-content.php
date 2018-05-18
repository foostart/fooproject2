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
            <form>
                <h3 class="form-title">Bạn có câu hỏi nào không?</h3>
                <p>Các trường được đánh dấu <span class="req-symbol">*</span> là bắt buộc</p>
                <!-- form-header -->
                <div class="inline-group row">
                    <!--NAME-->
                    <div class="field required col-md-4 col-sm-4 col-xs-12">
                        <!-- add class error show error -->
                        <label >Tên</label>
                        <input id="nf-field-37" name="nf-field-37" aria-invalid="true" type="text" value="">
                    </div>
                    <!--/NAME-->
                    <!--EMAIL-->
                    <div class="field required col-md-4 col-sm-4 col-xs-12">
                        <!-- add class error show error -->
                        <label >Email</label>

                        <input id="nf-field-38" name="nf-field-38" aria-invalid="true" type="email" value="">


                        <div class="nf-after-field">
                            <nf-section>
                                <div id="nf-error-38" class=" nf-error" role="alert">
                                    <div class="nf-error-msg "><div class="hide">Đây là một lĩnh vực cần thiết.</div></div>
                                </div>

                            </nf-section>
                        </div>
                    </div>
                    <!--/EMAIL-->
                    <!--PHONE-->
                    <div class="field col-md-4 col-sm-4 col-xs-12">
                        <label>Điện Thoại</label>

                        <input id="nf-field-39" name="nf-field-39" type="tel" value="" >

                        <div class="hide">Đây là một lĩnh vực cần thiết.</div>
                    </div>
                    <!--/PHONE-->
                </div>
                <!--MESAGE-->
                <div class="field required">
                    <label>THÔNG ĐIỆP </label>

                    <textarea id="nf-field-40" name="nf-field-40" aria-invalid="true"></textarea>

                    <div class="nf-after-field ">
                        <nf-section>

                            <div class=" nf-error "><div class="nf-error-msg "><div class="hide">Đây là một lĩnh vực cần thiết.</div></div></div>
                        </nf-section></div>
                </div>
                <!--/MESAGE-->
                <!--SEND-->
                <input class="btn-form " type="submit"  value="Send"/>
                <!--/SEND-->
            </form>
            <!-- end form-content -->
        </div>
        <!-- end form -->
    </div>
    <!-- end container -->
</div>