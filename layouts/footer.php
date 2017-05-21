<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */
?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        联系地址
                    </h5>
					<address>
    					<!--strong>Lingua Chinese Translation</strong><br-->
                        <?php 
                            echo(Yii::$app->setting->get('address'))
                        ?>
                    </address>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">
                        <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                        手机号码
                    </h5>
                    <address>
                        <a href='tel:<?=Yii::$app->setting->get("mobile")?>'><?=Yii::$app->setting->get("mobile")?></a>
                    </address>
				</div>
			</div>
            
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        座机号码
                    </h5>
                    <address>
                        <a href='tel:<?=Yii::$app->setting->get("phone")?>'><?=Yii::$app->setting->get("phone")?></a>
                    </address>
				</div>
			</div>
            
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">
                        <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                        电子邮箱
                    </h5>
                    <address>
                        <a href="mailto:<?=Yii::$app->setting->get('email')?>"><?=Yii::$app->setting->get('email')?></a>
                    </address>
            	</div>
			</div>
		</div>
	</div>
    
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright ">
                        <p class="text-center">
							<span>
                                <?php 
                                    echo(Yii::$app->setting->get('copyright'))
                                ?>
                            </span>
                            <a href="http://chinasoftware.co.uk" target="_blank">
                                <span style="margin-left:20px;font-size:0.9rem;">
                                    中软软件提供技术支持
                                </span>
                            </a>
						</p>
					</div>
				</div>
                
				<!--div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div-->
			</div>
		</div>
	</div>
</footer>

<?php
$google_analysis = Yii::$app->getHtmlBlock('google-analysis');

if($google_analysis != null){
    echo($google_analysis->content);
}
?>