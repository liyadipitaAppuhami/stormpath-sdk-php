<?php
/**
 * Copyright 2017 Stormpath, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */


namespace Stormpath\Oauth;


use Stormpath\Resource\AccountStore;

/**
 * Class PasswordGrantRequest
 * @package Stormpath\Oauth
 * @since 1.11.0.beta
 */
class PasswordGrantRequest
{
    /**
     * @var
     */
    private $login;

    /**
     * @var
     */
    private $password;

	/**
	 * @var
	 */
	private $orgNameKey;

    /**
     * @var
     */
    private $accountStore;

    /**
     * @var string
     */
    private $grant_type = 'password';

    public function __construct($login, $password, $orgNameKey = null)
    {

        $this->login = $login;
        $this->password = $password;
        $this->orgNameKey = $orgNameKey;
    }

    /**
     * @param AccountStore $accountStore
     * @return $this
     */
    public function setAccountStore(AccountStore $accountStore)
    {
        $this->accountStore = $accountStore;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

	/**
	 * @return string
	 */
    public function getOrgNameKey()
    {
    	return $this->orgNameKey;
    }

    /**
     * @return mixed
     */
    public function getAccountStore()
    {
        return $this->accountStore;
    }

    /**
     * @return string
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }
}