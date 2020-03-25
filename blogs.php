<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&family=Share+Tech+Mono&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../res/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php
        define(WP_USE_THEMES, false);
        require('blog/wp-blog-header.php');
    ?>
    <title>BLOG | 362BITS</title>
</head>
<body id="body">
    <header class="sticky">
        <a href="javascript:void(0);" onclick="scrollUp()" style="text-decoration: none;">
        <div id="logo">
            <h1>362</h1>
            <h2>| BITS |</h2>
            <hr id="line1">
            <hr id="line2">
            <hr id="line3">
        </div>
        </a>
        <br class="divider"><br class="divider"><br class="divider">
        <nav>
            <ul>
                <li class="left"><a href="index.html">HOME</a></li>
                <li class="left"><a href="about.html">ABOUT</a></li>
                <li class="left"><a href="store.html">STORE</a></li>
                <li class="left"><a href="games.html">GAMES</a></li>
                <li class="left"><a href="blog.html">BLOGS</a></li>
                <li class="left"><a href="forum.html">FORUM</a></li>
            </ul>
        </nav>
        <br><br><br><br>
        <a href="javascript:void(0);" onclick="scrollDown()" class="iconic"><i class="im im-angle-down"></i></a>
    </header>
    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
            <div class="entry">
                <?php the_content('Read More'); ?>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p><?php esc_html_e('Nothing here :)');?></p>
        <?php endif; ?>
    </div>
    <footer>
        <h1>CONTACT</h1>
        <a href="https://twitter.com/AshifZaman5" class="iconic"><i class="im im-twitter"></i></a>
        <a href="https://facebook.com" class="iconic"><i class="im im-facebook"></i></a>
        <a href="mailto:zero@362bits.com" class="iconic"><i class="im im-mail"></i></a>
    </footer>
</body>
</html>
