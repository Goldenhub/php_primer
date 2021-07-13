    <?php 
        $title = "Functions";
        include 'includes/header.php'; 
    ?>
    <h1>Functions</h1>

    <?php
        // Defining a Function
        function writeMessage() {
            echo "You're really a nice person, have a nice time!";
        }

        // Calling a Function
        writeMessage();

        echo "<hr/>";

        writeMessage();

        // Functions with parameters

        function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "<p>The sum of $num1 and $num2 is: $sum</p>";
        }

        addFunction(10, 20);
    ?>
    <?php require 'includes/footer.php' ?>