<?php

class PostController extends Controller
{
      
        private $recent_posts;
        private $critria;
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','search','searchByTag'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
                $model = $this->loadModel($id);
                $model->view_num++;
                if($model->save()){
                    $this->render('view',array(
			'model'=>$model,
		    ));
                }
	}


        public function actionSearch(){  
                if(isset($_POST['keyword'])){
                    $this->critria['keyword']=$_POST['keyword'];
                }
                if(isset($_GET['keyword'])){
                    $this->critria['keyword']=$_GET['keyword'];
                }
                
                $criteria = new CDbCriteria();
                $criteria->addSearchCondition('post_title',  $this->critria['keyword']);
                $criteria->addSearchCondition('tags',  $this->critria['keyword'],true,'OR');
                
                
                 $dataProvider=new CActiveDataProvider('Post',array(
                  'criteria'=>$criteria,
                  'pagination' => array(
                  'pageSize' => 6,

                ),
                'sort'=>array(
                     'defaultOrder' => 'update_time DESC',
                ),
                ));
                 
               
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                      //  'pages'=> $pages,
		));  
        }
        
                public function actionSearchByTag($tag){     
                $criteria = new CDbCriteria();
                $criteria->addSearchCondition('tags',$tag);
                
                
                 $dataProvider=new CActiveDataProvider('Post',array(
                  'criteria'=>$criteria,
                  'pagination' => array(
                  'pageSize' => 6,

                ),
                'sort'=>array(
                     'defaultOrder' => 'update_time DESC',
                ),
                ));
                 
               
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                      //  'pages'=> $pages,
		));  
        }

        

        /**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
                        $model->create_time = $model->update_time = date('Y-m-d H:i:s',time());
                        $model->author_id = Yii::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->post_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->post_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Post',array(
                        'pagination' => array(
                          'pageSize' => 6,
                   
                ),
                'sort'=>array(
                     'defaultOrder' => 'update_time DESC',
                ),
                ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
