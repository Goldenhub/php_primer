    
    <?php 
        $title = "Index";
        include 'includes/header.php'; 
    ?>
    <h1>Hello HTML - PHP Primer</h1>

    <?php
        // printing to HTML using echo
        echo 'Hello PHP';
        // You can echo HTML tags
        echo '<br/>';
        echo 'Second lIne';
        echo '<br/>';
    
        $name = 'Azubuike Golden';
        $sex = 'Male';
        echo '<h1>My name is '.$name.'</h1>';
        echo '<h2>I am a '.$sex.'</h2>';
        echo "<h1>My name is $name </h1>";
    ?>
        <button type="button" class="btn btn-dark">CLICK ME!</button>
        <button type="button" class="btn btn-primary">CLICK ME!</button>
        <button type="button" class="btn btn-success">CLICK ME!</button>
        <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
    <?php
        require 'includes/footer.php' 
    ?>