<?php

/**
 * This is the model class for table "cyclic_commission".
 *
 * The followings are the available columns in table 'cyclic_commission':
 * @property integer $id
 * @property string $title
 * @property integer $head_id
 *
 * The followings are the available model relations:
 * @property Teacher[] $teachers
 * @property Teacher $head
 */
class CyclicCommission extends ActiveRecord
{
    /**
     * @return array for dropDownList
     */
    public static function getList()
    {
        return CHtml::listData(self::model()->findAll(), 'id', 'title');
    }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cyclic_commission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, head_id', 'required'),
			array('head_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, head_id', 'safe', 'on'=>'search'),
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
			'teachers' => array(self::HAS_MANY, 'Teacher', 'cyclic_commission_id'),
			'head' => array(self::BELONGS_TO, 'Teacher', 'head_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'head_id' => 'Head',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('head_id',$this->head_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CyclicCommission the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
