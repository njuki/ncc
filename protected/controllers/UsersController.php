<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'admin', 'create', 'update'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'resetpassword', 'delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;                                                                       
		if(isset($_POST['Users']))
		{
			//generate a passwrd for the user
			$emailSend = new EMailSender();
			$password = $emailSend->generatePassword(6, 1);
			$model->password = SHA1($password);
			
			$model->attributes=$_POST['Users'];
			if($model->save()){
				$data = array(
						'emailAddress' => $model->email,
						'fullNames' => $model->fullName,
						'userName' => $model->userName,
						'password' => $password
				);
				//send the user details to the usr
				$sendDetails = $this->prepareUserDetails($data);
				Yii::app()->user->setFlash('success', 'User has been created successfully and credentials emailed.');
				$this->redirect(array('view','id'=>$model->userID));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function prepareUserDetails($data) {
	
		$pass = new EMailSender();
	
		$to = $data['emailAddress'];
		// $body ="Dear ".$email->fullNames." \n Your password has been reset successfully as ".$password;
	
		$body = '<p><span style="font-family:Trebuchet MS, Verdana, Arial; font-size:17px; font-weight:bold;"> Dear ' . $data['fullNames'] . '</span>,</p>
                                            <br />
                                            <div>You have successfully been registered successfully on NCC Portal.</div>
                                            <p>Your credentials are</p>
                                            <br />
                                            <div style="padding-left:20px; padding-bottom:10px;">&nbsp;&nbsp;&nbsp;Username -<b> ' . $data['userName'] . '</b></div>
                                            <div style="padding-left:20px; padding-bottom:10px;">&nbsp;&nbsp;&nbsp;Password - <b>' . $data['password'] . '</b></div>
	
	
                                            <br />
                                            <div>Thankyou</div>
                                            <br />
                                            <div style="color:blue"><i>NCC Portal</i></div>
                       
                                             ';
	
	
	
		$subject = "User Creation information";
		$name = $data['fullNames'];
	
		$send = $pass->sendEmail($subject, $to, $name, $body);
		if ($send) {
			return true;
		} else {
			return FALSE;
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save()) {
				Yii::app()->user->setFlash('success', 'User details update successfully.');
				$this->redirect(array('view','id'=>$model->userID));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionResetPassword() {
		$pass = new EMailSender();
		$model = new LoginForm;
	
		$userID = $_GET['id'];
	
		$email = Users::model()->findByAttributes(array('userID' => $userID));
	
	
	
		$password = $pass->generatePassword(6, 2);
	
	
		$updatepass = $this->savePassword(sha1($password), $userID);
	
		$to = $email->email;
		// $body ="Dear ".$email->fullNames." \n Your password has been reset successfully as ".$password;
	
		$body = '</p><span style="font-family:Trebuchet MS, Verdana, Arial; font-size:17px; font-weight:bold;"> Dear ' . $email->fullName . '</span>,</p>
                                            <br />
                                            <div>Your password for NCC Portal was successfully reset.</div>
                                            <p>Your new password is </p>
                                            <br />
                                            <div style="padding-left:20px; padding-bottom:10px;">&nbsp;&nbsp;&nbsp;New password - <b>' . $password . '</b></div>
	
	
                                            <br />
                                            <div>Stay Logged</div>
                                            <br />
                                            <div style="color:blue"><i>NCC Portal</i></div>
                       
                                             ';
	
	
	
		$subject = "Password reset information";
		$name = $email->fullName;
	
		$send = $pass->sendEmail($subject, $to, $name, $body);
		//$send = $pass->emailSend($to, $message, $subject);
	
		$userdet = array('username' => $email->userName, 'FullNames' => $email->fullName, 'UserID' => $userID, ' Email' => $email->email, ' ResetBy' => Yii::app()->user->name);
	
		//$this->flog("USER PASSWORD RESET SUCCESS", 'INFO', "The password for the user was reset successfully and sent on mail. Details:- " . CJSON::encode($userdet));
	
		if (Yii::app()->request->isAjaxRequest) {
	
	
			echo CJSON::encode(array(
					'status' => 'success',
					'div' => 'update successful',
			));
			exit;
		} else {
			Yii::app()->user->setFlash('success', 'Your password has been reset successfully. Check mail');
	
	
	
			$this->redirect('../users/admin', array('model' => $model));
		}
	}
	

	public function savePassword($pass, $userid) {
	
		$sql = "UPDATE users SET password ='$pass' WHERE userID =$userid ";
		$oDbConnection = Yii::app()->db;
		$oCommand = $oDbConnection->createCommand($sql);
		$dataProvider = $oCommand->execute();
	
		return $dataProvider;
	}
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
