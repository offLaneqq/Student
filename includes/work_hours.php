<?php
    include(__DIR__.'/arrays.php');
    for($i = 0; $i < count($work_hours['days']); $i++) {
        echo("<em>".$work_hours['days'][$i]."</em><br />
            ".$work_hours['hours'][$i]."<br /><br />
        ");
    }
    
    // <strong>Hours</strong>
    // <em>Tuesday - Thursday</em><br />
    // 1:00pm - 9:00pm<br /><br />
    // <em>Friday - Saturday</em><br />
    // 4:00pm - 11:00pm<br /><br />
    // <em>Sunday - Monday</em><br />
    // Closed<br /><br />
?>