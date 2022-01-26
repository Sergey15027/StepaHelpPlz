<!-- content_header -->
<div class="content_header">
    <div class="container col-md-11">
        <h2 class="page_title"><?=Yii::t('front', 'О нас')?></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><?=Yii::t('front', 'Главная')?></a></li>
            <li class="breadcrumb-item"><a href="/graduate"><?=Yii::t('front', 'О нас')?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?=Yii::t('front', 'Совет попечителей')?></li>
        </ol>
    </div>
</div>
<!--content-->
<?php
    echo $this->render('layout');
?>
<div class="container col-md-10 graduates_ssp">
    <h3><?=Yii::t('front', 'Совет попечителей')?></h3>
    <?php
        $i = 0;
        do {
    ?>
        <div class="inline">
            <?php if ($model[$i]) { ?>
            <div>
                <img src="<?=$model[$i]->getUrl()?>">
                <h5><i class="fas fa-graduation-cap"></i>
                    <?php echo Yii::$app->language == 'ru' ? $model[$i]->fullname : (Yii::$app->language == 'kz' ? $model[$i]->fullname_kz : $model[$i]->fullname_en) ?>
                </h5>
                <p class="tema_grey">
                    <?php echo Yii::$app->language == 'ru' ? $model[$i]->description : (Yii::$app->language == 'kz' ? $model[$i]->description_kz : $model[$i]->description_en) ?>
                </p>
            </div>
            <?php } if ($model[$i+1]) { ?>
            <div>
                <img src="<?=$model[$i+1]->getUrl()?>">
                <h5><i class="fas fa-graduation-cap"></i>
                    <?php echo Yii::$app->language == 'ru' ? $model[$i+1]->fullname : (Yii::$app->language == 'kz' ? $model[$i+1]->fullname_kz : $model[$i+1]->fullname_en) ?>
                </h5>
                <p class="tema_grey">
                    <?php echo Yii::$app->language == 'ru' ? $model[$i+1]->description : (Yii::$app->language == 'kz' ? $model[$i+1]->description_kz : $model[$i+1]->description_en) ?>
                </p>
            </div>
            <?php } if ($model[$i+2]) { ?>
            <div>
                <img src="<?=$model[$i+2]->getUrl()?>">
                <h5><i class="fas fa-graduation-cap"></i>
                    <?php echo Yii::$app->language == 'ru' ? $model[$i+2]->fullname : (Yii::$app->language == 'kz' ? $model[$i+2]->fullname_kz : $model[$i+2]->fullname_en) ?>
                </h5>
                <p class="tema_grey">
                    <?php echo Yii::$app->language == 'ru' ? $model[$i+2]->description : (Yii::$app->language == 'kz' ? $model[$i+2]->description_kz : $model[$i+2]->description_en) ?>
                </p>
            </div>
            <?php } if ($model[$i+3]) { ?>
            <div>
                <img src="<?=$model[$i+3]->getUrl()?>">
                <h5><i class="fas fa-graduation-cap"></i>
                    <?php echo Yii::$app->language == 'ru' ? $model[$i+3]->fullname : (Yii::$app->language == 'kz' ? $model[$i+3]->fullname_kz : $model[$i+3]->fullname_en) ?>
                </h5>
                <p class="tema_grey">
                    <?php echo Yii::$app->language == 'ru' ? $model[$i+3]->description : (Yii::$app->language == 'kz' ? $model[$i+3]->description_kz : $model[$i+3]->description_en) ?>
                </p>
            </div>
            <?php } ?>
        </div>
    <?php
            $i = $i + 4;
        } while ($i <= count($model))
    ?>

</div>