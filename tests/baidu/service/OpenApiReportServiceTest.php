<?php

namespace SEM\baidu\service;

use PHPUnit\Framework\TestCase;
use SEM\Tests\baidu\common;

class OpenApiReportServiceTest extends TestCase
{

    public function testGetReportData()
    {
        $rq = new GetReportDataRequest();
        $rq->startDate = "2021-12-09 09:00";
        $rq->endDate = "2021-12-09 09:59";
        $rq->timeUnit = "HOUR";
        $rq->columns = [];

        $opens = (new OpenApiReportService(common::getClientConfig()));
        $d = $opens->getReportData($rq);
        $h = $opens->getJsonHeader();
        $this->assertEquals(1,$d->data[0]->rowCount);
        $this->assertTrue(common::SUCCESS == $h->desc && 0 == $h->status);
    }
}
