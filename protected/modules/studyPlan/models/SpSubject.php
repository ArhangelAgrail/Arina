<?php

/**
 * @author Serhiy Vinichuk <serhiyvinichuk@gmail.com>
 * This is the model class for table "study_plan_subject".
 *
 * The followings are the available columns in table 'study_plan_subject':
 * @property integer $id
 * @property integer $sp_plan_id
 * @property integer $subject_id
 * @property integer $total_hours
 * The followings are the available model relations:
 * @property Plan $plan
 * @property Subject $subject
 * @property Hours[] $hours
 */
class SpSubject extends ActiveRecord
{
    /**
     * Return array for dropDownList
     * @return array
     */
    public static function getList()
    {
        return self::getListAll('id', 'title');
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return SpSubject the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'sp_subject';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('sp_plan_id, subject_id, total_hours', 'required'),
            array('sp_plan_id, subject_id, total_hours', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, sp_plan_id, subject_id, total_hours', 'safe', 'on' => 'search'),
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
            'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
            'plan' => array(self::BELONGS_TO, 'Plan', 'sp_plan_id'),
            'hours' => array(self::HAS_MANY, 'Hours', 'sp_subject_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'sp_plan_id' => 'Навчальний план',
            'subject_id' => 'Предмет',
            'total_hours' => 'Усього годин',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('sp_plan_id', $this->sp_plan_id);
        $criteria->compare('subject_id', $this->subject_id);
        $criteria->compare('total_hours', $this->total_hours);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}