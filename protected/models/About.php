<?php

/**
 * This is the model class for table "about".
 *
 * The followings are the available columns in table 'about':
 * @property integer $id
 * @property string $content
 */
class About extends CActiveRecord
{
	public $adminName="关于我们";
	public $pluralNames=array('0'=>'关于我们');
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return About the static model class
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
		return 'about';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, content', 'safe', 'on'=>'search'),
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
			'content' => '内容',
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
		$criteria->compare('content',$this->content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function attributeWidgets()
    {
        return array(
            array('content', 'textArea'), // For choices create variable name proffesion_idChoices
        );
    }
	public function adminSearch()
    {
        return array(
                // Data provider, by default is "search()"
                //'dataProvider'=>$this->search(),
                'columns'=>array(
                'id',
                'content',
            ),
        );
    }

}
