
<?php
include '../config.php';
if (empty($url_path)) {
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
}
?>
<div class="type-1258">
    <div class="container">
        <div class="faq">
            <div class="question">
                <div class="question-logo">
                    <span>Q</span>
                </div>
                <div class="question-infor">
                    Is Gordon available to attend or speak at our event?
                </div>
            </div>
            <div class="space"></div>
            <div class="answer">
                <div class="answer-logo">
                    <span>A</span>
                </div>
                <div class="answer-infor">
                    As we’re sure you can understand, Gordon’s diary is very busy and often booked very far in advance. He is therefore simply unable to attend or speak at all the events that he is invited to.
                </div>
            </div>
        </div>
        <div class="da">
               <img src="images/hinh.png" alt="hinh">
        </div>
    </div>
</div>
