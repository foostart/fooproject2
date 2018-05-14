
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
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

        <div class="faq">
            <div class="question">
                <div class="question-logo">
                    <span>Q</span>
                </div>
                <div class="question-infor">
                    We are visiting one of the restaurants. Is Gordon available to say hello?
                </div>
            </div>
            <div class="space"></div>
            <div class="answer">
                <div class="answer-logo">
                    <span>A</span>
                </div>
                <div class="answer-infor">
                    Unfortunately Gordon is unable to make individual appearances but you may be lucky and catch him when he is visiting the teams in the restaurants. However, if you have special requests then do please do contact the restaurant reservations team ahead of your booking who will be delighted to help make your time with us extra special.
                </div>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <div class="question-logo">
                    <span>Q</span>
                </div>
                <div class="question-infor">
                    Could Gordon please record a special message for us?
                </div>
            </div>
            <div class="space"></div>
            <div class="answer">
                <div class="answer-logo">
                    <span>A</span>
                </div>
                <div class="answer-infor">
                    Gordon is always flattered by the requests he receives of this nature from friends and family members of his fans. However, as we’re sure you can imagine, he is unable to record personalised messages due to his busy schedule.
                </div>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <div class="question-logo">
                    <span>Q</span>
                </div>
                <div class="question-infor">
                    Please can you send me a signed autograph from Gordon?
                </div>
            </div>
            <div class="space"></div>
            <div class="answer">
                <div class="answer-logo">
                    <span>A</span>
                </div>
                <div class="answer-infor">
                    Unfortunately we are not able to send signed autographs, simply due to logistical reasons and to the high volume of requests.
                </div>
            </div>
        </div>

        <div class="faq">
            <div class="question">
                <div class="question-logo">
                    <span>Q</span>
                </div>
                <div class="question-infor">
                    Would Gordon like to become a patron of our charity?
                </div>
            </div>
            <div class="space"></div>
            <div class="answer">
                <div class="answer-logo">
                    <span>A</span>
                </div>
                <div class="answer-infor">
                    Gordon is a patron and supporter of a handful of charities with which he has a personal or longstanding connection and he is currently unable to take on any more charitable commitments.
                </div>
            </div>
        </div>
        
    </div>
</div>
