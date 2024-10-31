<?php

/**
 * This is the model class for table "{{vw_research_grant_summary}}".
 *
 * The followings are the available columns in table '{{vw_research_grant_summary}}':
 * @property string $total_revenue_sum
 * @property string $total_expenditure_sum
 * @property string $remaining_balance_sum
 */
class VwResearchGrantSummary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VwResearchGrantSummary the static model class
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
		return '{{vw_research_grant_summary}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total_revenue_sum, total_expenditure_sum, remaining_balance_sum', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('total_revenue_sum, total_expenditure_sum, remaining_balance_sum', 'safe', 'on'=>'search'),
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
			'total_revenue_sum' => 'Total Revenue Sum',
			'total_expenditure_sum' => 'Total Expenditure Sum',
			'remaining_balance_sum' => 'Remaining Balance Sum',
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

		$criteria->compare('total_revenue_sum',$this->total_revenue_sum,true);
		$criteria->compare('total_expenditure_sum',$this->total_expenditure_sum,true);
		$criteria->compare('remaining_balance_sum',$this->remaining_balance_sum,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}