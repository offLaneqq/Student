<?php
    include(__DIR__."/storeHours.class.php");

    date_default_timezone_set('Europe/Kyiv');
    $hours = array(
        'mon' => array('14:00-20:30'),
        'tue' => array('13:00-21:00'),
        'wed' => array('13:00-21:00'),
        'thu' => array('13:00-21:00'), // Open late
        'fri' => array('16:00-23:30'),
        'sat' => array('16:00-23:00'),
        'sun' => array('14:00-20:30')
    );

    $exceptions = array(
        '1/1'  => array('14:00-18:00'),
        '10/18' => array('11:00-16:00')
    );

    $config = array(
        'separator'      => ' - ',
        'join'           => ' and ',
        'format'         => 'g:ia',
        'overview_weekdays'  => array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
    );

    $store_hours = new StoreHours($hours, $exceptions, $config);

    if($store_hours->is_open()) {
        echo "<strong class='open'>Yes, we're open! Today's hours are " . $store_hours->hours_today() . ".</strong>";
    } else {
        echo "<strong class='closed'>Sorry, we're closed. Today's hours are " . $store_hours->hours_today() . ".</strong>";
    }
?>