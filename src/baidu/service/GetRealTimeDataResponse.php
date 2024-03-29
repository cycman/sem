<?php


namespace SEM\baidu\service;


class GetRealTimeDataResponse
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetRealTimeDataResponse Attributes
    public $data;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {
    }

    //------------------------
    // INTERFACE
    //------------------------
    public function setData($adata)
    {
        $this->data = $adata;
    }

    public function addData($aData)
    {
        $wasAdded = false;
        $this->data[] = $aData;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeData($aData)
    {
        $wasRemoved = false;
        unset($this->data[$this->indexOfData($aData)]);
        $this->data = array_values($this->data);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getData()
    {
        $newData = $this->data;
        return $newData;
    }

    public function numberOfData()
    {
        $number = count($this->data);
        return $number;
    }

    public function indexOfData($aData)
    {
        $rawAnswer = array_search($aData, $this->data);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {
    }

}
