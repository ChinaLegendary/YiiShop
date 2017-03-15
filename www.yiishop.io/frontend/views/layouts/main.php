<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type='text/javascript' src="/statics/js/jquery-1.11.1.min.js"></script>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script type="text/javascript" src="/statics/js/megamenu.js"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script src="/statics/js/menu_jquery.js"></script>
        <script src="/statics/js/simpleCart.min.js"> </script>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="top_bg">
            <?php
            NavBar::begin([
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                ],
            ]);
            $menuItems = [
                ['label' => "<i class='fa fa-phone'>&nbsp;</i>&nbsp;" . Yii::t("common", "phone")],
            ];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                "encodeLabels" => false,
                'items' => $menuItems,
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-left'],
                "encodeLabels" => false,
                'items' => [
                    [
                        'label' => Yii::t('common', 'Language'),
                        'dropDownOptions' => ['id' => 'drow-language', 'style' => 'min-width:90px;'],
                        'items' => [
                            ['label' => Yii::t('common', 'zh_CN'), 'url' => ['/order/language', 'language' => 'zh-CN']],
                            ['label' => Yii::t('common', 'English'), 'url' => ['/order/language', 'language' => 'en']],
                        ],
                    ],
                    ['label' => Yii::t('common', 'help'), 'url' => ['/gretong/help']],
                    ['label' => Yii::t('common', 'contact'), 'url' => ['/gretong/contact']],
                    ['label' => Yii::t('common', 'delive'), 'url' => ['/gretong/delivery']],
                ]
            ]);
            NavBar::end();
            ?>
        </div>
            <!-- header -->
            <div class="header_bg">
                <div class="container">
                    <div class="header">
                        <div class="head-t">
                            <div class="logo">
                                <a href="index.html"><img src="/statics/images/logo.png" class="img-responsive" alt=""/> </a>
                            </div>
                            <!-- start header_right -->
                            <div class="header_right">
                                <div class="rgt-bottom">
                                    <div class="log">
                                        <div class="login" >
                                            <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                                                <div id="loginBox">                
                                                    <form id="loginForm">
                                                        <fieldset id="body">
                                                            <fieldset>
                                                                <label for="email">Email Address</label>
                                                                <input type="text" name="email" id="email">
                                                            </fieldset>
                                                            <fieldset>
                                                                <label for="password">Password</label>
                                                                <input type="password" name="password" id="password">
                                                            </fieldset>
                                                            <input type="submit" id="login" value="Sign in">
                                                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                                        </fieldset>
                                                        <span><a href="#">Forgot your password?</a></span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reg">
                                        <a href="register.html">REGISTER</a>
                                    </div>
                                    <div class="cart box_1">
                                        <a href="checkout.html">
                                            <h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
                                        </a>	
                                        <p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="create_btn">
                                        <a href="checkout.html">CHECKOUT</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="search">
                                    <form>
                                        <input type="text" value="" placeholder="search...">
                                        <input type="submit" value="">
                                    </form>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
                        <!-- start header menu -->
                        <ul class="megamenu skyblue">
                            <li class="active grid"><a class="color1" href="index.html">Home</a></li>
                            <li class="grid"><a class="color2" href="#">new arrivals</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Clothing</h4>
                                                <ul>
                                                    <li><a href="<?php echo Url::toRoute("Gretong/woman"); ?>">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>kids</h4>
                                                <ul>
                                                    <li><a href="women.html">Pools&Tees</a></li>
                                                    <li><a href="women.html">shirts</a></li>
                                                    <li><a href="women.html">shorts</a></li>
                                                    <li><a href="women.html">twinsets</a></li>
                                                    <li><a href="women.html">kurts</a></li>
                                                    <li><a href="women.html">jackets</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bags</h4>
                                                <ul>
                                                    <li><a href="women.html">Handbag</a></li>
                                                    <li><a href="women.html">Slingbags</a></li>
                                                    <li><a href="women.html">Clutches</a></li>
                                                    <li><a href="women.html">Totes</a></li>
                                                    <li><a href="women.html">Wallets</a></li>
                                                    <li><a href="women.html">Laptopbags</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>account</h4>
                                                <ul>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="register.html">create an account</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                    <li><a href="women.html">my shopping bag</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Accessories</h4>
                                                <ul>
                                                    <li><a href="women.html">Belts</a></li>
                                                    <li><a href="women.html">Pens</a></li>
                                                    <li><a href="women.html">Eyeglasses</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">Watches</a></li>
                                                    <li><a href="women.html">Jewellery</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col2"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="color4" href="">TUXEDO</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Clothing</h4>
                                                <ul>
                                                    <li><a href="<?php echo Url::toRoute("Gretong/woman"); ?>">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>kids</h4>
                                                <ul>
                                                    <li><a href="women.html">Pools&Tees</a></li>
                                                    <li><a href="women.html">shirts</a></li>
                                                    <li><a href="women.html">shorts</a></li>
                                                    <li><a href="women.html">twinsets</a></li>
                                                    <li><a href="women.html">kurts</a></li>
                                                    <li><a href="women.html">jackets</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bags</h4>
                                                <ul>
                                                    <li><a href="women.html">Handbag</a></li>
                                                    <li><a href="women.html">Slingbags</a></li>
                                                    <li><a href="women.html">Clutches</a></li>
                                                    <li><a href="women.html">Totes</a></li>
                                                    <li><a href="women.html">Wallets</a></li>
                                                    <li><a href="women.html">Laptopbags</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>account</h4>
                                                <ul>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="register.html">create an account</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                    <li><a href="women.html">my shopping bag</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Accessories</h4>
                                                <ul>
                                                    <li><a href="women.html">Belts</a></li>
                                                    <li><a href="women.html">Pens</a></li>
                                                    <li><a href="women.html">Eyeglasses</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">Watches</a></li>
                                                    <li><a href="women.html">Jewellery</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col2"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                    </div>
                                </div>
                            </li>				
                            <li><a class="color5" href="#">SWEATER</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Clothing</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>kids</h4>
                                                <ul>
                                                    <li><a href="women.html">Pools&Tees</a></li>
                                                    <li><a href="women.html">shirts</a></li>
                                                    <li><a href="women.html">shorts</a></li>
                                                    <li><a href="women.html">twinsets</a></li>
                                                    <li><a href="women.html">kurts</a></li>
                                                    <li><a href="women.html">jackets</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bags</h4>
                                                <ul>
                                                    <li><a href="women.html">Handbag</a></li>
                                                    <li><a href="women.html">Slingbags</a></li>
                                                    <li><a href="women.html">Clutches</a></li>
                                                    <li><a href="women.html">Totes</a></li>
                                                    <li><a href="women.html">Wallets</a></li>
                                                    <li><a href="women.html">Laptopbags</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>account</h4>
                                                <ul>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="register.html">create an account</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                    <li><a href="women.html">my shopping bag</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Accessories</h4>
                                                <ul>
                                                    <li><a href="women.html">Belts</a></li>
                                                    <li><a href="women.html">Pens</a></li>
                                                    <li><a href="women.html">Eyeglasses</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">Watches</a></li>
                                                    <li><a href="women.html">Jewellery</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col2"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="color6" href="#">SHOES</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Clothing</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>kids</h4>
                                                <ul>
                                                    <li><a href="women.html">Pools&Tees</a></li>
                                                    <li><a href="women.html">shirts</a></li>
                                                    <li><a href="women.html">shorts</a></li>
                                                    <li><a href="women.html">twinsets</a></li>
                                                    <li><a href="women.html">kurts</a></li>
                                                    <li><a href="women.html">jackets</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bags</h4>
                                                <ul>
                                                    <li><a href="women.html">Handbag</a></li>
                                                    <li><a href="women.html">Slingbags</a></li>
                                                    <li><a href="women.html">Clutches</a></li>
                                                    <li><a href="women.html">Totes</a></li>
                                                    <li><a href="women.html">Wallets</a></li>
                                                    <li><a href="women.html">Laptopbags</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>account</h4>
                                                <ul>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="register.html">create an account</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                    <li><a href="women.html">my shopping bag</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Accessories</h4>
                                                <ul>
                                                    <li><a href="women.html">Belts</a></li>
                                                    <li><a href="women.html">Pens</a></li>
                                                    <li><a href="women.html">Eyeglasses</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">Watches</a></li>
                                                    <li><a href="women.html">Jewellery</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col2"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                    </div>
                                </div>
                            </li>				

                            <li><a class="color7" href="#">GLASSES</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Clothing</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>kids</h4>
                                                <ul>
                                                    <li><a href="women.html">Pools&Tees</a></li>
                                                    <li><a href="women.html">shirts</a></li>
                                                    <li><a href="women.html">shorts</a></li>
                                                    <li><a href="women.html">twinsets</a></li>
                                                    <li><a href="women.html">kurts</a></li>
                                                    <li><a href="women.html">jackets</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bags</h4>
                                                <ul>
                                                    <li><a href="women.html">Handbag</a></li>
                                                    <li><a href="women.html">Slingbags</a></li>
                                                    <li><a href="women.html">Clutches</a></li>
                                                    <li><a href="women.html">Totes</a></li>
                                                    <li><a href="women.html">Wallets</a></li>
                                                    <li><a href="women.html">Laptopbags</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>account</h4>
                                                <ul>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="register.html">create an account</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                    <li><a href="women.html">my shopping bag</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Accessories</h4>
                                                <ul>
                                                    <li><a href="women.html">Belts</a></li>
                                                    <li><a href="women.html">Pens</a></li>
                                                    <li><a href="women.html">Eyeglasses</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">Watches</a></li>
                                                    <li><a href="women.html">Jewellery</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col2"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                    </div>
                                </div>
                            </li>				

                            <li><a class="color8" href="#">T-SHIRT</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Clothing</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>kids</h4>
                                                <ul>
                                                    <li><a href="women.html">trends</a></li>
                                                    <li><a href="women.html">sale</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bags</h4>
                                                <ul>
                                                    <li><a href="women.html">trends</a></li>
                                                    <li><a href="women.html">sale</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>account</h4>
                                                <ul>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="register.html">create an account</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                    <li><a href="women.html">my shopping bag</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Accessories</h4>
                                                <ul>
                                                    <li><a href="women.html">trends</a></li>
                                                    <li><a href="women.html">sale</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col2"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="color9" href="#">WATCHES</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Clothing</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>kids</h4>
                                                <ul>
                                                    <li><a href="women.html">trends</a></li>
                                                    <li><a href="women.html">sale</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bags</h4>
                                                <ul>
                                                    <li><a href="women.html">trends</a></li>
                                                    <li><a href="women.html">sale</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>account</h4>
                                                <ul>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="register.html">create an account</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                    <li><a href="women.html">my shopping bag</a></li>
                                                    <li><a href="women.html">brands</a></li>
                                                    <li><a href="women.html">create wishlist</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Accessories</h4>
                                                <ul>
                                                    <li><a href="women.html">trends</a></li>
                                                    <li><a href="women.html">sale</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="women.html">new arrivals</a></li>
                                                    <li><a href="women.html">men</a></li>
                                                    <li><a href="women.html">women</a></li>
                                                    <li><a href="women.html">accessories</a></li>
                                                    <li><a href="women.html">kids</a></li>
                                                    <li><a href="women.html">style videos</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col2"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                        <div class="col1"></div>
                                    </div>
                                </div>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        <div class="foot-top">
            <div class="container">
                <div class="col-md-6 s-c">
                    <li>
                        <div class="fooll">
                            <h5>follow us on</h5>
                        </div>
                    </li>
                    <li>
                        <div class="social-ic">
                            <ul>
                                <li><a href="#"><i class="facebok"> </i></a></li>
                                <li><a href="#"><i class="twiter"> </i></a></li>
                                <li><a href="#"><i class="goog"> </i></a></li>
                                <li><a href="#"><i class="be"> </i></a></li>
                                <li><a href="#"><i class="pp"> </i></a></li>
                                <div class="clearfix"></div>	
                            </ul>
                        </div>
                    </li>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 s-c">
                    <div class="stay">
                        <div class="stay-left">
                            <form>
                                <input type="text" placeholder="Enter your email to join our newsletter" required="">
                            </form>
                        </div>
                        <div class="btn-1">
                            <form>
                                <input type="submit" value="join">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer" style="background: #fff !important;">
            <div class="container">
                <div class="col-md-3 cust">
                    <h4>CUSTOMER CARE</h4>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="buy.html">How To Buy</a></li>
                    <li><a href="#">Delivery</a></li>
                </div>
                <div class="col-md-2 abt">
                    <h4>ABOUT US</h4>
                    <li><a href="#">Our Stories</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </div>
                <div class="col-md-2 myac">
                    <h4>MY ACCOUNT</h4>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="#">My Cart</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="buy.html">Payment</a></li>
                </div>
                <div class="col-md-5 our-st">
                    <div class="our-left">
                        <h4>OUR STORES</h4>
                    </div>
                    <div class="our-left1">
                        <div class="cr_btn">
                            <a href="#">SOLO</a>
                        </div>
                    </div>
                    <div class="our-left1">
                        <div class="cr_btn1">
                            <a href="#">BOGOR</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
                    <li><i class="phone"> </i>025-2839341</li>
                    <li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
