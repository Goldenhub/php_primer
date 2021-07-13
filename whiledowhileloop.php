    <?php 
        $title = "While | Do-While Loop";
        include 'includes/header.php'; 
    ?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        while($grade < 10){
            echo '<p>I AM LESS THAN 10</p>';
            $grade++;
        }

        echo '<p>EXIT LOOP</p>'
    ?>

    <h1>Do-While Loop</h1>

    <?php
        // Post-Condition Loop
        $grade = 0;
        do{
            echo '<p>I AM DO-WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);
    ?>
    <?php require 'includes/footer.php' ?>