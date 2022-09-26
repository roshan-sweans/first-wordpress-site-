<?php

/**
 *First Page navigation menu
 *
 *@package Maestro-by-Roshan
 */
?>

<div class="contain-1">
    <header>

        <?php if (get_field('main_page_header_logo')) : ?>
            <img src="<?php the_field('main_page_header_logo'); ?>" />
        <?php endif; ?>
        <div class="hamburger ">
            <div class="ham ham-1 "></div>
            <div class="ham ham-2"></div>
            <div class="ham ham-3"></div>
        </div>
        <div class="contain">
            <ul class="nav translate-100">
                <li><a href="#">What do I need?</a></li>
                <li><a href="">Training</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
    </header>
</div>