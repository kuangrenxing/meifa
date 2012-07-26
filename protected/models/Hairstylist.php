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
			array('name, sex, address, avatar, picture, motto, detail', 'required'),
			array('name', 'length', 'max'=>32),
			array('sex', 'length', 'max'=>2),
			array('address', 'length', 'max'=>128),
			array('avatar, picture, motto', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
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
			'address' => '地址',
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
				array('avatar','fileField'),
				array('picture','fileField'),
				array('motto','textField'),
				array('detail','textArea'),
		);
	}
	
	public $sexChoices = array(
				'女'=>'女',
				'男'=>'男');
}