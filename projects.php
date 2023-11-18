<?php 

    define("TITLE", "Projects | Dmytro Coorp.");
    include('./includes/header.php');

?>

    <div id="menu-items">
        <h1>Our list of finished projects</h1>
        <p>We are new to the market, but we are trying to show results. Customer satisfaction is of the utmost importance to us</p>
        <p><em>To get more information - click on anyone project below</em></p>

        <hr ?>
        <ul>

            <?php  foreach($projectsItems as $project => $item) {  ?>
                
                <li><a href="project.php?item=<?php echo $project ?>"><?php echo $item['title'] ?></a></li>

            <?php } ?>

            
        </ul>
    </div>

<?php 

    include('./includes/footer.php');

?>