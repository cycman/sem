<?php
namespace SEM\baidu\service;
/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class DeleteAdgroupRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteAdgroupRequest Attributes
    public $adgroupIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {
    }

    //------------------------
    // INTERFACE
    //------------------------
    public function setAdgroupIds($aadgroupIds)
    {
        $this->adgroupIds = $aadgroupIds;
    }

    public function addAdgroupId($aAdgroupId)
    {
        $wasAdded = false;
        $this->adgroupIds[] = $aAdgroupId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAdgroupId($aAdgroupId)
    {
        $wasRemoved = false;
        unset($this->adgroupIds[$this->indexOfAdgroupId($aAdgroupId)]);
        $this->adgroupIds = array_values($this->adgroupIds);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getAdgroupIds()
    {
        $newAdgroupIds = $this->adgroupIds;
        return $newAdgroupIds;
    }

    public function numberOfAdgroupIds()
    {
        $number = count($this->adgroupIds);
        return $number;
    }

    public function indexOfAdgroupId($aAdgroupId)
    {
        $rawAnswer = array_search($aAdgroupId, $this->adgroupIds);
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


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class DeleteAdgroupResponse
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteAdgroupResponse Attributes
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


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetAdgroupResponse
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetAdgroupResponse Attributes
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


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class UpdateAdgroupResponse
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateAdgroupResponse Attributes
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


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class AddAdgroupRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddAdgroupRequest Attributes
    public $adgroupTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {
    }

    //------------------------
    // INTERFACE
    //------------------------
    public function setAdgroupTypes($aadgroupTypes)
    {
        $this->adgroupTypes = $aadgroupTypes;
    }

    public function addAdgroupType($aAdgroupType)
    {
        $wasAdded = false;
        $this->adgroupTypes[] = $aAdgroupType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAdgroupType($aAdgroupType)
    {
        $wasRemoved = false;
        unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
        $this->adgroupTypes = array_values($this->adgroupTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getAdgroupTypes()
    {
        $newAdgroupTypes = $this->adgroupTypes;
        return $newAdgroupTypes;
    }

    public function numberOfAdgroupTypes()
    {
        $number = count($this->adgroupTypes);
        return $number;
    }

    public function indexOfAdgroupType($aAdgroupType)
    {
        $rawAnswer = array_search($aAdgroupType, $this->adgroupTypes);
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


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/




/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/




/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class GetAdgroupRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetAdgroupRequest Attributes
    public $adgroupFields;
    public $ids;
    public $idType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {
    }

    //------------------------
    // INTERFACE
    //------------------------
    public function setAdgroupFields($aadgroupFields)
    {
        $this->adgroupFields = $aadgroupFields;
    }

    public function addAdgroupField($aAdgroupField)
    {
        $wasAdded = false;
        $this->adgroupFields[] = $aAdgroupField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAdgroupField($aAdgroupField)
    {
        $wasRemoved = false;
        unset($this->adgroupFields[$this->indexOfAdgroupField($aAdgroupField)]);
        $this->adgroupFields = array_values($this->adgroupFields);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setIds($aids)
    {
        $this->ids = $aids;
    }

    public function addId($aId)
    {
        $wasAdded = false;
        $this->ids[] = $aId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeId($aId)
    {
        $wasRemoved = false;
        unset($this->ids[$this->indexOfId($aId)]);
        $this->ids = array_values($this->ids);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setIdType($aIdType)
    {
        $wasSet = false;
        $this->idType = $aIdType;
        $wasSet = true;
        return $wasSet;
    }


    public function getAdgroupFields()
    {
        $newAdgroupFields = $this->adgroupFields;
        return $newAdgroupFields;
    }

    public function numberOfAdgroupFields()
    {
        $number = count($this->adgroupFields);
        return $number;
    }

    public function indexOfAdgroupField($aAdgroupField)
    {
        $rawAnswer = array_search($aAdgroupField, $this->adgroupFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getIds()
    {
        $newIds = $this->ids;
        return $newIds;
    }

    public function numberOfIds()
    {
        $number = count($this->ids);
        return $number;
    }

    public function indexOfId($aId)
    {
        $rawAnswer = array_search($aId, $this->ids);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {
    }

}


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class AddAdgroupResponse
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddAdgroupResponse Attributes
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


/*PLEASE DO NOT EDIT THIS CODE*/

/*This code was generated using the UMPLE @UMPLE_VERSION@ modeling language!*/

class AdgroupService extends \SEM\baidu\BDCommonService
{
    public function __construct($config)
    {
        parent::__construct('sms', 'service', 'AdgroupService', $config);
    }

    // ABSTRACT METHODS

    public function addAdgroup($addAdgroupRequest)
    {
        return $this->execute('addAdgroup', $addAdgroupRequest);
    }

    public function updateAdgroup($updateAdgroupRequest)
    {
        return $this->execute('updateAdgroup', $updateAdgroupRequest);
    }

    public function deleteAdgroup($deleteAdgroupRequest)
    {
        return $this->execute('deleteAdgroup', $deleteAdgroupRequest);
    }

    public function getAdgroup($getAdgroupRequest)
    {
        return $this->execute('getAdgroup', $getAdgroupRequest);
    }

}


?>