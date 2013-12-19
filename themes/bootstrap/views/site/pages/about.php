<?php
$this->pageCaption='AboutMe';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Here\'s what this blogger is all about';
$this->breadcrumbs=array(
	'About',
);
?>
<div style="width: 600px; text-align: center;margin: 0 auto; background: #cccccc;">
    <div class="about_me_image">
        <img class="image" src="images/icon.jpg"/>
        <p>Never</p>
    </div>
    <div class="about_me">
        <p style="border-bottom: 1px solid bisque;">大家好！我是一名软件专业的学生，希望通过技术改变生活。<br>
            本blog是我使用yii-bootstrap搭建而成，希望以后能在上面<br>
            分享我技术学习的点点滴滴！<br>
        </p>
        <br ><br>
        <h2>联系我：</h2>
        <div style="margin-left: 30px;margin-top: 10px;">
            邮箱：xfhnever@gmail.com;<br>
            微博：<a href="http://weibo.com/xfhlz920805">我只是想换个昵称换个心情</a><br>
            人人：<a href="http://www.renren.com/294297966/profile">谢福恒</a><br>
        </div>
        <div style="border-bottom: 1px solid bisque;"></div>
        <br><br>
        <p style="font-size: 15px; margin-top: 20px;">
            爱技术<br>
            &nbsp;&nbsp;&nbsp;&nbsp;爱编程<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;爱家人<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;爱朋友<br>
            &nbsp;&nbsp;&nbsp;&nbsp;爱&nbsp;&nbsp;ZT<br>
            爱生活<br>
        </p>

    </div>


    <div style="width: 90%; border-top: 1px solid bisque; margin-top: 100px;text-align: left;">
        <h2>留言板：</h2>
        <div class="comment_field">
        <!-- UY BEGIN -->
        <div id="uyan_frame"></div>
        <script type="text/javascript" id="UYScript" src="http://v2.uyan.cc/code/uyan.js?uid=1878114" async=""></script>
        <!-- UY END -->
        </div>
    </div>
    
</div>


