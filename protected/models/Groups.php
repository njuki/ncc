<?php

/**
 * This is the model class for table "groups".
 *
 * The followings are the available columns in table 'groups':
 * @property string $groupID
 * @property string $groupName
 * @property string $description
 * @property integer $recordStatus
 * @property string $createdBy
 * @property string $updatedBy
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property integer $isEditable
 */
class Groups extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Groups the static model class
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
		return 'groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('groupName, createdBy, dateCreated', 'required'),
			array('groupName', 'unique'),
			array('recordStatus, isEditable', 'numerical', 'integerOnly'=>true),
			array('groupName', 'length', 'max'=>50),
			array('description', 'length', 'max'=>100),
			array('createdBy, updatedBy', 'length', 'max'=>11),
			array('dateUpdated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('groupID, groupName, description, recordStatus, createdBy, updatedBy, dateCreated, dateUpdated, isEditable', 'safe', 'on'=>'search'),
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
			'groupID' => 'Group',
			'groupName' => 'Group Name',
			'description' => 'Description',
			'recordStatus' => 'Active',
			'createdBy' => 'Created By',
			'updatedBy' => 'Updated By',
			'dateCreated' => 'Date Created',
			'dateUpdated' => 'Date Updated',
			'isEditable' => 'Is Editable',
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

		$criteria->compare('groupID',$this->groupID,true);
		$criteria->compare('groupName',$this->groupName,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('recordStatus',$this->recordStatus);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('updatedBy',$this->updatedBy,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('dateUpdated',$this->dateUpdated,true);
		$criteria->compare('isEditable',$this->isEditable);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}