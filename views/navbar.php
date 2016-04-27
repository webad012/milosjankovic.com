<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Miloš Janković</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><?php echo mjtranslation('AboutMe'); ?></a></li>
                <li><a href=""><?php echo mjtranslation('Contact'); ?></a></li>
                <li><a href=""><?php echo mjtranslation('Projects'); ?></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo mjtranslation('Languages'); ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <form method="post" 
                                  action="<?php echo $_SERVER['PHP_SELF'] . '?' . http_build_query($_GET); ?>"
                                  style="margin-bottom: 0px;"
                                >
                                <input type="hidden" name="lang" value="sr">
                                <button class="btn" type="submit" <?php 
                                    if ($_SESSION['lang'] == "sr") 
                                    {
                                        echo " disabled ";
                                        echo 'style="opacity: 0.5;"'; 
                                    }
                                    else if ($_SESSION['lang'] == "en") 
                                    {
//                                        echo 'style="opacity: 0.5;"'; 
                                        echo 'style="opacity: 1;"';
                                    }
                                    ?> >
                                    <img src="img/serbian_flag_icon.png" style="height:20px"/>
                                    <?php echo mjtranslation('Serbian'); ?>
                                </button>
                            </form>
                        </li>
                        <li>
                            <form method="post" 
                                  action="<?php echo $_SERVER['PHP_SELF'] . '?' . http_build_query($_GET); ?>"
                                  style="margin-bottom: 0px;"
                                >
                                <input type="hidden" name="lang" value="en">
                                <button class="btn" type="submit" <?php 
                                    if ($_SESSION['lang'] == "en") 
                                    {
                                        echo " disabled ";
                                        echo 'style="opacity: 0.5;"'; 
                                    }
                                    else if ($_SESSION['lang'] == "sr") 
                                    {
//                                        echo 'style="opacity: 0.5;"'; 
                                        echo 'style="opacity: 1;"'; 
                                    }
                                    ?> >
                                    <img src="img/english_flag_icon.png" style="height:20px"/>
                                    <?php echo mjtranslation('English'); ?>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>