<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property integer $position_id
 * @property integer $participates_in_study_process
 * @property string $start_date
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $short_name
 * @property integer $gender
 * @property integer $cyclic_commission_id
 * @property string $birth_date
 * @property string $nationality
 * @property integer $education
 * @property string $educations_list
 * @property integer $postgraduate_training
 * @property string $postgraduate_trainings
 * @property string $last_job
 * @property string $last_job_position
 * @property integer $experience_years
 * @property integer $experience_months
 * @property integer $experience_days
 * @property integer $dismissal_reason
 * @property string $dismissal_date
 * @property string $pension_data
 * @property string $family_status
 * @property string $family_data
 * @property string $place_of_residence
 * @property string $place_of_registration
 * @property string $passport
 * @property string $passport_issued_by
 * @property string $military_accounting_group
 * @property string $military_accounting_category
 * @property string $military_composition
 * @property string $military_rank
 * @property string $military_accounting_speciality_number
 * @property integer $military_suitability
 * @property string $military_district_office_registration_name
 * @property string $military_district_office_residence_name
 * @property string $professional_education
 * @property string $appointments_and_transfers
 * @property string $vacations
 *
 * The followings are the available model relations:
 * @property Position $position
 */
class Employee extends ActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'employee';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('position_id, participates_in_study_process, gender, cyclic_commission_id, education, postgraduate_training, dismissal_reason, military_suitability', 'numerical', 'integerOnly' => true),
            array('last_name, first_name, middle_name, short_name, nationality, last_job, last_job_position, pension_data, family_status, place_of_residence, place_of_registration, passport, passport_issued_by, military_accounting_group, military_accounting_category, military_composition, military_rank, military_accounting_speciality_number, military_district_office_registration_name, military_district_office_residence_name', 'length', 'max' => 255),
            array('start_date, birth_date, educations_list, postgraduate_trainings, experience_years, experience_months, experience_days, dismissal_date, family_data, professional_education, appointments_and_transfers, vacations', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, position_id, participates_in_study_process, start_date, last_name, first_name, middle_name, short_name, gender, cyclic_commission_id, birth_date, nationality, education, educations_list, postgraduate_training, postgraduate_trainings, last_job, last_job_position,t t experience_start, experience_end, dismissal_reason, dismissal_date, pension_data, family_status, family_data, place_of_residence, place_of_registration, passport, passport_issued_by, military_accounting_group, military_accounting_category, military_composition, military_rank, military_accounting_speciality_number, military_suitability, military_district_office_registration_name, military_district_office_residence_name, professional_education, appointments_and_transfers, vacations', 'safe', 'on' => 'search'),
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
            'position' => array(self::BELONGS_TO, 'Position', 'position_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('employee', 'ID'),
            'position_id' => Yii::t('employee', 'Position'),
            'participates_in_study_process' => Yii::t('employee', 'Participates in study process'),
            'start_date' => Yii::t('employee', 'Start date'),
            'last_name' => Yii::t('employee', 'Last name'),
            'first_name' => Yii::t('employee', 'First name'),
            'middle_name' => Yii::t('employee', 'Middle name'),
            'short_name' => Yii::t('employee', 'Short name'),
            'gender' => Yii::t('employee', 'Gender'),
            'cyclic_commission_id' => Yii::t('employee', 'Cyclic commission'),
            'birth_date' => Yii::t('employee', 'Birth date'),
            'nationality' => Yii::t('employee', 'Nationality'),
            'education' => Yii::t('employee', 'Education'),
            'educations_list' => Yii::t('employee', 'Educations list'),
            'postgraduate_training' => Yii::t('employee', 'Postgraduate training'),
            'postgraduate_trainings' => Yii::t('employee', 'Postgraduate trainings'),
            'last_job' => Yii::t('employee', 'Last job'),
            'last_job_position' => Yii::t('employee', 'Last job position'),
            'experience_years' => Yii::t('employee', 'Experience years'),
            'experience_months' => Yii::t('employee', 'Experience months'),
            'experience_days' => Yii::t('employee', 'Experience days'),
            'dismissal_reason' => Yii::t('employee', 'Dismissal reason'),
            'dismissal_date' => Yii::t('employee', 'Dismissal date'),
            'pension_data' => Yii::t('employee', 'Pension data'),
            'family_status' => Yii::t('employee', 'Family status'),
            'family_data' => Yii::t('employee', 'Family data'),
            'place_of_residence' => Yii::t('employee', 'Place of residence'),
            'place_of_registration' => Yii::t('employee', 'Place of registration'),
            'passport' => Yii::t('employee', 'Passport'),
            'passport_issued_by' => Yii::t('employee', 'Passport issued by'),
            'military_accounting_group' => Yii::t('employee', 'Military accounting group'),
            'military_accounting_category' => Yii::t('employee', 'Military accounting category'),
            'military_composition' => Yii::t('employee', 'Military composition'),
            'military_rank' => Yii::t('employee', 'Military rank'),
            'military_accounting_speciality_number' => Yii::t('employee', 'Military accounting speciality number'),
            'military_suitability' => Yii::t('employee', 'Military suitability'),
            'military_district_office_registration_name' => Yii::t('employee', 'Military district office registration name'),
            'military_district_office_residence_name' => Yii::t('employee', 'Military district office residence name'),
            'professional_education' => Yii::t('employee', 'Professional education'),
            'appointments_and_transfers' => Yii::t('employee', 'Appointments and transfers'),
            'vacations' => Yii::t('employee', 'Vacations'),
            'fullName' => Yii::t('terms', 'Full name'),
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
        $criteria->compare('position_id', $this->position_id);
        $criteria->compare('participates_in_study_process', $this->participates_in_study_process);
        $criteria->compare('start_date', $this->start_date, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('middle_name', $this->middle_name, true);
        $criteria->compare('short_name', $this->short_name, true);
        $criteria->compare('gender', $this->gender);
        $criteria->compare('cyclic_commission_id', $this->cyclic_commission_id);
        $criteria->compare('birth_date', $this->birth_date, true);
        $criteria->compare('nationality', $this->nationality, true);
        $criteria->compare('education', $this->education);
        $criteria->compare('educations_list', $this->educations_list, true);
        $criteria->compare('postgraduate_training', $this->postgraduate_training);
        $criteria->compare('postgraduate_trainings', $this->postgraduate_trainings, true);
        $criteria->compare('last_job', $this->last_job, true);
        $criteria->compare('last_job_position', $this->last_job_position, true);
        $criteria->compare('experience_years', $this->experience_years, true);
        $criteria->compare('experience_months', $this->experience_months, true);
        $criteria->compare('experience_days', $this->experience_days, true);
        $criteria->compare('dismissal_reason', $this->dismissal_reason);
        $criteria->compare('dismissal_date', $this->dismissal_date, true);
        $criteria->compare('pension_data', $this->pension_data, true);
        $criteria->compare('family_status', $this->family_status, true);
        $criteria->compare('family_data', $this->family_data, true);
        $criteria->compare('place_of_residence', $this->place_of_residence, true);
        $criteria->compare('place_of_registration', $this->place_of_registration, true);
        $criteria->compare('passport', $this->passport, true);
        $criteria->compare('passport_issued_by', $this->passport_issued_by, true);
        $criteria->compare('military_accounting_group', $this->military_accounting_group, true);
        $criteria->compare('military_accounting_category', $this->military_accounting_category, true);
        $criteria->compare('military_composition', $this->military_composition, true);
        $criteria->compare('military_rank', $this->military_rank, true);
        $criteria->compare('military_accounting_speciality_number', $this->military_accounting_speciality_number, true);
        $criteria->compare('military_suitability', $this->military_suitability);
        $criteria->compare('military_district_office_registration_name', $this->military_district_office_registration_name, true);
        $criteria->compare('military_district_office_residence_name', $this->military_district_office_residence_name, true);
        $criteria->compare('professional_education', $this->professional_education, true);
        $criteria->compare('appointments_and_transfers', $this->appointments_and_transfers, true);
        $criteria->compare('vacations', $this->vacations, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Employee the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function getFullName()
    {
        return trim("$this->last_name $this->first_name $this->middle_name");
    }

    public function getNameWithInitials()
    {
        $firstNameInitial = mb_substr($this->first_name, 0, 1, 'UTF-8');
        $middleNameInitial = mb_substr($this->middle_name, 0, 1, 'UTF-8');
        return trim("$this->last_name {$firstNameInitial}. {$middleNameInitial}.");
    }

    public function getShortName()
    {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }
}
