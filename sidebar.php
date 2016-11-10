<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 10.11.16
 * Time: 17:19
 */ ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="new-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Блог свинки Пепи</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo get_home_url(); ?>">Головна</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Категорії <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo get_category_link(9); ?>">Всі пости</a></li>
                        <li class="divider"></li>

                        <?php
                        $args = array(
                            'title_li' => ''
                        );
                        wp_list_categories($args); ?>
                    </ul>
                </li>
                <li><a href="#about">Про нас</a></li>
                <li><a href="#contact">Контакти</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
