<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="appcontent">
            <?php if($this->pageCaption !== '') : ?>
                            <div class="page-header">
                                    <h1><?php echo CHtml::encode($this->pageCaption); ?> <small><?php echo CHtml::encode($this->pageDescription)?></small></h1>
                            </div>
            <?php endif; ?>
		<div class="row">
			<div class="span8">
				<?php echo $content; ?>
			</div>
			<div class="span4">
                            <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
                            
                                <div class="right_search">
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

                            <div class="right_recent_posts">
                               <div class="right_title">
                                    Recent Posts
                                </div>
                                <div class="right_content">
                                    <?php $recent_posts = Post::model()->getRecentPosts();
                                    foreach($recent_posts as $post){ ?>
                                    <div class="right_post">
                                        <?php echo CHtml::link(CHtml::encode($post->post_title), array('view', 'id'=>$post->post_id)); ?>
                                    </div>
                                   <?php } ?>
                                </div>

                            </div>

                            <div class="right_recent_posts">
                               <div class="right_title">
                                    Hot Posts
                                </div>
                                <div class="right_content">
                                    <?php $hot_posts = Post::model()->getHotPosts();
                                    foreach($hot_posts as $post){ ?>
                                    <div class="right_post">
                                        <?php echo CHtml::link(CHtml::encode($post->post_title), array('view', 'id'=>$post->post_id)); ?>
                                    </div>
                                   <?php } ?>
                                </div>

                            </div>

                            <div class="right_category">
                                 <div class="right_title">
                                     Tag Cloud
                                </div>
                                <div class="right_content">
                                    <?php if($this->beginCache('tagCloud', array('duration'=>3600))) { ?>
                                    <?php $this->widget('TagCloud', array(
                                    'maxTags'=>Yii::app()->params['tagCloudCount'],
                                    )); ?>
                                    <?php $this->endCache(); } ?>
                                </div>

                            </div>
                            <div style="height: 30px;width: 100%;"></div>
                    </div>
                            </div>
                    </div>
</div> <!-- /container -->
<?php $this->endContent(); ?>