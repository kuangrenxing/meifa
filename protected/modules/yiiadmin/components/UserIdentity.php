<?php

class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$password=Yii::app()->getModule('yiiadmin')->password;
		
		$admin=Admin::model()->find('username=:username',array(
			':username'=>$this->username,
		));
		
		//print_r($admin->username);print_r($admin->password);exit;
	
		if($password===null)
			throw new CException('Please configure the "password" property of the "yiiadmin" module.');
		else if($password===false || $admin->password==md5($this->password))
			$this->errorCode=self::ERROR_NONE;
        else
            $this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
		return !$this->errorCode;
	}
}
