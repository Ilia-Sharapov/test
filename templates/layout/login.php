<?
/**
 * @var \App\View\AppView $this
 */
use Cake\Core\Configure;
$title = $title ?? '';
if($title) $title .= ' - ';
$this->assign('title',$title);
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

    <? if(Configure::read('adaptive')): ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? else:?>
        <meta name="viewport" content="width=1200, initial-scale=1.0">
    <? endif;?>
    <title>
        <?=Configure::read('SITE_NAME')?>: <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <?= $this->Html->css(['cs-skin-elastic.css','/js/lib/jquery-ui/jquery-ui.min.css']) ?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <? if(Configure::read('debug')): ?>
        <?= $this->Html->css(['style','main','adaptive']); ?>
    <? else: ?>
        <?= $this->Html->css([
            'style.css?v='.Configure::read('App.version'),
            'main.css?v='.Configure::read('App.version'),
            'adaptive.css?v='.Configure::read('App.version')
        ]);?>
    <? endif;?>

    <?=$this->Html->script('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js')?>

    <script>
        const GLOBALS = {};
    </script>
</head>
<body class="bg-dark">

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</div>

<?=$this->Html->script([
    'https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js',
    'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js',
    'https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js',
    'lib/jquery-ui/jquery-ui.min.js','lib/jquery.inputmask.min.js',])?>
<? if(Configure::read('debug')): ?>
    <?=$this->Html->script(['main','application','pages'])?>
<? else: ?>
    <?=$this->Html->script([
        'main.js?v='.Configure::read('App.version'),
        'application.js?v='.Configure::read('App.version'),
        'pages.js?v='.Configure::read('App.version')
    ])?>
<? endif;?>
<?= $this->fetch('script') ?>
</body>
</html>
