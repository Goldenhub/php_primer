    <?php 
        $title = "Array";
        include 'includes/header.php'; 
    ?> 
    <h1>Array</h1>

    <?php
        // An array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

        echo $numbers[5];
        echo "<p>$numbers[10]</p>";
        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    <?php require 'includes/footer.php' ?>