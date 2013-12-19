<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog.css" />
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background: black;">     
    
     <div id="cont">  
        <div id="head">
            <div class="top_image">
                <?php $this->widget('bootstrap.widgets.TbCarousel', array(
                    'items'=>array(
                        array('image'=>'images/t.jpg', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                        array('image'=>'images/t1.gif', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                        array('image'=>'images/t.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
                    ),
                   
                )); ?>
            </div>
            <div class="nav">
                <div class="nav_bar">
                    <?php $this->widget('bootstrap.widgets.TBMenu',array(
                            'type'=>'pills',
                            'scrollspy'=>'true',
                            'items'=>array(
                                    array('label'=>'Home', 'url'=>array('/post/index')),
                                    array('label'=>'AboutMe', 'url'=>array('/site/page', 'view'=>'about')),
                            ),
                            'htmlOptions'=>array(
                                //    'class'=>'nav',
                                    'style'=>'font-size: 20px; font-weight:bold;vertical-align: middle;',
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
</body>
</html>
