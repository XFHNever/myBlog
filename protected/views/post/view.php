<?php
$this->pageCaption='Post Detail';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->post_id,
);

$this->menu=array(
	array('label'=>'List Posts', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->post_id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->post_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posts', 'url'=>array('admin')),
);
?>

<div class="post_field">
    <!--标题和发表时间-->
    <div class="post_field_top">
        <div class="post_field_title">
            <?php echo CHtml::encode($model->post_title); ?>
        </div>  
        <div class="post_field_time">
            发表于 <b style="color: #0066ff;"> <?php echo CHtml::encode($model->create_time); ?> </b>
        </div>
    </div>
    
    <!--内容摘要-->
    <div class="post_field_content">
        <?php echo strip_tags($model->post_content, '<p><a><div><ul><ol><li><span><img>'); ?>
    </div>
    

    
    <!-- 评论和更新时间-->
    <div class="post_field_footer">
        <div class="post_field_views">
            <?php echo CHtml::link("Views ({$model->view_num})",$model->getUrl()); ?> &nbsp;|&nbsp;
        </div>
         <div class="post_field_tags">
            <div class="post_field_tag_title">
                Tags:
            </div>
            <div class="post_field_tag">
                <?php $tags = (Tag::string2array($model->tags));
                foreach($tags as $tag){
                    echo CHtml::link("{$tag}".',',Yii::app()->createUrl('post/searchByTag', array(
			'tag'=>$tag,
		))); 
                }?>
            </div>
        </div>
        <div class="post_field_update_time">
            Last Update At <b style="color: #0066ff;"> <?php echo CHtml::encode($model->update_time); ?> </b>
        </div>
    </div>  
    
        <div class="post_share">
        <!-- JiaThis Button BEGIN -->
        <div class="jiathis_style">
                <span class="jiathis_txt">分享到：</span>
                <a class="jiathis_button_qzone">QQ空间</a>
                <a class="jiathis_button_tsina">新浪微博</a>
                <a class="jiathis_button_tqq">腾讯微博</a>
                <a class="jiathis_button_weixin">微信</a>
                <a href="http://www.jiathis.com/share?uid=1878114" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
                <a class="jiathis_counter_style"></a>
        </div>
        <script type="text/javascript">
        var jiathis_config = {data_track_clickback:'true'};
        </script>
        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1377233958308597" charset="utf-8"></script>
        <!-- JiaThis Button END -->
    </div>
</div>

<div class="comment_field">
    <!-- UY BEGIN -->
    <div id="uyan_frame"></div>
    <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1878114"></script>
    <!-- UY END -->
</div>
