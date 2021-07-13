    <?php 
        $title = "Date and Time";
        include 'includes/header.php'; 
    ?>
    <h1>Date and Time Manipulation</h1>

    <?php
        $datenow = getdate();
        echo "<p>Today's Date: </p>";
        echo '<p>' . $datenow['mday'] . '</p>';
        echo '<p>' . $datenow['mon'] . '</p>';
        echo '<p>' . $datenow['year'] . '</p>';

        echo "<p>Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '</p>';

        echo time();

        print '<p>' . date("d/m/y G.i:s<br>", time()) . '</p>';

        print 'Today is '. date("j \of F Y, \a\\t g.i a", time());

    ?>
    <?php require 'includes/footer.php' ?>