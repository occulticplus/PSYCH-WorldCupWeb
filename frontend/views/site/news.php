<?php

use frontend\components\NewsBarWidget;
use frontend\components\CutBarWidget;

/* @var $this yii\web\View */

$this->title = 'PSYCH-WorldCup';
?>
<div class="site-index">    
    <?= CutBarWidget::widget([
        'date' => date_create("2018-07-25"),
    ]) ?>
    <?php echo NewsBarWidget::widget([
        'title' => '2018世界杯“战报”:亚马逊上哪些国家级明星球员的球衣最热销?',
        'imgUrl'=> '../web/static/news/20180723/cosmic.jpg',
        'brief'=>'国际足联世界杯（FIFA）是世界上最高规格、最高竞技水平、最高知名度的足球
                比赛，共有32支球队参加，进行64场比赛，分别在11个不同的主办城市的12座体育场进行。
                根据国际足联的数据显示，2014年世界杯的收视率创下世界纪录，观看世界杯的观众超过32亿，
                其中，有超过10亿观众观看德国和阿根廷之间的决赛。在美国，观看世界杯的人数一直在增长，
                今年美国有望成为史上观看世界杯人数最多的国家。 ',
    ]) ?> 
    <?= CutBarWidget::widget([
        'date' => date_create("2018-06-25"),
    ]) ?>
    <?php echo NewsBarWidget::widget([
        'title' => 'title',
        'imgUrl'=> '../web/static/news/20180723/cosmic.jpg',
        'brief'=>'a brief',
    ]) ?>
    <?php echo NewsBarWidget::widget([
        'title' => 'title',
        'imgUrl' => '../web/static/news/20180723/cosmic.jpg',
        'brief' => 'a brief',
    ]) ?>
    <!--下面需要一个分页
    https://www.yiichina.com/tutorial/93?sort=desc
    -->

</div>