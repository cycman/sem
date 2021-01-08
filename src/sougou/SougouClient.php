<?php

namespace SEM\sougou;

/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/7
 * Time: 12:24
 */
class SougouClient
{
    const ACCOUNT_SERVICE = "account";
    const GET_ACCOUNT_INFO_METHOD = "getAccountInfo";
    private $serviceUrl;
    private $header;


    public function __construct($serviceUrl, $userName, $password, $token)
    {
        $this->serviceUrl = $serviceUrl;
        $this->header = [
            "adType" => 1,
            "apiusertype" => "api",
            "password" => $password,
            "username" => $userName,
            "token" => $token,
        ];
    }

    /**
     * @return mixed
     * @throws SougouException
     */
    public function getAccountInfo()
    {
        $d = $this->doRequest(self::ACCOUNT_SERVICE, self::GET_ACCOUNT_INFO_METHOD);
        return $d->data->accountInfoType;
    }


    /**
     * @param $service
     * @param $method
     * @param array $body
     * @return mixed
     * @throws SougouException
     */
    public function doRequest($service, $method, $body = [])
    {
        $url = $this->serviceUrl . '/api/v2/' . $service . '/' . $method;
        $data = [
            "body" => $body,
            "header" => $this->header
        ];
        $header = array(
            'Content-Type: application/json',
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
            CURLOPT_POSTFIELDS => json_encode($data, JSON_FORCE_OBJECT),
            CURLOPT_HTTPHEADER => $header
        ));
        $body = curl_exec($ch);
        curl_close($ch);
        $d = json_decode($body);
        if ($d->status != 0 && isset($d->failures)) {
            throw new  SougouException($d->failures);
        }
        return $d;
    }

}