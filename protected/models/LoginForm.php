<?php

class LoginForm extends CFormModel
{
    public $username;
    public $password;
    public $rememberMe;

    private $_identity;

    public function rules()
    {
        return [
            ['username, password', 'required'],
            ['username, password', 'length', 'min' => 4, 'max' => 10],
            ['rememberMe', 'boolean'],
            ['password', 'authenticate'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'rememberMe' => 'Remember me next time',
        ];
    }

    public function authenticate($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            if (!$this->_identity->authenticate()) {
                $this->addError('password', 'Incorrect username or password.');
            }
        }
    }

    public function login()
    {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } elseif ($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_INVALID) {
            $this->addError('username', 'Username is incorrect.');
        } elseif ($this->_identity->errorCode === UserIdentity::ERROR_PASSWORD_INVALID) {
            $this->addError('password', 'Password is incorrect.');
        }
    }
}
