<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta name="uyan_auth" content="3c071d6d31" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog.css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
<!--	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/application.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">  -->
        
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114x114.png">
        
</head>
 


<body style="background: black;"> 
    <div id="top_nav">
        <div class="project_title">Never's Blog</div>
        <div class="project_nav">
             Coding change the world
        </div>
        <div class="project_search">
            <?php  echo CHtml::beginForm($this->createUrl('post/search'), "post",array('id'=>'contentsearch')) ?>   
                <div id="searchForm" style="width: 200px;float: left;">
                   <?php 
                       echo CHtml::textField("keyword","Search...", array(
                           'name'=>'keyword',
                           'style'=>"color: #999;height:90%;width:95%;",
                           'onclick'=>"this.value=''",
                           'onkeydown'=>"this.style.color = '#000000'"
                           ));

                   ?>
                </div>  
                <button class="btn btn-info"  style="margin-left: 5px;" onclick="">Search</button>
            <?php  echo CHtml::endForm(); ?> 
        </div>
    </div>
    
     <div id="cont">  
        <div id="head">  
            <div class="top_image">
                <?php $this->widget('bootstrap.widgets.TbCarousel', array(
                    'items'=>array(
                        array('image'=>'images/t.jpg', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                        array('image'=>'images/t.jpg', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                        array('image'=>'images/t.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                    ),
                   
                )); ?>
            </div>
            <div class="nav">
                <div class="nav_bar" >
                    <?php $this->widget('bootstrap.widgets.TBMenu',array(
                            'type'=>'pills',
                            'scrollspy'=>'true',
                            'items'=>array(
                                    array('label'=>'Home', 'url'=>array('/post/index')),
                                    array('label'=>'AboutMe', 'url'=>array('/site/page', 'view'=>'about')),
                                    array('label'=>'Login', 'url'=>array('/site/login', 'view'=>'login')),
                            ),
                            'htmlOptions'=>array(
                                    //'class'=>'nav',
                                    'style'=>'font-size: 20px; font-weight:bold;vertical-align: middle;',
                            ),
                    )); ?>             
                </div>
                <div style="float: right;margin-top: -40px;">
                          <?php $this->widget('bootstrap.widgets.TBMenu',array(
                            'type'=>'pills',
                            'scrollspy'=>'true',
                            'items'=>array(
                                    array('label'=>Yii::app()->user->name, 'url'=>array('site/profile'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn'))
                            ),
                            'htmlOptions'=>array(
                                    'style'=>'font-size: 20px; font-weight:bold;vertical-align: middle;float:right;',
                                    'class'=>'nav pull-right',
                            ),
                    )); ?>
                </div>
            </div>
        </div>
        
        <div id="center">
            <?php echo $content; ?>
        </div>
    </div>

    
    <div id="foot">
        <p>Copyright &copy; <?php echo date('Y'); ?> by Never.<br/>
        All Rights Reserved.<br/>
        Powered by Never</p>
    </div>
<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?uid=1377233958308597" charset="utf-8"></script>
<!-- JiaThis Button END -->
<!-- UJian Button BEGIN -->
	<script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js?type=slide"></script>
<!-- UJian Button END -->
</body>
</html>
