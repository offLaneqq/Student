<?php
define("TITLE", "Team | Dmytro Coorp.");
include(__DIR__ . "/includes/header.php")
?>

<div id="team-members" class="cf">

    <h1>Team in Dmytro Corporation</h1>
    <p>
        The Dmytro Corporation team is a well-coordinated group of professionals who work together to achieve high goals. They are committed not only to the implementation of technological innovations, but also to creating an effective and ethical corporate culture.
    </p>
    
    <hr/>

    <?php
        for ($i = 0; $i < count($teamMembers['name']); $i++) {
            echo("
                <div class='member'>
                    <img src='./img/".$teamMembers['img'][$i].".png' />
                    <h2>".$teamMembers['name'][$i]."</h2>
                    <p>".$teamMembers['bio'][$i]."</p>
                </div>
            ");
        }
    ?>

</div>
<hr />

<?php
include(__DIR__ . "/includes/footer.php")
?>