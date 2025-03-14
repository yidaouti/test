
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <?php wp_head(); ?> 

</head>

<body class="home">

<div class="promo-banner">
        <div class="social-icons">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
        </div>
        <div class="slider-promobanner">
            <span class="controls" onclick="prevSlide()">&#10094;</span>
            <div class="promo-text" id="promo-text">New customers 10% off with WELCOME</div>
            <span class="controls" onclick="nextSlide()">&#10095;</span>
        </div>
        <div class="options">
            <select>
                <option>English</option>
                <option>Français</option>
                <option>Arabic</option>
            </select>
            <select>
                <option>USD</option>
                <option>EUR</option>
                <option>MAD</option>
            </select>
        </div>
    </div>
    <header class="header transparent">
        <span class="header__hamburger">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 17H20M4 12H20M4 7H20" stroke="#252324" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </span>
        <!-- <nav class="nav">
            <ul class="nav-links">
                <li><a href="<?php site_url('./') ?>">Home</a></li>
                <li><a href="<?php site_url('shop') ?>">Shop</a></li>
                <li class="dropdown">
                    <a href="#" data-name="menu-new-arrivals">
                        <span>New Arrivals</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.66663 1.66666L4.99996 4.99999L8.33329 1.66666" stroke="#252324"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" data-name="menu-collection">
                        <span>Collection</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.66663 1.66666L4.99996 4.99999L8.33329 1.66666" stroke="#252324"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li><a href="<?php site_url('/about') ?>">About</a></li>
            </ul>
        </nav> -->


            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'nav-links nav',
                    'container' => 'nav',
                    'depth' => 3, // Allows dropdowns
                    // 'link_before' => '<span class="dropdown-here">',
                    // 'link_after' => '</span>',
                ));
            ?>

        <div class="logo">
            <a href="./">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="">
            </a>
        </div>

        <div class="icons">
            <a href="#" class="icon search"><i class="bi bi-search"></i></a>
            <a href="/profile" class="icon"><i class="bi bi-person"></i></a>
            <a href="/cart" class="icon cart">
                <i class="bi bi-bag"></i> <span class="cart-badge">2</span>
            </a>
        </div>
        <!-- <div data-name="menu-new-arrivals" class="menu-new-arrivals mega-menu hidden">
            <div class="column">
                <ul class="main-menu">
                    <li><a href="">New Arrivals</a></li>
                    <li><a href="">Top Sellings</a></li>
                    <li><a href="">Trendigs Tops</a></li>
                    <li><a href="">Latest Fashion</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>New Arrivals</h3>
                <ul>
                    <li>
                        <a href=""> Samantha Activewear </a>
                    </li>
                    <li>
                        <a href=""> Noya Slim Dress </a>
                    </li>
                    <li>
                        <a href=""> Shorte with back </a>
                    </li>
                    <li>
                        <a href=""> Jelna Split Dress </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <h3>Top Sellings</h3>
                <ul>
                    <li>
                        <a href=""> Black Co-ord set </a>
                    </li>
                    <li>
                        <a href=""> Denim Jean </a>
                    </li>
                    <li>
                        <a href=""> High rise shorts with top </a>
                    </li>
                    <li>
                        <a href=""> Samantha Activewear </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <h3>Trendigs Tops</h3>
                <ul>
                    <li>
                        <a href=""> Jelna Split Dress </a>
                    </li>
                    <li>
                        <a href=""> Noya Slim Dress </a>
                    </li>
                    <li>
                        <a href=""> Samantha Activewear </a>
                    </li>
                    <li>
                        <a href=""> Twilight Whisper Skirt </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <h3>Latest Fashion</h3>
                <ul>
                    <li>
                        <a href=""> Contact Information </a>
                    </li>
                    <li>
                        <a href=""> Terms of Service </a>
                    </li>
                    <li>
                        <a href=""> Privacy Policy / GDPR </a>
                    </li>
                    <li>
                        <a href=""> Cookie Policy </a>
                    </li>
                </ul>
            </div>
        </div>

        <div data-name="menu-collection" class="menu-collection mega-menu hidden">
            <div class="items">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/image_1.png" alt="TopShop">
                    <a href="#" class="title">TopShop</a>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/image_2.png" alt="Lingerie">
                    <a href="#" class="title">Lingerie</a>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/image_3.png" alt="TopShop">
                    <a href="#" class="title">TopShop</a>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/image_4.png" alt="bottom">
                    <a href="#" class="title">bottom</a>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/image_5.png" alt="Activewear">
                    <a href="#" class="title">Activewear</a>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/image_6.png" alt="Winter">
                    <a href="#" class="title">Winter</a>
                </div>
            </div>
        </div> -->

        <div class="mobile-menu">
            <span class="close-btn">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.3333 1L1 17.3333M1.00002 1L17.3334 17.3333" stroke="#252324" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <p class="clear-float"></p>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
                <li>
                    <a href="#" >
                        <span>New Arrivals</span>
                        <span class="arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10L12 15L17 10" stroke="#252324" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span> 
                    </a>
                    <ul>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Top Sellings</a></li>
                        <li><a href="#">Trendigs Tops</a></li>
                        <li><a href="#">Latest Fashion</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span>Collection</span>
                        <span class="arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10L12 15L17 10" stroke="#252324" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span> 
                    </a>
                    <ul>
                        <li><a href="#">TopShop</a></li>
                        <li><a href="#">Lingerie</a></li>
                        <li><a href="#">TopShop</a></li>
                        <li><a href="#">bottom</a></li>
                        <li><a href="#">Activewear</a></li>
                        <li><a href="#">Winter</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="./about">About</a>
                </li>
            </ul>
        </div>
    </header>