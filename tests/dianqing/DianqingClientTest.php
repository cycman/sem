<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 18:00
 */

namespace SEM\Tests\dianqing;


use function PHPSTORM_META\type;
use PHPUnit\Framework\TestCase;
use SEM\dianqing\DianqingClient;

class DianqingClientTest extends TestCase
{
//    protected $iv = '';
//    protected $encryptKey;
//    protected $apiSecret = "46d3045a8f73e6c2668daa0cc4dc1e52";

    public function testUpdateAccessToken()
    {

        $c = common::getClient();
        $c->updateAccessToken();
        $this->assertNotEmpty($c->getAccessToken());
    }

    public function testQuerywordCount()
    {

        $c = common::getClient();
        $c->updateAccessToken();
        $d = [
            "startDate" => "2021-01-03",
            "endDate" => "2021-01-03",
            "type" => "computer",
        ];
        $r = $c->doRequest("dianjing", "report", "querywordCount", $d);
        print_r($r);
        $this->assertNotEmpty($r->totalNumber);
    }
}

