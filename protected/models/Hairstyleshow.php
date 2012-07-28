<?php

/**
 * This is the model class for table "hairstyleshow".
 *
 * The followings are the available columns in table 'hairstyleshow':
 * @property integer $id
 * @property string $category
 * @property string $picture
 * @property string $hairstylename
 * @property integer $price
 * @property string $detail
 */
class Hairstyleshow extends CActiveRecord
{
	public $adminName="发型展示";
	public $pluralNames=array('0'=>'发型展示');
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hairstyleshow the static model class
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
		return 'hairstyleshow';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, picture, hairstylename, price, detail', 'required','on'=>'create'),
			array('price', 'numerical', 'integerOnly'=>true),
			array('sequence', 'length', 'max'=>6),
			array('category, hairstylename', 'length', 'max'=>64),
			array('picture', 'length', 'max'=>255),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, category, picture, hairstylename, price, detail', 'safe', 'on'=>'search'),
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
			'picture' => '图片',
			'sequence'=>'顺序',
			'hairstylename' => '发型名',
			'price' => '价格',
			'detail' => '详情',
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
		$criteria->compare('sequence',$this->sequence,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('hairstylename',$this->hairstylename,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('detail',$this->detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function attributeWidgets()
	{
		return array(
				array('category', 'textField'), // For choices create variable name proffesion_idChoices
				array('sequence', 'textField'),
				array('picture','textField'),
				array('hairstylename','textField'),
				array('price','textField'),
				array('picture','fileField'),
				
				array('detail','textArea'),
		);
	}
	
	
	
	public $uploadFields = array(
			'picture'=>'hairstyleshow',	//字段=>保存文件夹			
	);
	
	public function adminSearch()
	{
		return array(
				// Data provider, by default is "search()"
				//'dataProvider'=>$this->search(),
				'columns'=>array(
						'id',
						'hairstylename',
						'category',						
						'picture',						
						'sequence',
						'price',
						'picture',
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
				Hairstyleshow::model()->updateByPk($this->id, array('sequence'=>$this->id));
			}
		}
	}
}