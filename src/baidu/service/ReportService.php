<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 12:15
 */

namespace SEM\baidu\service;

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

use SEM\baidu\BDCommonService;

class ReportService extends BDCommonService
{
    public function __construct($config)
    {
        parent::__construct('sms', 'service', 'ReportService', $config);
    }

    // ABSTRACT METHODS

    public function getRealTimeQueryData($getRealTimeQueryDataRequest)
    {
        return $this->execute('getRealTimeQueryData', $getRealTimeQueryDataRequest);
    }

    public function getRealTimePairData($getRealTimePairDataRequest)
    {
        return $this->execute('getRealTimePairData', $getRealTimePairDataRequest);
    }

    public function getProfessionalReportId($getProfessionalReportIdRequest)
    {
        return $this->execute('getProfessionalReportId', $getProfessionalReportIdRequest);
    }

    public function getReportState($getReportStateRequest)
    {
        return $this->execute('getReportState', $getReportStateRequest);
    }

    public function getReportFileUrl($getReportFileUrlRequest)
    {
        return $this->execute('getReportFileUrl', $getReportFileUrlRequest);
    }

    public function getRealTimeData($getRealTimeDataRequest)
    {
        return $this->execute('getRealTimeData', $getRealTimeDataRequest);
    }
}


