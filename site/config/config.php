<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('languages', array(
//    array(
//        'code'    => 'en',
//        'name'    => 'English',
//        'default' => true,
//        'url'     => '/',
//        'locale'  => array(
//            LC_COLLATE  => 'en_US.utf8',
//            LC_MONETARY => 'en_US.utf8',
//            LC_NUMERIC  => 'en_US.utf8',
//            LC_TIME     => 'en_US.utf8',
//            LC_MESSAGES => 'en_US.utf8',
//            LC_CTYPE    => 'en_US.utf8'
//        ),
//    ),
    array(
        'code'    => 'de',
        'name'    => 'Deutsch',
        'default' => true,
        'url'     => '/de',
        'locale'  => array(
            LC_COLLATE  => 'de_DE.utf8',
            LC_MONETARY => 'de_DE.utf8',
            LC_NUMERIC  => 'de_DE.utf8',
            LC_TIME     => 'de_DE.utf8',
            LC_MESSAGES => 'de_DE.utf8',
            LC_CTYPE    => 'de_DE.utf8'
        ),
    ),
));