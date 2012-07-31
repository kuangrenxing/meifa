<?php

/**
 * This is the model class for table "specialoffers".
 *
 * The followings are the available columns in table 'specialoffers':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $create_time
 * @property integer $update_time
 */
class Specialoffers extends CActiveRecord
{
	public $adminName="优惠信息";
	public $pluralNames=array('0'=>'优惠信息');
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Specialoffers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'specialoffers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content', 'required'),
			//array('create_time, update_time', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, content, create_time, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => '标题',
			'content' => '内容',
			'create_time' => '创建时间',
			'update_time' => '修改时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function attributeWidgets()
	{
		return array(
				array('title', 'textField'), // For choices create variable name proffesion_idChoices
				array('content','textArea'),
		);
	}
	
	
	public function adminSearch()
	{
		return array(
				// Data provider, by default is "search()"
				//'dataProvider'=>$this->search(),
				'columns'=>array(
						'id',
						'title',
						'content',
						 array(
		                    'name'=>'create_time',
						 	'type'=>'html',
		                    'value'=>'date("Y-m-d H:i:s",$data->create_time)',	                   
                		),
						array(
							'name'=>'update_time',
							'type'=>'html',
							'value'=>'date("Y-m-d H:i:s",$data->update_time)',
						),
	
				),
		);
	}
	
	protected function beforeSave()
	{
		if($this->isNewRecord)
		{
			$this->create_time=time();
			$this->update_time=time();
		}
		else
		{
			$this->update_time=$this->create_time;
				
		}
		return true;
	
	}
}