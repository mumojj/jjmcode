<?php

/**
 * This is the model class for table "{{student_survey_evaluation}}".
 *
 * The followings are the available columns in table '{{student_survey_evaluation}}':
 * @property integer $id
 * @property string $year_of_study
 * @property string $school_directorate_faculty
 * @property string $gender
 * @property string $education_level
 * @property string $age_group
 * @property string $education_quality_1
 * @property string $education_quality_2
 * @property string $service_quality_1
 * @property string $service_quality_2
 * @property string $service_quality_3
 * @property string $service_quality_4
 * @property string $service_quality_5
 * @property string $service_quality_6
 * @property string $service_quality_7
 * @property string $service_quality_8
 * @property string $service_quality_9
 * @property string $service_quality_10
 * @property string $service_quality_11
 * @property string $service_quality_12
 * @property string $service_quality_13
 * @property string $service_quality_14
 * @property string $service_quality_15
 * @property string $statisfaction_with_staff_1
 * @property string $statisfaction_with_staff_2
 * @property string $statisfaction_with_staff_3
 * @property string $statisfaction_with_staff_4
 * @property string $statisfaction_with_staff_5
 * @property string $statisfaction_with_staff_6
 * @property string $statisfaction_with_staff_7
 * @property string $statisfaction_with_staff_8
 * @property string $statisfaction_with_staff_9
 * @property string $statisfaction_with_staff_10
 * @property string $customer_handling_1
 * @property string $customer_handling_2
 * @property string $customer_handling_3
 * @property string $customer_handling_4
 * @property string $customer_handling_5
 * @property string $customer_handling_6
 * @property string $complaint_handling_1
 * @property string $complaint_handling_2
 * @property string $complaint_handling_3
 * @property string $complaint_handling_4
 * @property string $complaint_handling_5
 * @property string $complaint_handling_6
 * @property string $complaint_handling_7
 * @property string $complaint_handling_8
 * @property string $complaint_handling_9
 * @property string $overall_satisfaction_1
 * @property string $overall_satisfaction_2
 * @property string $overall_satisfaction_3
 * @property string $overall_satisfaction_4
 * @property string $overall_satisfaction_5
 * @property string $overall_satisfaction_6
 * @property string $overall_satisfaction_7
 * @property string $overall_satisfaction_8
 * @property string $overall_satisfaction_9
 * @property string $overall_satisfaction_10
 * @property string $overall_satisfaction_11
 * @property string $overall_satisfaction_12
 * @property string $overall_satisfaction_13
 * @property string $overall_satisfaction_14
 */
class StudentSurveyEvaluation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StudentSurveyEvaluation the static model class
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
		return '{{student_survey_evaluation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('year_of_study, age_group, education_quality_1, education_quality_2, service_quality_1, service_quality_2, service_quality_3, service_quality_4, service_quality_5, service_quality_6, service_quality_7, service_quality_8, service_quality_9, service_quality_10, service_quality_11, service_quality_12, service_quality_13, service_quality_14, service_quality_15, statisfaction_with_staff_1, statisfaction_with_staff_2, statisfaction_with_staff_3, statisfaction_with_staff_4, statisfaction_with_staff_5, statisfaction_with_staff_6, statisfaction_with_staff_7, statisfaction_with_staff_8, statisfaction_with_staff_9, statisfaction_with_staff_10, customer_handling_1, customer_handling_2, customer_handling_3, customer_handling_4, customer_handling_5, customer_handling_6, complaint_handling_1, complaint_handling_2, complaint_handling_3, complaint_handling_4, complaint_handling_5, complaint_handling_6, complaint_handling_7, complaint_handling_8, complaint_handling_9, overall_satisfaction_1, overall_satisfaction_2, overall_satisfaction_3, overall_satisfaction_4, overall_satisfaction_5, overall_satisfaction_6, overall_satisfaction_7, overall_satisfaction_8, overall_satisfaction_9, overall_satisfaction_10, overall_satisfaction_11, overall_satisfaction_12, overall_satisfaction_13', 'length', 'max'=>20),
			array('school_directorate_faculty, education_level', 'length', 'max'=>255),
			array('gender', 'length', 'max'=>10),
			array('overall_satisfaction_14', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, year_of_study, school_directorate_faculty, gender, education_level, age_group, education_quality_1, education_quality_2, service_quality_1, service_quality_2, service_quality_3, service_quality_4, service_quality_5, service_quality_6, service_quality_7, service_quality_8, service_quality_9, service_quality_10, service_quality_11, service_quality_12, service_quality_13, service_quality_14, service_quality_15, statisfaction_with_staff_1, statisfaction_with_staff_2, statisfaction_with_staff_3, statisfaction_with_staff_4, statisfaction_with_staff_5, statisfaction_with_staff_6, statisfaction_with_staff_7, statisfaction_with_staff_8, statisfaction_with_staff_9, statisfaction_with_staff_10, customer_handling_1, customer_handling_2, customer_handling_3, customer_handling_4, customer_handling_5, customer_handling_6, complaint_handling_1, complaint_handling_2, complaint_handling_3, complaint_handling_4, complaint_handling_5, complaint_handling_6, complaint_handling_7, complaint_handling_8, complaint_handling_9, overall_satisfaction_1, overall_satisfaction_2, overall_satisfaction_3, overall_satisfaction_4, overall_satisfaction_5, overall_satisfaction_6, overall_satisfaction_7, overall_satisfaction_8, overall_satisfaction_9, overall_satisfaction_10, overall_satisfaction_11, overall_satisfaction_12, overall_satisfaction_13, overall_satisfaction_14', 'safe', 'on'=>'search'),
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
			'year_of_study' => 'Year Of Study',
			'school_directorate_faculty' => 'School Directorate Faculty',
			'gender' => 'Gender',
			'education_level' => 'Education Level',
			'age_group' => 'Age Group',
			'education_quality_1' => 'Education Quality 1',
			'education_quality_2' => 'Education Quality 2',
			'service_quality_1' => 'Service Quality 1',
			'service_quality_2' => 'Service Quality 2',
			'service_quality_3' => 'Service Quality 3',
			'service_quality_4' => 'Service Quality 4',
			'service_quality_5' => 'Service Quality 5',
			'service_quality_6' => 'Service Quality 6',
			'service_quality_7' => 'Service Quality 7',
			'service_quality_8' => 'Service Quality 8',
			'service_quality_9' => 'Service Quality 9',
			'service_quality_10' => 'Service Quality 10',
			'service_quality_11' => 'Service Quality 11',
			'service_quality_12' => 'Service Quality 12',
			'service_quality_13' => 'Service Quality 13',
			'service_quality_14' => 'Service Quality 14',
			'service_quality_15' => 'Service Quality 15',
			'statisfaction_with_staff_1' => 'Statisfaction With Staff 1',
			'statisfaction_with_staff_2' => 'Statisfaction With Staff 2',
			'statisfaction_with_staff_3' => 'Statisfaction With Staff 3',
			'statisfaction_with_staff_4' => 'Statisfaction With Staff 4',
			'statisfaction_with_staff_5' => 'Statisfaction With Staff 5',
			'statisfaction_with_staff_6' => 'Statisfaction With Staff 6',
			'statisfaction_with_staff_7' => 'Statisfaction With Staff 7',
			'statisfaction_with_staff_8' => 'Statisfaction With Staff 8',
			'statisfaction_with_staff_9' => 'Statisfaction With Staff 9',
			'statisfaction_with_staff_10' => 'Statisfaction With Staff 10',
			'customer_handling_1' => 'Customer Handling 1',
			'customer_handling_2' => 'Customer Handling 2',
			'customer_handling_3' => 'Customer Handling 3',
			'customer_handling_4' => 'Customer Handling 4',
			'customer_handling_5' => 'Customer Handling 5',
			'customer_handling_6' => 'Customer Handling 6',
			'complaint_handling_1' => 'Complaint Handling 1',
			'complaint_handling_2' => 'Complaint Handling 2',
			'complaint_handling_3' => 'Complaint Handling 3',
			'complaint_handling_4' => 'Complaint Handling 4',
			'complaint_handling_5' => 'Complaint Handling 5',
			'complaint_handling_6' => 'Complaint Handling 6',
			'complaint_handling_7' => 'Complaint Handling 7',
			'complaint_handling_8' => 'Complaint Handling 8',
			'complaint_handling_9' => 'Complaint Handling 9',
			'overall_satisfaction_1' => 'Overall Satisfaction 1',
			'overall_satisfaction_2' => 'Overall Satisfaction 2',
			'overall_satisfaction_3' => 'Overall Satisfaction 3',
			'overall_satisfaction_4' => 'Overall Satisfaction 4',
			'overall_satisfaction_5' => 'Overall Satisfaction 5',
			'overall_satisfaction_6' => 'Overall Satisfaction 6',
			'overall_satisfaction_7' => 'Overall Satisfaction 7',
			'overall_satisfaction_8' => 'Overall Satisfaction 8',
			'overall_satisfaction_9' => 'Overall Satisfaction 9',
			'overall_satisfaction_10' => 'Overall Satisfaction 10',
			'overall_satisfaction_11' => 'Overall Satisfaction 11',
			'overall_satisfaction_12' => 'Overall Satisfaction 12',
			'overall_satisfaction_13' => 'Overall Satisfaction 13',
			'overall_satisfaction_14' => 'Overall Satisfaction 14',
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
		$criteria->compare('year_of_study',$this->year_of_study,true);
		$criteria->compare('school_directorate_faculty',$this->school_directorate_faculty,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('education_level',$this->education_level,true);
		$criteria->compare('age_group',$this->age_group,true);
		$criteria->compare('education_quality_1',$this->education_quality_1,true);
		$criteria->compare('education_quality_2',$this->education_quality_2,true);
		$criteria->compare('service_quality_1',$this->service_quality_1,true);
		$criteria->compare('service_quality_2',$this->service_quality_2,true);
		$criteria->compare('service_quality_3',$this->service_quality_3,true);
		$criteria->compare('service_quality_4',$this->service_quality_4,true);
		$criteria->compare('service_quality_5',$this->service_quality_5,true);
		$criteria->compare('service_quality_6',$this->service_quality_6,true);
		$criteria->compare('service_quality_7',$this->service_quality_7,true);
		$criteria->compare('service_quality_8',$this->service_quality_8,true);
		$criteria->compare('service_quality_9',$this->service_quality_9,true);
		$criteria->compare('service_quality_10',$this->service_quality_10,true);
		$criteria->compare('service_quality_11',$this->service_quality_11,true);
		$criteria->compare('service_quality_12',$this->service_quality_12,true);
		$criteria->compare('service_quality_13',$this->service_quality_13,true);
		$criteria->compare('service_quality_14',$this->service_quality_14,true);
		$criteria->compare('service_quality_15',$this->service_quality_15,true);
		$criteria->compare('statisfaction_with_staff_1',$this->statisfaction_with_staff_1,true);
		$criteria->compare('statisfaction_with_staff_2',$this->statisfaction_with_staff_2,true);
		$criteria->compare('statisfaction_with_staff_3',$this->statisfaction_with_staff_3,true);
		$criteria->compare('statisfaction_with_staff_4',$this->statisfaction_with_staff_4,true);
		$criteria->compare('statisfaction_with_staff_5',$this->statisfaction_with_staff_5,true);
		$criteria->compare('statisfaction_with_staff_6',$this->statisfaction_with_staff_6,true);
		$criteria->compare('statisfaction_with_staff_7',$this->statisfaction_with_staff_7,true);
		$criteria->compare('statisfaction_with_staff_8',$this->statisfaction_with_staff_8,true);
		$criteria->compare('statisfaction_with_staff_9',$this->statisfaction_with_staff_9,true);
		$criteria->compare('statisfaction_with_staff_10',$this->statisfaction_with_staff_10,true);
		$criteria->compare('customer_handling_1',$this->customer_handling_1,true);
		$criteria->compare('customer_handling_2',$this->customer_handling_2,true);
		$criteria->compare('customer_handling_3',$this->customer_handling_3,true);
		$criteria->compare('customer_handling_4',$this->customer_handling_4,true);
		$criteria->compare('customer_handling_5',$this->customer_handling_5,true);
		$criteria->compare('customer_handling_6',$this->customer_handling_6,true);
		$criteria->compare('complaint_handling_1',$this->complaint_handling_1,true);
		$criteria->compare('complaint_handling_2',$this->complaint_handling_2,true);
		$criteria->compare('complaint_handling_3',$this->complaint_handling_3,true);
		$criteria->compare('complaint_handling_4',$this->complaint_handling_4,true);
		$criteria->compare('complaint_handling_5',$this->complaint_handling_5,true);
		$criteria->compare('complaint_handling_6',$this->complaint_handling_6,true);
		$criteria->compare('complaint_handling_7',$this->complaint_handling_7,true);
		$criteria->compare('complaint_handling_8',$this->complaint_handling_8,true);
		$criteria->compare('complaint_handling_9',$this->complaint_handling_9,true);
		$criteria->compare('overall_satisfaction_1',$this->overall_satisfaction_1,true);
		$criteria->compare('overall_satisfaction_2',$this->overall_satisfaction_2,true);
		$criteria->compare('overall_satisfaction_3',$this->overall_satisfaction_3,true);
		$criteria->compare('overall_satisfaction_4',$this->overall_satisfaction_4,true);
		$criteria->compare('overall_satisfaction_5',$this->overall_satisfaction_5,true);
		$criteria->compare('overall_satisfaction_6',$this->overall_satisfaction_6,true);
		$criteria->compare('overall_satisfaction_7',$this->overall_satisfaction_7,true);
		$criteria->compare('overall_satisfaction_8',$this->overall_satisfaction_8,true);
		$criteria->compare('overall_satisfaction_9',$this->overall_satisfaction_9,true);
		$criteria->compare('overall_satisfaction_10',$this->overall_satisfaction_10,true);
		$criteria->compare('overall_satisfaction_11',$this->overall_satisfaction_11,true);
		$criteria->compare('overall_satisfaction_12',$this->overall_satisfaction_12,true);
		$criteria->compare('overall_satisfaction_13',$this->overall_satisfaction_13,true);
		$criteria->compare('overall_satisfaction_14',$this->overall_satisfaction_14,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}