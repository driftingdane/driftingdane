<section>
    <!-- header -->
    <header class="header header__style-02">
        <div class="container">
            <div class="header__logo"><a href="<?php echo URLROOT; ?>"><img title="Home" src="<?php echo URLROOT; ?>/all_img/img/logo.png" alt="Drifting Dane logo"></a></div>
            <!-- consult-nav -->
            <nav class="consult-nav">
                <!-- consult-menu -->
                <ul class="consult-menu">
                    <?php
                    foreach ($data['menu'] as $menu) : ?>
                        <li class="nav-item current-menu-item">
                            <a class="nav-link" href="<?php echo URLROOT . '/' . $menu->menu_link; ?>"><i class="<?php echo $menu->menu_icon; ?> fa-fw"></i> <?php echo $menu->menu_name; ?></a></li>
                    <?php endforeach; ?>
                   <!-- <li class="menu-item-has-children"><a href="blog.html">blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-detail.html">Blog detail</a>
                            </li>
                        </ul>
                    </li>-->
                </ul><!-- consult-menu -->

                        <div class="navbar-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
            </nav><!-- End / consult-nav -->

        </div>
    </header><!-- End / header -->
</section>

