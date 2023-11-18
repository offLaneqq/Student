<?php

define('TITLE', 'Project | Dmytro Coorp.');
include('./includes/header.php');

function strip_bad_chars($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

if (isset($_GET['item'])) {
    $projectItem = strip_bad_chars($_GET['item']);
    $project = $projectsItems[$projectItem];
}

?>

<hr />
<div id="dish">
    <h1>
        <?php echo ($project['title']); ?> <span class="price">Created app - <?php echo($project['date']) ?></span>
    </h1>
    <p>
        <?php echo ($project['bio']) ?>
    </p>
    <img src="<?php echo('./img/'.$project['img'].'.png') ?>" />
</div>
<hr />
<a href="./projects.php" class="button previous">&laquo; Back to Projects</a>


<?php
include('./includes/footer.php');
?>