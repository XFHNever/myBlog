<div class="post_field">
    <!--标题和发表时间-->
    <div class="post_field_top">
        <div class="post_field_title">
            <?php echo CHtml::link(CHtml::encode($data->post_title), array('view', 'id'=>$data->post_id)); ?>
        </div>  
        <div class="post_field_time">
            发表于 <b style="color: #0066ff;"> <?php echo CHtml::encode($data->create_time); ?> </b>
        </div>
    </div>
    
    <!--内容摘要-->
    <div class="post_field_content">
        <?php echo strip_tags($data->getPartContent(), '<p><a><div><ul><ol><li><span><img>'); ?>
    </div>
    
    <!--read more-->
    <div class="post_field_more">
        <a href="<?php echo $this->createUrl('post/view', array(
			'id'=>$data->post_id,
		));  ?>">ReadMore→</a>
    </div>
    
    <!-- 评论和更新时间-->
    <div class="post_field_footer">
        <div class="post_field_views">
            <?php echo CHtml::link("Views ({$data->view_num})",$data->getUrl()); ?> &nbsp;| &nbsp;
        </div>
        <div class="post_field_tags">
            <div class="post_field_tag_title">
                Tags:
            </div>
            <div class="post_field_tag">
                <?php $tags = (Tag::string2array($data->tags));
                foreach($tags as $tag){
                    echo CHtml::link("{$tag}".',',Yii::app()->createUrl('post/searchByTag', array(
			'tag_name'=>$tag,
		))); 
                }?>
            </div>
        </div>
        <!--
        <div class="post_field_comment">
            <?php echo CHtml::link("Comments ({$data->commentCount})",$data->getUrl()); ?>
        </div>
        -->
        <div class="post_field_update_time">
            Last Update At <b style="color: #0066ff;"> <?php echo CHtml::encode($data->update_time); ?> </b>
        </div>
    </div>
    
</div>
