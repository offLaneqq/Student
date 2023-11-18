<?php

// Nav Menu Items
$nav_items = array(
    'links' => array('index.php', 'team.php', 'projects.php', 'contact.php'),
    'name'  => array('Home', 'Team', 'Projects', 'Contact')
);

$work_hours = array(
    'days'  => array('Tuesday - Thursday', 'Friday - Saturday', 'Sunday - Monday'),
    'hours' => array('1:00pm - 9:00pm', '4:00pm - 11:00pm', '2:00pm - 8:30pm')
);

// Team Items
$teamMembers = array(
    'name'  => array('Carlos', 'Francis', 'Frankie III'),
    'position' => array('Frontend Developer', 'HR', 'Backend Developer'),
    'bio' => array(
        'Carlos, a seasoned frontend developer, navigates the digital realm with a keen eye for detail and a passion for crafting seamless user experiences. Armed with a mastery of cutting-edge technologies, Drake is not just a coder but an artist, transforming concepts into visually stunning and intuitively interactive web interfaces.',
        'Francis, an accomplished HR professional, combines a strategic mindset with a deep understanding of human dynamics to cultivate thriving workplace environments. With a talent for talent acquisition and a commitment to fostering a positive corporate culture, Artur is dedicated to building teams that drive organizational success and employee satisfaction.',
        'Frankie, a seasoned backend developer, brings a wealth of experience to the digital landscape, specializing in architecting robust and scalable server-side solutions. His proficiency in crafting efficient databases and optimizing system performance makes him an indispensable force, ensuring the seamless functionality and reliability of every project he undertakes.'
    ),
    'img' => array('carlos', 'francis', 'frankie')
);

// Projects Items    __test another ways using arrays
$projectsItems = array(

    "calculator" => array(
        "title" => "calculator",
        "bio"   => "It is calc created on speed-hand",
        "date"  => "21.02.2023",
        "img"   => "calc"
    ),

    "stopwatch" => array(
        "title" => "stopwatch",
        "bio"   => "It is stopwatch created by my friend on a microcontroller",
        "date"  => "14.10.2022",
        "img"   => "stopwatch"
    ),

    "weather" => array(
        "title" => "weather",
        "bio"   => "It is site about weather created on Vue",
        "date"  => "09.08.2023",
        "img"   => "weather"
    )

);
