<?php
/**
 * ManageModelController 
 * 
 * @uses YAdminController
 * @package yiiadmin
 * @version $id$
 * @copyright 2010 firstrow@gmail.com
 * @author Firstrow <firstrow@gmail.com> 
 * @license BSD
 */

/**
 * Управление данными модели. Вывод, редактирование, удаление.
**/
class ManageModelController extends YAdminController
{
    public function actionIndex()
    {

    }

    /**
     * Вывод списка записей модели.
     * 
     * @access public
     * @return void
     */
    public function actionList()
    {
        $model_name=(string)$_GET['model_name']; 
        $model=$this->module->loadModel($model_name);

        if (isset($_GET[get_class($model)]))
            $model->attributes=$_GET[get_class($model)];

        $this->breadcrumbs=array(
                $this->module->getModelNamePlural($model),
        );

        if (method_exists($model,'adminSearch'))
            $data1=$model->adminSearch();
        else
            $data1=array();

        $url_prefix='Yii::app()->createUrl("yiiadmin/manageModel/';
		
		if (method_exists($model,'adminSearch2'))
            $data2=$model->adminSearch2();
        else
            {

        $data2=array(
            'id'=>'objects-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'itemsCssClass'=>'table',
            'enablePagination'=>true,
            'pagerCssClass'=>'pagination',
            'selectableRows'=>2,
            'pager'=>array(
                'cssFile'=>false,
                'htmlOptions'=>array('class'=>'pagination'),
                'header'=>false,
            ),
            'template'=>' 
                <div class="module changelist-results">
                    {items}
                </div>
                <div class="module pagination">
                    {pager}{summary}<br clear="all">
                </div> 
            ',
            'columns'=>array(
            array(
                'class'=>'YiiAdminButtonColumn',
                'updateButtonUrl'=>$url_prefix.'update",array("model_name"=>"'.get_class($model).'","pk"=>$data->primaryKey))',
                'deleteButtonUrl'=>$url_prefix.'delete",array("model_name"=>"'.get_class($model).'","pk"=>$data->primaryKey))',
                'viewButtonUrl'=>$url_prefix.'view",array("model_name"=>"'.get_class($model).'","pk"=>$data->primaryKey))',
                'viewButtonOptions'=>array(
                    'style'=>'display:none;',
                 ),
				
            ),
            ),
        ); 
			}
        $listData=array_merge_recursive($data1,$data2); 

        if (Yii::app()->request->isAjaxRequest)
        {
            $this->widget('zii.widgets.grid.CGridView',$listData); 
            Yii::app()->end();
        }
        
        $this->render('list_objects',array(
            'title'=>$this->module->getModelNamePlural($model),
            'model'=>$model, 
            'listData'=>$listData, 
        ));
    }

    /**
     * Создание новой записи.
     * 
     * @access public
     * @return void
     */
    public function actionCreate()
    {
    	header("Content-Type:text/html;charset=utf-8");     	
    	
        $model_name=(string)$_GET['model_name']; 
        $model=$this->module->loadModel($model_name);
        $model->scenario='create';
        
        if (Yii::app()->request->isPostRequest)
        {        	
            if (isset($_POST[$model_name]))
                $model->attributes=$_POST[$model_name];            
          
			//存在上传字段
	        if(isset($model->uploadFields))
	        {
	        	$uploadFields = $model->uploadFields;
	        	foreach ($uploadFields as $i=>$v)
	        	{
	        		$$i = CUploadedFile::getInstance($model,$i);
        			$objectUpload[$i] = $$i;
	        	}
	       
		        foreach($objectUpload as $i=>$v)
		        {
		        	if (is_object($v) && get_class($v)==='CUploadedFile' )
		        	{		        		
		        		$model->$i=$v->name;  //请根据自己的需求生成相应的路径，但是要记得和下面保存路径保持一致	        		 
		        	}
		        	else
		        	{
		        		
		        	}
		        	
		        }
	        }

			
            if ($model->validate())
            {
                //有上传字段进行上传
                	if(isset($model->uploadFields))
                	{
                		foreach($objectUpload as $i=>$v)
                		{
                			if (is_object($v) && get_class($v)==='CUploadedFile' )
                			{
                				if(!is_dir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i]))
                				{
                					mkdir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i],'0777');
                				}              				
                				
                				
                				$v->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i].DIRECTORY_SEPARATOR.$v->name);//路径必须真实存在，并且如果是linux系统，必须有修改权限
                			}
                			else
                			{
                				
                			}                			 
                		}         		
                		 
                	}  
                	if($model->save())

                	{
	                	Yii::app()->user->setFlash('flashMessage', YiiadminModule::t('Запись создана.'));
	                	$this->redirectUser($model_name,$primaryKey);
                	}
                
              
            }
        }

        $title=YiiadminModule::t( 'Создать').' '.$this->module->getObjectPluralName($model, 0); 
        $this->breadcrumbs=array(
                $this->module->getModelNamePlural($model)=>$this->createUrl('manageModel/list',array('model_name'=>$model_name)),
                $title
        );

        $this->render('create',array(
            'title'=>$title,
            'model'=>$model,            
        ));
    }

    public function actionUpdate()
    {
    	header("Content-Type:text/html;charset=utf-8");
    	
        $model_name=(string)$_GET['model_name']; 
        $model=$this->module->loadModel($model_name)->findByPk($_GET['pk']);
		$oldmodel = $model->attributes;
		//admin model时密码设空
		if($model_name=="Admin")
		{
			$model->password="";
		}
        if (Yii::app()->request->isPostRequest)
        {
            if (isset($_POST[$model_name]))
                $model->attributes=$_POST[$model_name]; 
                       
            //存在上传字段
            if(isset($model->uploadFields))
            {
            	$uploadFields = $model->uploadFields;
            	foreach ($uploadFields as $i=>$v)
            	{
            		$$i = CUploadedFile::getInstance($model,$i);
            		$objectUpload[$i] = $$i;
            	}
           
            	
            	foreach($objectUpload as $i=>$v)
            	{
            		if (is_object($v) && get_class($v)==='CUploadedFile' )
            		{
            			$model->$i=$v->name;  //请根据自己的需求生成相应的路径，但是要记得和下面保存路径保持一致
            		}
            		else
            		{
            
            		}
            		 
            	}
            }
            
           
            

            if ($model->validate())
            {
            //修改用户密码空时不修改 
			if($model_name=="Admin")
			{
				if($_POST[$model_name]['password'] == '')
				{
					$model->password=$oldmodel['password'];
				}
				else
				{//密码不为空，加密
					$model->password=md5($model->password);
				}
			}
	

            	//有上传字段进行上传
            	if(isset($model->uploadFields))
            	{
            		
            		//删除已经有文件
            		foreach($model->attributes as $i=>$v)
            		{
            			foreach ($oldmodel as $io=>$vo)
            			{
            				if($i == $io && $model->$i!=$oldmodel[$io])
            				{           					
            					if(is_file(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i].DIRECTORY_SEPARATOR.$oldmodel[$io]))
            					{
            						
            						if(!@unlink(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i].DIRECTORY_SEPARATOR.$oldmodel[$io]))
            						{
            							chmod(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i],0777);
            							
            							unlink(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i].DIRECTORY_SEPARATOR.$oldmodel[$io]);
            						}
            					}
            				}
            			}
            		}
            		
            		
            		foreach($objectUpload as $i=>$v)
            		{
            			if (is_object($v) && get_class($v)==='CUploadedFile' )
            			{
            				if(!is_dir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i]))
            				{
            					mkdir(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i],'0777');
            				}
            				//echo Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$i.DIRECTORY_SEPARATOR.$v->name;
            				 
            				$v->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$uploadFields[$i].DIRECTORY_SEPARATOR.$v->name);//路径必须真实存在，并且如果是linux系统，必须有修改权限
            			}
            			else
            			{
            				 
            			}
            		}
            		 
            	}
                if($model->save(false))
                {
                	Yii::app()->user->setFlash('flashMessage', YiiadminModule::t('Изменения сохранены.'));
                	$this->redirectUser($model_name,$model->primaryKey);
                }
               
            }
        }

        $title=YiiadminModule::t( 'Редактировать').' '.$this->module->getObjectPluralName($model, 0); 
        $this->breadcrumbs=array(
                $this->module->getModelNamePlural($model)=>$this->createUrl('manageModel/list',array('model_name'=>$model_name)),
                $title
        );

        $this->render('create',array(
            'title'=>YiiadminModule::t( 'Редактировать').' '.$this->module->getObjectPluralName($model, 0),
            'model'=>$model,            
        ));
    }
    
    

    

    public function actionDelete()
    {
        $model_name=(string)$_GET['model_name']; 
        $model=$this->module->loadModel($model_name)->findByPk($_GET['pk']);

        if ($model!==null)
        {
        	//存在上传字段
            if(isset($model->uploadFields))
            {
            	$uploadFields = $model->uploadFields;
            	foreach ($uploadFields as $i=>$v)
            	{
            		if(is_file(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$v.DIRECTORY_SEPARATOR.$model->$i))
            		{
	            		if(!@unlink(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$v.DIRECTORY_SEPARATOR.$model->$i))
	            		{
	            			chmod(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$v,0777);
	            			unlink(Yii::app()->basePath.DIRECTORY_SEPARATOR.Yii::app()->params['upload'].DIRECTORY_SEPARATOR.$v.DIRECTORY_SEPARATOR.$model->$i);
	            		}
            		}
            	}
            }
            $model->delete();
            $this->redirect($this->createUrl('manageModel/list',array('model_name'=>$model_name)));
        }
    }

    /**
     * Redirect after editing model data.
     * 
     * @param string $model_name 
     * @param integer $pk 
     * @access protected
     * @return void
     */
    protected function redirectUser($model_name,$pk)
    {
        if ($_POST['_save'])
            $this->redirect($this->createUrl('manageModel/list',array('model_name'=>$model_name)));  
        if ($_POST['_addanother'])
        {
            Yii::app()->user->setFlash('flashMessage', YiiadminModule::t('Изменения сохранены. Можете создать новую запись.')); 
            $this->redirect($this->createUrl('manageModel/create',array('model_name'=>$model_name)));
        }
        if ($_POST['_continue'])
            $this->redirect($this->createUrl('manageModel/update',array('model_name'=>$model_name,'pk'=>$pk)));
    }
}
