<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 11:48
 */

namespace SEM\Tests\baidu\service;


use PHPUnit\Framework\TestCase;
use SEM\baidu\service\AccountService;
use SEM\baidu\service\GetAccountInfoRequest;
use SEM\Tests\baidu\common;

class AccountServiceTest extends TestCase
{

    public function testGetAccountInfo()
    {
        $as = new AccountService(common::getClientConfig());
        $getAccountInfoRequest = new GetAccountInfoRequest();
        $fields = array("userId", "cost");
        $getAccountInfoRequest->setAccountFields($fields);
        $as->setIsJson(true);
        $response = $as->getAccountInfo($getAccountInfoRequest);
        echo "the response is: " . json_encode($response) . "\n";
        $head = $as->getJsonHeader();
        echo "status:" . json_encode($head) . "\n";
        $this->assertTrue(common::SUCCESS == $head->desc && 0 == $head->status);
        print_r($response->data);
    }
}
