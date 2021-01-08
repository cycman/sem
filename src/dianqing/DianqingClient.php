<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 17:48
 */

namespace SEM\dianqing;

class DianqingClient
{
    const UC_MODEL = "uc";
    const ACCOUNT_SERVICE = "account";
    const LOGIN_METHOD = "clientLogin";


    private $uid;
    protected $accessToken;


    private $apiKey;
    protected $apiSecret;
    private $passWord;
    private $username;
    private $serviceUrl;

    /**
     * DianqingClient constructor.
     * @param $apiKey
     * @param $apiSecret
     * @param $passWord
     * @param $username
     * @param $serviceUrl
     */
    public function __construct($apiKey, $apiSecret, $username, $passWord, $serviceUrl)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->passWord = $passWord;
        $this->username = $username;
        $this->serviceUrl = $serviceUrl;
    }


    /**
     * @return mixed
     * @throws DianQingException
     */
    public function getAccessToken()
    {
        if (empty($this->accessToken)) {
            $this->updateAccessToken();
        }
        return $this->accessToken;
    }

    /**
     * @throws DianQingException
     */
    public function updateAccessToken()
    {
        $key = substr($this->apiSecret, 0, 16);
        $iv = substr($this->apiSecret, 16);
        $md5pw = md5($this->passWord);
        $en = openssl_encrypt($md5pw, 'aes-128-cbc', $key, $options = true, $iv);
        $encryptedPassword = substr(bin2hex($en), 0, 64);
        $loginRequest = ["username" => $this->username, "passwd" => $encryptedPassword];
        $d = $this->doRequest(self::UC_MODEL, self::ACCOUNT_SERVICE, self::LOGIN_METHOD, $loginRequest);
        if (isset($d->uid) && isset($d->accessToken)) {
            $this->uid = $d->uid;
            $this->accessToken = $d->accessToken;
        }
    }


    /**
     * @param $model
     * @param $service
     * @param $method
     * @param $queryData
     * @return mixed
     * @throws DianQingException
     */
    public function doRequest($model, $service, $method, $queryData)
    {
        $url = $this->serviceUrl . '/' . $model . '/' . $service . '/' . $method;
        $data = http_build_query($queryData);

        $header = array(
            'Content-Type: application/x-www-form-urlencoded',
            "apiKey: {$this->apiKey}",
            "accessToken: {$this->accessToken}"
        );
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $body = curl_exec($ch);
        curl_close($ch);
        $d = json_decode($body);
        if (isset($d->failures)) {
            throw new  DianQingException($d->failures);
        }
        return $d;
    }

}

