<?php


namespace SEM\baidu\service;


use SEM\baidu\BDCommonService;

class OpenApiReportService extends BDCommonService
{
    public function __construct($config)
    {
        parent::__construct('sms', 'service', 'OpenApiReportService', $config);
    }

    // ABSTRACT METHODS

    public function getReportData($getReportDataRequest)
    {
        return $this->execute('getReportData', $getReportDataRequest);
    }
}