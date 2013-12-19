<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $post_id
 * @property string $post_title
 * @property string $post_content
 * @property string $tags
 * @property integer $status
 * @property string $create_time
 * @property string $update_time
 * @property integer $author_id
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property User $author
 */
class Post extends CActiveRecord
{
        private $_oldTags;
        private $recent_posts;  
        private $hot_posts;  
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('post_title, post_content, status, author_id', 'required'),
			array('status, author_id', 'numerical', 'integerOnly'=>true),
			array('post_title', 'length', 'max'=>128),
			array('tags, create_time, update_time', 'safe'),
                        array('tags','match','pattern'=>'/^[\w\s,]+$/',
                        'message'=>'Tags can only contain word characters.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('post_id, post_title, post_content, tags, status, create_time, update_time, author_id', 'safe', 'on'=>'search'),
		);
	}

        public function normalizeTags($attribute,$params){
            $this->tags=Tag::array2string(array_unique(Tag::string2array($this->tags)));
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'comments' => array(self::HAS_MANY, 'Comment', 'post_id'),
			'author' => array(self::BELONGS_TO, 'User', 'author_id'),
                        'commentCount' => array(self::STAT,'Comment','post_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'post_id' => 'Post',
			'post_title' => 'Post Title',
			'post_content' => 'Post Content',
			'tags' => 'Tags',
			'status' => 'Status',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'author_id' => 'Author',
		);
	}
        
                protected function afterSave()
        {
            parent::afterSave();
            Tag::model()->updateFrequency($this->_oldTags, $this->tags);
        }
        
        
       
        protected function afterFind()
        {
            parent::afterFind();
            $this->_oldTags=$this->tags;
        }
        
        public function getRecentPosts(){
            $criteria = new CDbCriteria();
            $criteria->limit = 5;
            $criteria->order = 'create_time DESC' ;//排序条件        
            $this->recent_posts = Post::model()->findAll($criteria);
            return $this->recent_posts;
        }
        
        public function getHotPosts(){
            $criteria = new CDbCriteria();
            $criteria->limit = 5;
            $criteria->order = 'view_num DESC' ;//排序条件        
            $this->hot_posts = Post::model()->findAll($criteria);
            return $this->hot_posts;
        }

        public function getUrl()
	{
		return Yii::app()->createUrl('post/view', array(
			'id'=>$this->post_id,
		));
	}


        public function getPartContent(){
            return substr($this->post_content, 0, 200);
        }


        /**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('post_title',$this->post_title,true);
		$criteria->compare('post_content',$this->post_content,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('author_id',$this->author_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
