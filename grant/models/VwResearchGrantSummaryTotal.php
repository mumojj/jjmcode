<?php

/**
 * This is the model class for table "{{vw_research_grant_summary_total}}".
 *
 * The followings are the available columns in table '{{vw_research_grant_summary_total}}':
 * @property string $project_code
 * @property string $project_name
 * @property string $total_revenue_sum
 * @property string $total_expenditure_sum
 * @property string $remaining_balance_sum
 */
class VwResearchGrantSummaryTotal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VwResearchGrantSummaryTotal the static model class
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
		return '{{vw_research_grant_summary_total}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_code, project_name', 'length', 'max'=>100),
			array('total_revenue_sum, total_expenditure_sum, remaining_balance_sum', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('project_code, project_name, total_revenue_sum, total_expenditure_sum, remaining_balance_sum', 'safe', 'on'=>'search'),
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
			'project_code' => 'Project Code',
			'project_name' => 'Project Name',
			'total_revenue_sum' => 'Total Revenue Sum',
			'total_expenditure_sum' => 'Total Expenditure Sum',
			'remaining_balance_sum' => 'Remaining Balance Sum',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($params = array()) {
    $criteria = new CDbCriteria;

    if (!empty($params['project_code'])) {
        $criteria->compare('project_code', $params['project_code']);
    }

    return new CActiveDataProvider($this, array(
        'criteria' => $criteria,
        'sort' => array(
            'defaultOrder' => 'project_code ASC',
        ),
    ));
}
}