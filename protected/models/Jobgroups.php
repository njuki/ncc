<?php

/**
 * This is the model class for table "jobgroups".
 *
 * The followings are the available columns in table 'jobgroups':
 * @property string $jobGroupID
 * @property string $jobGroupName
 * @property string $jobGroupDescription
 * @property double $minSalary
 * @property double $maxSalary
 * @property double $houseAllowance
 * @property double $commuterAllowance
 * @property string $dateCreated
 * @property string $createdBy
 * @property string $dateModified
 * @property string $modifiedBy
 */
class Jobgroups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jobgroups the static model class
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
		return 'jobgroups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jobGroupName, jobGroupDescription', 'required'),
			array('minSalary, maxSalary, houseAllowance, commuterAllowance', 'numerical'),
			array('jobGroupID, createdBy, modifiedBy', 'length', 'max'=>11),
			array('jobGroupName', 'length', 'max'=>50),
			array('jobGroupDescription', 'length', 'max'=>200),
			array('dateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jobGroupID, jobGroupName, jobGroupDescription, minSalary, maxSalary, houseAllowance, commuterAllowance, dateCreated, createdBy, dateModified, modifiedBy', 'safe', 'on'=>'search'),
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
			'jobGroupID' => 'Job Group',
			'jobGroupName' => 'Job Group Name',
			'jobGroupDescription' => 'Job Group Description',
			'minSalary' => 'Min Salary',
			'maxSalary' => 'Max Salary',
			'houseAllowance' => 'House Allowance',
			'commuterAllowance' => 'Commuter Allowance',
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

		$criteria->compare('jobGroupID',$this->jobGroupID,true);
		$criteria->compare('jobGroupName',$this->jobGroupName,true);
		$criteria->compare('jobGroupDescription',$this->jobGroupDescription,true);
		$criteria->compare('minSalary',$this->minSalary);
		$criteria->compare('maxSalary',$this->maxSalary);
		$criteria->compare('houseAllowance',$this->houseAllowance);
		$criteria->compare('commuterAllowance',$this->commuterAllowance);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('dateModified',$this->dateModified,true);
		$criteria->compare('modifiedBy',$this->modifiedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}