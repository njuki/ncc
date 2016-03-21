<?php

/**
 * This is the model class for table "vacancies".
 *
 * The followings are the available columns in table 'vacancies':
 * @property string $vacancyID
 * @property string $jobID
 * @property string $openingsAvailable
 * @property string $deadline
 * @property string $emailAddress
 * @property string $dateCreated
 * @property string $createdBy
 * @property string $dateModified
 * @property string $modifiedBy
 * @property string $town
 * @property integer $status
 */
class Vacancies extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vacancies the static model class
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
		return 'vacancies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jobID, openingsAvailable, deadline, town, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('jobID, openingsAvailable, createdBy, modifiedBy', 'length', 'max'=>11),
			array('emailAddress, town', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vacancyID, jobID, openingsAvailable, deadline, emailAddress, dateCreated, createdBy, dateModified, modifiedBy, town, status', 'safe', 'on'=>'search'),
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
                    'job' => array(self::BELONGS_TO, 'Jobs', 'jobID')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vacancyID' => 'Vacancy',
			'jobID' => 'Job',
			'openingsAvailable' => 'Openings Available',
			'deadline' => 'Deadline',
			'emailAddress' => 'Email Address',
			'dateCreated' => 'Date Created',
			'createdBy' => 'Created By',
			'dateModified' => 'Date Modified',
			'modifiedBy' => 'Modified By',
			'town' => 'Town',
			'status' => 'Status',
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

		$criteria->compare('vacancyID',$this->vacancyID,true);
		$criteria->compare('jobID',$this->jobID,true);
		$criteria->compare('openingsAvailable',$this->openingsAvailable,true);
		$criteria->compare('deadline',$this->deadline,true);
		$criteria->compare('emailAddress',$this->emailAddress,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('dateModified',$this->dateModified,true);
		$criteria->compare('modifiedBy',$this->modifiedBy,true);
		$criteria->compare('town',$this->town,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}