<?php include('header.php'); ?>

<section>
    <h2>Home</h2>
    <p>Welcome to my first PHP project!</p>

    <h3>This is nothing special right now, but still seems interesting.</h3>
    
    <?php
    $listItems = array(
        'page 1' => 'home.php',
        'page 2' => 'chart.php',
        'page 3' => 'quote.php',
        'page 4' => 'game.php',
        'page 5' => 'about.php',
        'page 6' => 'about.php'
    );
    ?>

    <h3>Project Pages: </h3>
    <ul>
        <?php
        foreach ($listItems as $page => $url) {
            echo "<li><a href='$url'>$page - $url</a></li>";
        }
        ?>
    </ul>
</section>

<?php include('footer.php'); ?>