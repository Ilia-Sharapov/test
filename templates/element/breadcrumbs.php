<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <? if(!empty($pageTitle) ||!empty($links) || !empty($current)): ?>
            <div class="col-12">
                <? if(!empty($pageTitle)): ?>
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?=$pageTitle?></h1>
                    </div>
                </div>
                <? endif;?>
                <? if(!empty($links) || !empty($current)): ?>
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <? if(!empty($links)): foreach ($links as $link): ?>
                                <li>
                                    <?=$this->Html->link($link['title'],$link['link'],['class'=>'link'])?>
                                </li>
                            <? endforeach; endif; if(!empty($current)):?>
                                <li class="active"><?=$current?></li>
                            <? endif;?>
                        </ol>
                    </div>
                </div>
                <? endif;?>
            </div>
            <? endif ?>
        </div>
    </div>
</div>