<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $sex
 */
class Admin extends CActiveRecord
{
	public $adminName="管理员";
	public $pluralNames=array('0'=>'管理员');
	public $password_repeat;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Admin the static model class
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
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password,password_repeat , email', 'required','on'=>'create'),
		
			array('username, email', 'length', 'max'=>64),
			array('password', 'compare'),
			array('password,password_repeat', 'length', 'max'=>20),
			array('sex', 'length', 'max'=>2),
			array('email','email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, sex', 'safe', 'on'=>'search'),
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
			'username' => '用户名',
			'password' => '密码',
			'email' => '邮箱',
			'sex' => '性别',
			'password_repeat'=>'确认密码',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sex',$this->sex,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function attributeWidgets()
	{
		return array(
				array('username', 'textField'), // For choices create variable name proffesion_idChoices
				array('sex','dropDownList'),
				array('password','textField'),
				array('email','textField'),
				
		);
	}
	
	public $sexChoices = array(
			'女'=>'女',
			'男'=>'男',
	);
	
	public function adminSearch()
	{
		return array(
				// Data provider, by default is "search()"
				//'dataProvider'=>$this->search(),
				'columns'=>array(
						'id',
						'username',
						'sex',
						'email',
						
				),
		);
	}
	
	public function beforeSave()
	{
// 		if($this->isNewRecord)
// 		{
			$this->password=md5($this->password);
// 		}
		return true;
	}
}