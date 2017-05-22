<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:32 PM
 */
    $banners = Yii::$app->getImageByGroup('banner1');
?>

<section id="banner">
<!-- Slider -->
    <div id="main-slider" class="flexslider">
        <ul class="slides">
          <?php foreach($banners as $item) { ?>
            <li>
              <img src="<?=Yii::$app->urlManager->getHostInfo().'/'.$item->image?>" alt="$item->keywords">
              <div class="flex-caption">
                  <h3><?=$item->keywords?></h3> 
                  <p><?=$item->description?></p> 
              </div>
            </li>
          <?php } ?>
        </ul>
    </div>
<!-- end slider -->
</section> 

<section id="call-to-action-2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-9">
                <h3>
                    <?php 
                        $serivice1= Yii::$app->getTextBlock('home-service-1');
                        if($serivice1 != null)
                        {
                            echo($serivice1->content);
                        }
                    ?>
                </h3>
                <p>
                    <?php 
                        $serivice2= Yii::$app->getTextBlock('home-service-2');
                        if($serivice2 != null)
                        {
                            echo($serivice2->content);
                        }
                    ?>
                </p>
            </div>
            <div class="col-md-2 col-sm-3">
                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id'=>51])?>" class="btn btn-primary">更多阅读</a>
            </div>
        </div>
    </div>
</section>

<section id="content">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter">
                    <h2 class="aligncenter">我们的服务</h2>
                    <?php 
                        $serivice_slogan= Yii::$app->getTextBlock('home-trans-slogan');
                        if($serivice_slogan != null)
                        {
                            echo($serivice_slogan->content);
                        }
                    ?>                    
                </div>
                <br/>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-bell-o"></i>
                <div class="info-blocks-in">
                    <h3>覆盖的语言</h3>
                    <p>
                        <?php 
                            $home_service_language= Yii::$app->getTextBlock('home-service-language');
                            if($home_service_language != null)
                            {
                                echo($home_service_language->content);
                            }
                        ?>                                 
                    </p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>认证翻译</h3>
                    <p>
                        <?php 
                            $home_service_certified_t = Yii::$app->getTextBlock('home-service-certified-t');
                            if($home_service_certified_t != null)
                            {
                                echo($home_service_certified_t->content);
                            }
                        ?>   
                    </p>
                </div>
            </div>
            
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                <div class="info-blocks-in">
                    <h3>文档翻译</h3>
                    <p>
                        <?php 
                            $document_translation = Yii::$app->getTextBlock('home-service-document-t');
                            if($document_translation != null)
                            {
                                echo($document_translation->content);
                            }
                        ?>                           
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-code"></i>
                <div class="info-blocks-in">
                    <h3>校正和编辑</h3>
                    <p>
                        <?php 
                            $proof = Yii::$app->getTextBlock('home-service-proof');
                            if($proof != null)
                            {
                                echo($proof->content);
                            }
                        ?>                            
                    </p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>现场口译</h3>
                    <p>
                        <?php 
                            $Interpretation = Yii::$app->getTextBlock('home-service-interpretation');
                            if($Interpretation != null)
                            {
                                echo($Interpretation->content);
                            }
                        ?>                            
                    </p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-html5"></i>
                <div class="info-blocks-in">
                    <h3>转录服务</h3>
                    <p>
                        <?php 
                            $transcription = Yii::$app->getTextBlock('home-service-transcription');
                            if($transcription != null)
                            {
                                echo($transcription->content);
                            }
                        ?>                             
                    </p>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>免费在线报价</h2>
                    <p>
                        <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/quote'])?>" class="btn btn-primary">现在就询价</a>
                    </p>
                    <h4>
                        我们会尽力争取一个小时之内能答复您
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>	  