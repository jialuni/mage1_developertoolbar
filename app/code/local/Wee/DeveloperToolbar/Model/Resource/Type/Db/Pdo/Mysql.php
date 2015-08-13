<?php

class Wee_DeveloperToolbar_Model_Resource_Type_Db_Pdo_Mysql extends Mage_Core_Model_Resource_Type_Db_Pdo_Mysql
{
	public function getConnection($config)
    {
        $conn = parent::getConnection($config);
        $conn->getProfiler()->setEnabled(true);
    	return $conn;
    }
}