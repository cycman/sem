<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 12:02
 */

namespace SEM\baidu;


class BDClientConfig
{
    protected $url;
    protected $username;
    protected $password;
    protected $token;
    protected $target;
    protected $accessToken;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * DBClientConfig constructor.
     * @param $url
     * @param $username
     * @param $password
     * @param $token
     * @param $target
     * @param $accessToken
     */
    public function __construct($url, $username, $password, $token, $target="", $accessToken="")
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
        $this->token = $token;
        $this->target = $target;
        $this->accessToken = $accessToken;
    }

}