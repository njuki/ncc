<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $userID
 * @property string $groupID
 * @property string $userName
 * @property string $fullName
 * @property integer $clientID
 * @property string $phoneNo
 * @property string $employeeID
 * @property string $email
 * @property integer $departmentID
 * @property string $password
 * @property string $passwordStatus
 * @property string $passwordAttempts
 * @property string $dateLastLogin
 * @property string $recordStatus
 * @property string $passwordCanExpire
 * @property string $question
 * @property string $answer
 * @property string $createdBy
 * @property string $updatedBy
 * @property string $dateCreated
 * @property string $dateUpdated
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userName, email, groupID, active', 'required'),
			array('clientID, departmentID', 'numerical', 'integerOnly'=>true),
			array('groupID, employeeID, createdBy, updatedBy', 'length', 'max'=>11),
			array('userName, fullName, question, answer', 'length', 'max'=>30),
			array('phoneNo', 'length', 'max'=>20),
			array('email', 'length', 'max'=>70),
			array('password', 'length', 'max'=>150),
			array('passwordStatus, passwordAttempts, recordStatus, passwordCanExpire', 'length', 'max'=>10),
			array('dateLastLogin, dateCreated, dateUpdated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userID, groupID, userName, fullName, clientID, phoneNo, employeeID, email, departmentID, password, passwordStatus, passwordAttempts, dateLastLogin, recordStatus, passwordCanExpire, question, answer, createdBy, updatedBy, dateCreated, dateUpdated, active', 'safe', 'on'=>'search'),
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
                    'group' => array(self::BELONGS_TO, 'Groups', 'groupID')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userID' => 'User',
			'groupID' => 'Group',
			'userName' => 'User Name',
			'fullName' => 'Full Name',
			'clientID' => 'Client',
			'phoneNo' => 'Phone No',
			'employeeID' => 'Employee',
			'email' => 'Email',
			'departmentID' => 'Department',
			'password' => 'Password',
			'passwordStatus' => 'Password Status',
			'passwordAttempts' => 'Password Attempts',
			'dateLastLogin' => 'Date Last Login',
			'recordStatus' => 'Record Status',
			'passwordCanExpire' => 'Password Can Expire',
			'question' => 'Question',
			'answer' => 'Answer',
			'createdBy' => 'Created By',
			'updatedBy' => 'Updated By',
			'dateCreated' => 'Date Created',
			'dateUpdated' => 'Date Updated',
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

		$criteria->compare('userID',$this->userID,true);
		$criteria->compare('groupID',$this->groupID,true);
		$criteria->compare('userName',$this->userName,true);
		$criteria->compare('fullName',$this->fullName,true);
		$criteria->compare('clientID',$this->clientID);
		$criteria->compare('phoneNo',$this->phoneNo,true);
		$criteria->compare('employeeID',$this->employeeID,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('departmentID',$this->departmentID);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('passwordStatus',$this->passwordStatus,true);
		$criteria->compare('passwordAttempts',$this->passwordAttempts,true);
		$criteria->compare('dateLastLogin',$this->dateLastLogin,true);
		$criteria->compare('recordStatus',$this->recordStatus,true);
		$criteria->compare('passwordCanExpire',$this->passwordCanExpire,true);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('updatedBy',$this->updatedBy,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('dateUpdated',$this->dateUpdated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return sha1($password)==$this->password;
	}
}