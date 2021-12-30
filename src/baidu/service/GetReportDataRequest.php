<?php


namespace SEM\baidu\service;


class GetReportDataRequest
{
    public $reportType = 2602783;
    public $startDate;
    public $endDate;
    public $timeUnit;
    public $columns;
    public $startRow =0;
    public $rowCount=1;
    public $needSum = false;
    public $filters = [];

}