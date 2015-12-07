<?php

/**
 * Bootstrap
 *
 * @author   anhtuank7c
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     https://crabstudio.info/
 */
use Cake\Core\Configure;
use Crabstudio\Recaptcha\Validation\ConfigValidator;

// if your app did not load config, the defaut test key will be used
if (null == Configure::read('Recaptcha')) {

    $config = [
        'Recaptcha' => [
            'sitekey' => '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'secret' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',
            'theme' => 'light',
            'type' => 'image',
            'enable' => '1'
        ]
    ];
    Configure::write($config);
}