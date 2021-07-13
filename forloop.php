    <?php 
        $title = "For Loop";
        include 'includes/header.php'; 
    ?>    
    <h1>For Loops</h1>

    <?php
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello world</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is $count<br/></p>";
        }
    ?>
    <?php require 'includes/footer.php' ?>