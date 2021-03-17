<?php
/**
 * @var \App\View\AppView $this
 */

$primaryMenu = $this->Menu->primary();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Test
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <?= $this->Html->css(['cs-skin-elastic.css','/js/lib/jquery-ui/jquery-ui.min.css']) ?>

    <script>
        const csrfToken = '<?=$this->getRequest()->getAttribute('csrfToken')?>';
        const GLOBALS = Object.create(null);
    </script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->css(['style','main','adaptive']); ?>
    <?=$this->Html->script('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js')?>


</head>
<body class="open <? if(!$primaryMenu) echo 'no-menu'; ?>">
    <div class="loader">
        <img src="/img/loader.gif">
    </div>
    <? if($primaryMenu): ?>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <? foreach ($primaryMenu as $menuItem):
                        $menuItemController = $menuItem['url']['controller'] ?? $menuItem['controller'];
                        ?>
                    <li class="<? if($menuItemController == $this->getRequest()->getParam('controller')) echo 'active'; ?>">
                        <a href="<?=$this->Url->build($menuItem['url'])?>">
                            <i class="menu-icon fa <?=$menuItem['icon-class']?>"></i>
                            <?=$menuItem['title']?>
                        </a>
                    </li>
                    <? endforeach;?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <? endif;?>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand d-none d-lg-inline-block"><i class="fa fa-home"></i></a>
                    <? if($primaryMenu): ?>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    <? endif;?>
                    <div class="header-menu d-md-none">
                        <div class="header-left">

                        </div>

                        <div class="user-area dropdown float-right">
                            <? if($_user->id != 0): ?>
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    <div class="username">
                                        <span class="name"><?=$_user->user_name?></span>
                                        <span class="caret"></span>
                                    </div>
                                </a>

                                <div class="user-menu dropdown-menu">
                                    <li>
                                        <hr style="margin: 10px 0;">
                                    </li>
                                    <a class="nav-link" href="<?=$this->Url->build('/users/logout')?>"><i class="fa fa-power-off"></i>Logout</a>
                                </div>
                            <? else:?>
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    <span class="name">Guest</span>
                                </a>

                                <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="<?=$this->Url->build('/users/login')?>"><i class="fa fa-sign-in"></i>Log in</a>
                                </div>
                            <? endif;?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                    </div>

                    <div class="user-area dropdown float-right">
                        <? if($_user->id != 0): ?>
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            <div class="username">
                                <span class="name"><?=$_user->user_name?></span>
                                <span class="caret"></span>
                            </div>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <li>
                                <hr style="margin: 10px 0;">
                            </li>
                            <a class="nav-link" href="<?=$this->Url->build('/users/logout')?>"><i class="fa fa-power-off"></i>Log out</a>
                        </div>
                        <? else:?>
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <span class="name">Guest</span>
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?=$this->Url->build('/users/login')?>"><i class="fa fa-sign-in"></i>Log in</a>
                            </div>
                        <? endif;?>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->

        <div class="content" id="content">
            <div class="animated fadeIn">
                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-6">
                        2021 - <?=date('Y')?> ©
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /.right-panel -->

    <?=$this->Html->script([
        'https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js',
        'https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js',
        'lib/jquery-ui/jquery-ui.min.js','lib/jquery.inputmask.min.js','jquery.ui.touch-punch.min.js',
    ])?>
    <?=$this->Html->script(['main'])?>
    <?= $this->fetch('script') ?>
    <?= $this->fetch('postLink') ?>
</body>
</html>
