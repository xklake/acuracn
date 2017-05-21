<?php
use yii\helpers\Html;

$service = [
    'Certified Translation'=>'认证翻译', 
    'Document Translation' => '文档翻译',
    'Transcription' => '转录 ', 
    'Proofreading and Editing' => '校对编辑', 
    'Interpretation' => '口译'];

$this->title = '免费在线报价';
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:18 PM
 */
?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">免费在线报价</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div>
                    <?php  
                        $quote_intro = Yii::$app->getTextBlock( 'quote-intro');
                        if($quote_intro != null)
                        {
                            echo($quote_intro->content);
                        }
                    ?>
                </div>
                
                <?php 
                    $quote_desc = Yii::$app->getTextBlock('quote_desc');
                    if($quote_desc != null){
                ?>
                    <br/>
                    <div>
                        <?=$quote_desc->content?>
                    </div>
                    <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php $form = yii\widgets\ActiveForm::begin(['id' => 'quote-form', 'options' => ['enctype'=>'multipart/form-data']]); ?>
                    <h3>报价表单</h3>
                    <div class="form-group">
                        姓名<?= Html::activeTextInput($model, 'name', ['class' => 'form-control', 'placeholder' => ""]) ?>
                    </div>
                    <br/>
                    <div class="form-group">
                        电话
                        <?= Html::activeTextInput($model, 'phone', ['class' => 'form-control', 'placeholder' => ""]) ?>
                    </div>
                    
                    <br/>
                    <div class="form-group">
                        电邮
                        <?= Html::activeTextInput($model, 'email', ['class' => 'form-control', 'placeholder' => ""]) ?>
                    </div>
                    <br/>
               
                    <div class="form-group">
                        源语言
                        <?= Html::activeTextInput($model, 'from', ['class' => 'form-control', 'placeholder' => ""]) ?>
                    </div>
                    <br/>
                    
                    <div class="form-group">
                        目标语言
                        <?= Html::activeTextInput($model, 'to', ['class' => 'form-control', 'placeholder' => ""]) ?>
                    </div>
                    <br/>
                    
                    <div class="form-group">
                        服务
                        <?= Html::activeDropDownList($model, 'service', $service, ['class' => 'form-control', 'placeholder' => ""]) ?>
                    </div>
                    <br/>
                    
                    <div class="form-group">
                        交 期(YYYY-MM-DD)
                        <?= Html::activeTextInput($model, 'deliverydate', ['class' => 'form-control', 'placeholder' => ""]) ?>
                    </div>
                    <br/>

                    <div class="form-group">
                        文件 (上传你要翻译的文件,可以是WORD文档，可以是压缩文件)
                        <?= Html::activeFileInput($model, 'attachment', ['class' => 'form-control']) ?>
                    </div>
                    <br/>

                    <div class="form-group">
                        详细描述
                        <?= Html::activeTextarea($model, 'body', ['class' => 'form-control', 'placeholder' => "", 'rows'=>5]) ?>
                    </div>
                    <br/>

                    <div class="form-group" style="color:#F00">
                        <em>
                            <?= Yii::$app->session->getFlash('success') ?>
                        </em>
                    </div>
                    
                    <div class="form-group">
                        <?= Html::submitButton( Yii::t('app', '提交'), ['class' => 'btn btn-primary', 'name' => 'quote-button']) ?>
                    </div>
                <?php yii\widgets\ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
