<?php if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options

return [
    // Captcha configuration for example page
    'formCaptcha' => [
        'UserInputID' => 'captchaCode',
        'ImageWidth' => 400,
        'ImageHeight' => 100,
    ],

];