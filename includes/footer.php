<div id="footer" class="cf">
    <div class="column three">
        <strong>Phone</strong>
        123-123-123
    </div>
    <div class="column three">
        <strong>Location</strong>
        32 Havaii<br>
        Hunkai, HU
    </div>
    <div class="column three last">
        <strong>Hours</strong>
        <?php
        include(__DIR__ . "/work_hours.php");
        include(__DIR__ . "/available.php");
        ?>
    </div>
</div>
<small>&copy;<?php echo (date('Y')) ?> -
    <?php
    $name = 'Dmytro Coorp.';
    echo $name ?></small>
</div>
</div>
</body>

</html>