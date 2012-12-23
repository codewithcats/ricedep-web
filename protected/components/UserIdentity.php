<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	public function authenticate()
	{
		$member = Member::model()->find(
			'username=:u AND password=:p', 
			array(
				':u'=>$this->username,
				':p'=>$this->password
			));
		if($member === null) {
			return FALSE;
		}
		$this->_id = $member->UserID;
		$this->setState('subId',$member->SubID);
		$this->setState('insId',$member->InsID);
		$this->setState('username',$member->Username);
		$this->errorCode=self::ERROR_NONE;
		return TRUE;
	}

	public function getId()
	{
		return $this->_id;
	}
}