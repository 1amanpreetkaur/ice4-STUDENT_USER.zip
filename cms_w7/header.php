<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <nav>
        <ul>
            <li class="<?= ($current_page == 'index.php') ? 'active': ''; ?>"><a href="index.php">HOME</a></li>
            <li class="<?= ($current_page == 'about.php') ? 'active': ''; ?>"><a href="about.php">About US</a></li>
        </ul>
    </nav>
</header>