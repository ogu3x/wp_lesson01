<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?=get_bloginfo( 'name' )?>|コミュニティー</title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
        <!--Import jacc-online.css-->
        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }
            main {
                flex: 1 0 auto;
            }
        </style>
        <!-- Scripts -->
    </head>

    <body>
    <!-- ヘッダー部分をheaderで囲むのはMaterializeの作法 -->
    <header>
        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- Dropdown Structure -->
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                    <a href="<?=home_url()?>" class="brand-logo"><?=get_bloginfo( 'name' )?></a>
                    <a href="#" data-target="wp-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <?wp_nav_menu( ['menu' => 'Menu 1', 'container' => null, 'menu_class'=>'right hide-on-med-and-down'] )?>
                </div>
            </div>
        </nav>
        <?wp_nav_menu( ['menu' => 'Menu 1', 'container' => null, 'menu_class'=>'sidenav', 'menu_id' => 'wp-demo'] )?>
    </header>
