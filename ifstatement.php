    <?php 
        $title = "If Statement";
        include 'includes/header.php'; 
    ?>
    <h1>If/Else Statements</h1>

    <?php
        echo '<h1>If Statement</h1>';

        $grade = 50;

        if($grade >= 50) {
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }else {
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
    ?>
    <?php require 'includes/footer.php' ?>