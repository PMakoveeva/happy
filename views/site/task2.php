<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 05.10.2018
 * Time: 21:01
 */

use yii\bootstrap\Html;
$this->title = 'Happy';
use yii\widgets\ActiveForm;

?>
<div class="site-index">
    <?php if(Yii::$app->session->hasFlash('success')):?>

        <?= Html::a('Next', ['task2'], ['class' => 'btn btn-success'])?>
    <?php endif;?>
    <?php if(Yii::$app->session->hasFlash('error')):?>
    <?php endif;?>
    <div class="jumbotron">
        <h1>Праздник, не какой-то, а твой!</h1>
        
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <a href="http://qrcoder.ru" target="_blank"><img src="http://qrcoder.ru/code/?%D1+%E4%ED%E5%EC+%F3%F7%E8%F2%E5%EB%FF%21+%D2%E2%EE%E8+%F3%F0%EE%EA%E8+%E1%FB%EB%E8+%F1%E0%EC%FB%EC%E8+%EB%F3%F7%F8%E8%EC%E8%29%29%DF+%EE%F7%E5%ED%FC+%F0%E0%E4%E0+%F7%F2%EE+%F3%F7%E8%EB%E0%F1%FC+%F3+%F2%E5%E1%FF%21&6&0" width="342" height="342" border="0" title="QR код"></a>
            </div>
            <div class="col-lg-12">
                Пусть здесь было слишком простое задание, но дело то, не в этом!
                С Днем учителя!!!
            </div>
            <div class="col-lg-12">
                <?= Html::a('Next', ['task3'], ['class' => 'btn btn-success'])?>
            </div>

        </div>
    </div>
</div>
