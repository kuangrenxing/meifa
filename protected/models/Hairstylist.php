<?php

/**
 * This is the model class for table "hairstylist".
 *
 * The followings are the available columns in table 'hairstylist':
 * @property integer $id
 * @property string $name
 * @property string $sex
 * @property string $address
 * @property string $avatar
 * @property string $picture
 * @property string $motto
 * @property string $detail
 */
class Hairstylist extends CActiveRecord
{
	public $adminName="发型师";
	public $pluralNames=array('0'=>'发型师');
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hairstylist the static model class
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
		return 'hairstylist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, sex, address,category, avatar, picture, motto, detail', 'required', 'on'=>'create'),
			array('name', 'length', 'max'=>32),
			array('sequence','length', 'max'=>6),
			array('sex', 'length', 'max'=>2),
			array('address', 'length', 'max'=>128),
			array('motto', 'length', 'max'=>255),
				
			array('avatar', 'file','allowEmpty'=>false,'on'=>'create','types'=>'jpg, gif, png','maxSize'=>1024 * 1024 * 1), // 1MB'tooLarge'=>'The file was larger than 1MB. Please upload a smaller file.',)
			array('picture', 'file','allowEmpty'=>false,'on'=>'create','types'=>'jpg, gif, png','maxSize'=>1024 * 1024 * 1), // 1MB'tooLarge'=>'The file was larger than 1MB. Please upload a smaller file.',)
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('detail,category,sequence','safe'),
			array('id, name, sex, address, avatar, picture, motto, detail', 'safe', 'on'=>'search'),
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
			'name' => '发型师',
			'sex' => '性别',
			'sequence'=>'顺序',
			'address' => '地址',
			'category'=>'级别',
			'avatar' => '头像',
			'picture' => '照片',
			'motto' => '座右铭',
			'detail' => '详细信息',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('sequence',$this->sequence,true);
		$criteria->compare('motto',$this->motto,true);
		$criteria->compare('detail',$this->detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function attributeWidgets()
	{
		return array(
				array('name', 'textField'), // For choices create variable name proffesion_idChoices
				array('sex','dropDownList'),
				array('address','textField'),
				array('category','textField'),
				array('sequence', 'textField'),
				array('avatar','fileField'),
				array('picture','fileField'),
				array('motto','textField'),
				array('detail','textArea'),
		);
	}
	
	public $sexChoices = array(
				'女'=>'女',
				'男'=>'男',
			);
	
	
	public $uploadFields = array(
			'avatar'=>'avatar',	//字段=>保存文件夹
			'picture'=>'picture',
			);
	
	public function adminSearch()
	{
		return array(
				// Data provider, by default is "search()"
				//'dataProvider'=>$this->search(),
				'columns'=>array(
						'id',
						'name',
						'sex',
						'category',
						'sequence',
						'address',
						array(
								'name'=>'avatar',
								'type'=>'raw',
								'value'=>'CHtml::image(Yii::app()->baseUrl."/".Yii::app()->params["uploadUrl"]."/".$data->uploadFields["avatar"]."/".$data->avatar,"",array("width"=>"50","height"=>"40"))'
						),
						array(
								'name'=>'picture',
								'type'=>'raw',
								'value'=>'CHtml::image(Yii::app()->baseUrl."/".Yii::app()->params["uploadUrl"]."/".$data->uploadFields["picture"]."/".$data->picture,"",array("width"=>"50","height"=>"40"))'
						),
						
						'motto',
						'detail',
						
				),
		);
	}
	
	public function afterSave()
	{
		if($this->isNewRecord)
		{
			if($this->sequence=="" || $this->sequence == 0)
			{
				Hairstylist::model()->updateByPk($this->id, array('sequence'=>$this->id));				
			}				
		}
	}
	
	
}