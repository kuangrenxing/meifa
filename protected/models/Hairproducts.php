<?php

/**
 * This is the model class for table "hairproducts".
 *
 * The followings are the available columns in table 'hairproducts':
 * @property integer $id
 * @property string $category
 * @property string $name
 * @property integer $price
 * @property string $detail
 */
class Hairproducts extends CActiveRecord
{
	public $adminName="发型产品";
	public $pluralNames=array('0'=>'发型产品');
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hairproducts the static model class
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
		return 'hairproducts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, name,picture, price, detail', 'required','on'=>'create'),
			array('price', 'numerical', 'integerOnly'=>true),
			array('category, name', 'length', 'max'=>64),
			array('picture', 'file','allowEmpty'=>false,'on'=>'create','types'=>'jpg, gif, png','maxSize'=>1024 * 1024 * 1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, category, name, price, detail', 'safe', 'on'=>'search'),
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
			'category' => '种类',
			'name' => '名称',
			'price' => '价格',
			'detail' => '详情',
			'picture'=>'图片',
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
		$criteria->compare('category',$this->category,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('detail',$this->detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	// Config for attribute widgets
	public function attributeWidgets()
	{
		return array(
				array('category', 'textField'), // For choices create variable name proffesion_idChoices
				array('name','textField'),
				array('price','textField'),
				array('picture','fileField'),
				array('detail','textArea'),
		);
	}
	
	// Config for CGridView class
	public function adminSearch()
	{
		return array(
				// Data provider, by default is "search()"
				//'dataProvider'=>$this->search(),
				'columns'=>array(
						'id',
						'category',
						'name',
						'price',
						//'picture',
						array(
								'name'=>'picture',
								'type'=>'raw',
								'value'=>'CHtml::image(Yii::app()->baseUrl."/".Yii::app()->params["uploadUrl"]."/"."hairproducts"."/".$data->picture,"",array("width"=>"50","height"=>"40"))'
								),
						'detail',
				),
		);
	}
	
	public $uploadFields = array(
			'picture'=>'hairproducts',	//字段=>保存文件夹			
	);
}