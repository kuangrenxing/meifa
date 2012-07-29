<?php

class HairstylistController extends Controller
{
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
				'actions'=>array('index','view','test'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$category=array();
		//产品种类
		$hairstylist = Hairstylist::model()->findAll();
		foreach($hairstylist as $v)
		{
			$category[]=$v['category'];
		}		
		
		$model=$this->loadModel($id);
		$this->pageTitle=$model['name'];
		
		$this->render('view',array(
			'model'=>$model,
			'category'=>array_unique($category),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Hairstylist;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Hairstylist']))
		{
			$model->attributes=$_POST['Hairstylist'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	public function actionTest()
	{
		$model=new Hairstylist;
		
		if(isset($_POST['Hairstylist']))
		{
			$avatar=CUploadedFile::getInstance($model,'avatar');	
			$picture=CUploadedFile::getInstance($model,'picture');
// 			print_r($avatar);
// 			print_r(iconv('utf-8','gb2312',$avatar->name));
// 			print_r($avatar->ExtensionName);
			
			
			if (is_object($avatar) && get_class($avatar)==='CUploadedFile' && is_object($picture) && get_class($picture)==='CUploadedFile' )
			{
				$model->avatar=$avatar->name;  //请根据自己的需求生成相应的路径，但是要记得和下面保存路径保持一致
				$model->picture=$picture->name;
				
			}
			else
			{
				//echo "dd错误";exit;
			}
			if($model->save())
			{
				if (is_object($avatar) && get_class($avatar)==='CUploadedFile' && is_object($picture) && get_class($picture)==='CUploadedFile' )
				{
					if(!is_dir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['avatar']))
					{						
						mkdir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['avatar'],'0777');
					}
					if(!is_dir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['picture']))
					{
						mkdir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['picture'],'0777');
					}
					$avatar->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['avatar'].DIRECTORY_SEPARATOR.$avatar->name);//路径必须真实存在，并且如果是linux系统，必须有修改权限
					$picture->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['picture'].DIRECTORY_SEPARATOR.$picture->name);//路径必须真实存在，并且如果是linux系统，必须有修改权限
				}
				//$this->renderPartial(array('view','id'=>$model->avatar));
			}
		}
		
		$this->renderPartial("test",array(
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

		if(isset($_POST['Hairstylist']))
		{
			$model->attributes=$_POST['Hairstylist'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$this->pageTitle="发型艺术家";
		
		$category=array();
		//产品种类
		$hairstylist = Hairstylist::model()->findAll();
		foreach($hairstylist as $v)
		{
			$category[]=$v['category'];
		}
		
		//分页
		$criteria = new CDbCriteria();
		
		if(isset($_GET['category']))
		{			
			$criteria->addCondition("category = :category");
			$criteria->params[':category'] = $_GET['category'];
		}
		
	    $count=Hairstylist::model()->count($criteria);  
	    $pages=new CPagination($count);  
	  
	    
	     $pages->pageSize=YII_DEBUG ? 4:8;  
	     $pages->applyLimit($criteria);  
	     $model = Hairstylist::model()->findAll($criteria);  
	  
	    $this->render('index', array(  
	     	'model' => $model,  
	        'pages' => $pages,
	    	'category'=>array_unique($category),  
	     ));  
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Hairstylist('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Hairstylist']))
			$model->attributes=$_GET['Hairstylist'];

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
		$model=Hairstylist::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='hairstylist-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
