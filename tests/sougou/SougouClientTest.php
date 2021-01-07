<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/7
 * Time: 13:05
 */

namespace SEM\Tests\sougou;

use PHPUnit\Framework\TestCase;
use SEM\sougou\SougouClient;

require "../data.php";

class SougouClientTest extends TestCase
{
    /**
     * @var SougouClient
     */
    protected $client;

    function init()
    {
        $this->client = new SougouClient(SOUGOU_SERVICE_URL, SOUGOU_USERNAME, SOUGOU_PASSWORD, SOUGOU_TOKEN);
    }

    public function testGetAccountInfoTest()
    {
        $this->init();
        $i = $this->client->getAccountInfo();
        $this->assertNotEmpty($i);
        echo "账户余额:" . $i->balance . "\n";
        $this->assertNotEmpty($i->balance, $i->balance);
    }
}
