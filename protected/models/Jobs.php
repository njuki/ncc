<?php

/**
 * This is the model class for table "jobs".
 *
 * The followings are the available columns in table 'jobs':
 * @property string $jobID
 * @property string $departmentID
 * @property string $jobGroupID
 * @property string $termsOfServiceID
 * @property string $jobTitle
 * @property integer $reportsToID
 * @property string $jobDescription
 * @property string $jobQualification
 * @property string $dateCreated
 * @property string $createdBy
 * @property string $dateModified
 * @property string $modifiedBy
 */
class Jobs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jobs the static model class
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
		return 'jobs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('departmentID, jobGroupID, termsOfServiceID, jobTitle, jobDescription, jobQualification', 'required'),
			array('reportsToID', 'numerical', 'integerOnly'=>true),
			array('departmentID, jobGroupID, termsOfServiceID, createdBy, modifiedBy', 'length', 'max'=>11),
			array('jobTitle', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jobID, departmentID, jobGroupID, termsOfServiceID, jobTitle, reportsToID, jobDescription, jobQualification, dateCreated, createdBy, dateModified, modifiedBy', 'safe', 'on'=>'search'),
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
                    'department' => array(self::BELONGS_TO, 'Ministries', 'departmentID'),
                    'jobgroup' => array(self::BELONGS_TO, 'Jobgroups', 'jobGroupID'),
                    'termsOfService' => array(self::BELONGS_TO, 'TermsofService', 'termsOfServiceID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jobID' => 'Job',
			'departmentID' => 'Department',
			'jobGroupID' => 'Job Group',
			'termsOfServiceID' => 'Terms Of Service',
			'jobTitle' => 'Job Title',
			'reportsToID' => 'Reports To',
			'jobDescription' => 'Job Description',
			'jobQualification' => 'Job Qualification',
			'dateCreated' => 'Date Created',
			'createdBy' => 'Created By',
			'dateModified' => 'Date Modified',
			'modifiedBy' => 'Modified By',
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

		$criteria->compare('jobID',$this->jobID,true);
		$criteria->compare('departmentID',$this->departmentID,true);
		$criteria->compare('jobGroupID',$this->jobGroupID,true);
		$criteria->compare('termsOfServiceID',$this->termsOfServiceID,true);
		$criteria->compare('jobTitle',$this->jobTitle,true);
		$criteria->compare('reportsToID',$this->reportsToID);
		$criteria->compare('jobDescription',$this->jobDescription,true);
		$criteria->compare('jobQualification',$this->jobQualification,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('dateModified',$this->dateModified,true);
		$criteria->compare('modifiedBy',$this->modifiedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}