<?php
class Permissions {
	
	public function isSuperAdmin(){
		if (self::getUserGroup() == 1)
			return true;
		
		return false;
	}
	
	function isBoardMember(){
		if (self::getUserGroup() == 2)
			return true;
		
		return false;
	}
	
	public function isSecretariate(){
		if (self::getUserGroup() == 3)
			return true;
		
		return false;
	}
	
	public function getUserGroup(){
		$user = Users::model()->findByPk(Yii::app()->user->id);
		if($user)
			return $user->groupID;
		
		return false;
	}
}