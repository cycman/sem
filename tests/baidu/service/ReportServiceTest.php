<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 12:18
 */

namespace SEM\Tests\baidu\service;


use PHPUnit\Framework\TestCase;
use SEM\baidu\service\GetReportFileUrlRequest;
use SEM\baidu\service\GetReportStateRequest;
use SEM\baidu\service\ReportService;
use SEM\baidu\service\GetProfessionalReportIdRequest;
use SEM\baidu\service\ReportRequestType;
use SEM\Tests\baidu\common;

class ReportServiceTest extends TestCase
{

    public function testGetProfessionalReportId()
    {
        $req = new GetProfessionalReportIdRequest();
        $reqType = new ReportRequestType();
        $reqType->setPerformanceData(["click", "impression", "cost", "ctr", "trans", "cpc"]);
        $reqType->setDevice("1");
        $reqType->setStartDate("2021-01-03");
        $reqType->setEndDate("2021-01-03");
        $reqType->setStatRange(3);
        $reqType->setLevelOfDetails(12);
        $reqType->setUnitOfTime("5");
        $reqType->setReportType(6);
        $req->setReportRequestType($reqType);
        $rs = new ReportService(common::getClientConfig());
        $response = $rs->getProfessionalReportId($req);
        echo "the response is: " . json_encode($response) . "\n";
        $head = $rs->getJsonHeader();
        echo "status:" . json_encode($head) . "\n";
        $this->assertTrue(common::SUCCESS == $head->desc && 0 == $head->status);
        print_r($response->data);
        $id = $response->data[0]->reportId;
        echo "report id " . $response->data[0]->reportId . "\n";
        $srequest = new GetReportStateRequest();
        $srequest->setReportId($id);
        $maxTimes = 10;
        while ($maxTimes > 0) {
            $maxTimes--;
            sleep(1);
            $response = $rs->getReportState($srequest);
            $genState = $response->data[0]->isGenerated;
            echo "gen state" . $genState . "\n";
            if ($genState == "3") {
                break;
            }
        }
        $fReq = new GetReportFileUrlRequest();
        $fReq->setReportId($id);
        $response = $rs->getReportFileUrl($fReq);
        echo "the file response is: " . json_encode($response) . "\n";
        $head = $rs->getJsonHeader();
        echo "file status:" . json_encode($head) . "\n";
        $this->assertTrue(common::SUCCESS == $head->desc && 0 == $head->status);
        print_r($response->data);
    }
}
