    <?php 
        $title = "Strings";
        include 'includes/header.php'; 
    ?>
    <h1>PHP String Manipulation</h1>
    <?php
        // string concatenation
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        echo $phrase1 . " " . $phrase2; 
        echo '<hr/>';
        // string transformation
        $name = "trevoir williams";
        echo '<p>uppercase first letter: ' . ucfirst($name) . '</p>';
        echo '<p>uppercase first letter of each word: ' . ucwords($name) . '</p>';
        echo '<p>uppercase: ' . strtoupper($name) . '</p>';
        echo '<p>Lowercase: ' . strtolower("THIS WAS ALL UPPER CASE") . '</p>';
        echo '<hr/>';
        echo '<p>Repeat String: ' . str_repeat('a', 10) . '</p>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a', 10));
        echo '<p>Get a substring: ' . substr($name, 3, 5) . '</p>';
        echo '<p>Get position of string: ' . strpos($name, 'r') . '</p>';
        echo '<p>Find Character: ' . strchr($name, 'r') . '</p>';
        echo '<p>String length: ' . strlen($name) . '</p>';
        echo '<p>String length: ' . trim('  A B C ') . '</p>';
        echo '<p>Replace String: ' . str_replace("stand", "sit", $phrase2) . '</p>';

    ?>
    <?php require 'includes/footer.php' ?>