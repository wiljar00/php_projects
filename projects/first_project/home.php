<?php include('header.php'); ?>

<section>
    <h2>Home</h2>
    <p>Welcome to my first PHP project!</p>

    <h3>This is nothing special right now, but still seems interesting.</h3>
    
    <?php
    $listItems = array(
        'page 1' => 'homepage',
        'page 2' => 'about page',
        'page 3' => 'contact page'
    );
    ?>

    <h3>Project Pages: </h3>
    <ul>
        <?php
        foreach ($listItems as $page => $content) {
            echo "<li>$page - $content</li>";
        }
        ?>
    </ul>
</section>

<?php include('footer.php'); ?>