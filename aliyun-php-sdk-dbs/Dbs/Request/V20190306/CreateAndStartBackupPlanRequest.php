<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAndStartBackupPlan
 *
 * @method string getDatabaseType()
 * @method string getBackupGatewayId()
 * @method string getSourceEndpointUserName()
 * @method string getStorageType()
 * @method string getDatabaseRegion()
 * @method string getBackupStartTime()
 * @method string getSourceEndpointIP()
 * @method string getCrossRoleName()
 * @method string getBackupStorageType()
 * @method string getDuplicationArchivePeriod()
 * @method string getPeriod()
 * @method string getBackupLogIntervalSeconds()
 * @method string getFromApp()
 * @method string getSourceEndpointPassword()
 * @method string getOwnerId()
 * @method string getBackupMethod()
 * @method string getBackupRetentionPeriod()
 * @method string getBackupPeriod()
 * @method string getBackupSpeedLimit()
 * @method string getSourceEndpointInstanceType()
 * @method string getBackupPlanName()
 * @method string getOSSBucketName()
 * @method string getRegion()
 * @method string getSourceEndpointRegion()
 * @method string getSourceEndpointInstanceID()
 * @method string getClientToken()
 * @method string getBackupPlanId()
 * @method string getInstanceClass()
 * @method string getSourceEndpointDatabaseName()
 * @method string getDuplicationInfrequentAccessPeriod()
 * @method string getInstanceType()
 * @method string getEnableBackupLog()
 * @method string getCrossAliyunId()
 * @method string getBackupObjects()
 * @method string getBackupRateLimit()
 * @method string getUsedTime()
 * @method string getSourceEndpointPort()
 * @method string getStorageRegion()
 * @method string getSourceEndpointOracleSID()
 * @method string getBackupStrategyType()
 * @method string getPayType()
 */
class CreateAndStartBackupPlanRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Dbs',
            '2019-03-06',
            'CreateAndStartBackupPlan',
            'cbs'
        );
    }

    /**
     * @param string $databaseType
     *
     * @return $this
     */
    public function setDatabaseType($databaseType)
    {
        $this->requestParameters['DatabaseType'] = $databaseType;
        $this->queryParameters['DatabaseType'] = $databaseType;

        return $this;
    }

    /**
     * @param string $backupGatewayId
     *
     * @return $this
     */
    public function setBackupGatewayId($backupGatewayId)
    {
        $this->requestParameters['BackupGatewayId'] = $backupGatewayId;
        $this->queryParameters['BackupGatewayId'] = $backupGatewayId;

        return $this;
    }

    /**
     * @param string $sourceEndpointUserName
     *
     * @return $this
     */
    public function setSourceEndpointUserName($sourceEndpointUserName)
    {
        $this->requestParameters['SourceEndpointUserName'] = $sourceEndpointUserName;
        $this->queryParameters['SourceEndpointUserName'] = $sourceEndpointUserName;

        return $this;
    }

    /**
     * @param string $storageType
     *
     * @return $this
     */
    public function setStorageType($storageType)
    {
        $this->requestParameters['StorageType'] = $storageType;
        $this->queryParameters['StorageType'] = $storageType;

        return $this;
    }

    /**
     * @param string $databaseRegion
     *
     * @return $this
     */
    public function setDatabaseRegion($databaseRegion)
    {
        $this->requestParameters['DatabaseRegion'] = $databaseRegion;
        $this->queryParameters['DatabaseRegion'] = $databaseRegion;

        return $this;
    }

    /**
     * @param string $backupStartTime
     *
     * @return $this
     */
    public function setBackupStartTime($backupStartTime)
    {
        $this->requestParameters['BackupStartTime'] = $backupStartTime;
        $this->queryParameters['BackupStartTime'] = $backupStartTime;

        return $this;
    }

    /**
     * @param string $sourceEndpointIP
     *
     * @return $this
     */
    public function setSourceEndpointIP($sourceEndpointIP)
    {
        $this->requestParameters['SourceEndpointIP'] = $sourceEndpointIP;
        $this->queryParameters['SourceEndpointIP'] = $sourceEndpointIP;

        return $this;
    }

    /**
     * @param string $crossRoleName
     *
     * @return $this
     */
    public function setCrossRoleName($crossRoleName)
    {
        $this->requestParameters['CrossRoleName'] = $crossRoleName;
        $this->queryParameters['CrossRoleName'] = $crossRoleName;

        return $this;
    }

    /**
     * @param string $backupStorageType
     *
     * @return $this
     */
    public function setBackupStorageType($backupStorageType)
    {
        $this->requestParameters['BackupStorageType'] = $backupStorageType;
        $this->queryParameters['BackupStorageType'] = $backupStorageType;

        return $this;
    }

    /**
     * @param string $duplicationArchivePeriod
     *
     * @return $this
     */
    public function setDuplicationArchivePeriod($duplicationArchivePeriod)
    {
        $this->requestParameters['DuplicationArchivePeriod'] = $duplicationArchivePeriod;
        $this->queryParameters['DuplicationArchivePeriod'] = $duplicationArchivePeriod;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $backupLogIntervalSeconds
     *
     * @return $this
     */
    public function setBackupLogIntervalSeconds($backupLogIntervalSeconds)
    {
        $this->requestParameters['BackupLogIntervalSeconds'] = $backupLogIntervalSeconds;
        $this->queryParameters['BackupLogIntervalSeconds'] = $backupLogIntervalSeconds;

        return $this;
    }

    /**
     * @param string $fromApp
     *
     * @return $this
     */
    public function setFromApp($fromApp)
    {
        $this->requestParameters['FromApp'] = $fromApp;
        $this->queryParameters['FromApp'] = $fromApp;

        return $this;
    }

    /**
     * @param string $sourceEndpointPassword
     *
     * @return $this
     */
    public function setSourceEndpointPassword($sourceEndpointPassword)
    {
        $this->requestParameters['SourceEndpointPassword'] = $sourceEndpointPassword;
        $this->queryParameters['SourceEndpointPassword'] = $sourceEndpointPassword;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $backupMethod
     *
     * @return $this
     */
    public function setBackupMethod($backupMethod)
    {
        $this->requestParameters['BackupMethod'] = $backupMethod;
        $this->queryParameters['BackupMethod'] = $backupMethod;

        return $this;
    }

    /**
     * @param string $backupRetentionPeriod
     *
     * @return $this
     */
    public function setBackupRetentionPeriod($backupRetentionPeriod)
    {
        $this->requestParameters['BackupRetentionPeriod'] = $backupRetentionPeriod;
        $this->queryParameters['BackupRetentionPeriod'] = $backupRetentionPeriod;

        return $this;
    }

    /**
     * @param string $backupPeriod
     *
     * @return $this
     */
    public function setBackupPeriod($backupPeriod)
    {
        $this->requestParameters['BackupPeriod'] = $backupPeriod;
        $this->queryParameters['BackupPeriod'] = $backupPeriod;

        return $this;
    }

    /**
     * @param string $backupSpeedLimit
     *
     * @return $this
     */
    public function setBackupSpeedLimit($backupSpeedLimit)
    {
        $this->requestParameters['BackupSpeedLimit'] = $backupSpeedLimit;
        $this->queryParameters['BackupSpeedLimit'] = $backupSpeedLimit;

        return $this;
    }

    /**
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function setSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        $this->requestParameters['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;
        $this->queryParameters['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;

        return $this;
    }

    /**
     * @param string $backupPlanName
     *
     * @return $this
     */
    public function setBackupPlanName($backupPlanName)
    {
        $this->requestParameters['BackupPlanName'] = $backupPlanName;
        $this->queryParameters['BackupPlanName'] = $backupPlanName;

        return $this;
    }

    /**
     * @param string $oSSBucketName
     *
     * @return $this
     */
    public function setOSSBucketName($oSSBucketName)
    {
        $this->requestParameters['OSSBucketName'] = $oSSBucketName;
        $this->queryParameters['OSSBucketName'] = $oSSBucketName;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }

    /**
     * @param string $sourceEndpointRegion
     *
     * @return $this
     */
    public function setSourceEndpointRegion($sourceEndpointRegion)
    {
        $this->requestParameters['SourceEndpointRegion'] = $sourceEndpointRegion;
        $this->queryParameters['SourceEndpointRegion'] = $sourceEndpointRegion;

        return $this;
    }

    /**
     * @param string $sourceEndpointInstanceID
     *
     * @return $this
     */
    public function setSourceEndpointInstanceID($sourceEndpointInstanceID)
    {
        $this->requestParameters['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;
        $this->queryParameters['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $backupPlanId
     *
     * @return $this
     */
    public function setBackupPlanId($backupPlanId)
    {
        $this->requestParameters['BackupPlanId'] = $backupPlanId;
        $this->queryParameters['BackupPlanId'] = $backupPlanId;

        return $this;
    }

    /**
     * @param string $instanceClass
     *
     * @return $this
     */
    public function setInstanceClass($instanceClass)
    {
        $this->requestParameters['InstanceClass'] = $instanceClass;
        $this->queryParameters['InstanceClass'] = $instanceClass;

        return $this;
    }

    /**
     * @param string $sourceEndpointDatabaseName
     *
     * @return $this
     */
    public function setSourceEndpointDatabaseName($sourceEndpointDatabaseName)
    {
        $this->requestParameters['SourceEndpointDatabaseName'] = $sourceEndpointDatabaseName;
        $this->queryParameters['SourceEndpointDatabaseName'] = $sourceEndpointDatabaseName;

        return $this;
    }

    /**
     * @param string $duplicationInfrequentAccessPeriod
     *
     * @return $this
     */
    public function setDuplicationInfrequentAccessPeriod($duplicationInfrequentAccessPeriod)
    {
        $this->requestParameters['DuplicationInfrequentAccessPeriod'] = $duplicationInfrequentAccessPeriod;
        $this->queryParameters['DuplicationInfrequentAccessPeriod'] = $duplicationInfrequentAccessPeriod;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $enableBackupLog
     *
     * @return $this
     */
    public function setEnableBackupLog($enableBackupLog)
    {
        $this->requestParameters['EnableBackupLog'] = $enableBackupLog;
        $this->queryParameters['EnableBackupLog'] = $enableBackupLog;

        return $this;
    }

    /**
     * @param string $crossAliyunId
     *
     * @return $this
     */
    public function setCrossAliyunId($crossAliyunId)
    {
        $this->requestParameters['CrossAliyunId'] = $crossAliyunId;
        $this->queryParameters['CrossAliyunId'] = $crossAliyunId;

        return $this;
    }

    /**
     * @param string $backupObjects
     *
     * @return $this
     */
    public function setBackupObjects($backupObjects)
    {
        $this->requestParameters['BackupObjects'] = $backupObjects;
        $this->queryParameters['BackupObjects'] = $backupObjects;

        return $this;
    }

    /**
     * @param string $backupRateLimit
     *
     * @return $this
     */
    public function setBackupRateLimit($backupRateLimit)
    {
        $this->requestParameters['BackupRateLimit'] = $backupRateLimit;
        $this->queryParameters['BackupRateLimit'] = $backupRateLimit;

        return $this;
    }

    /**
     * @param string $usedTime
     *
     * @return $this
     */
    public function setUsedTime($usedTime)
    {
        $this->requestParameters['UsedTime'] = $usedTime;
        $this->queryParameters['UsedTime'] = $usedTime;

        return $this;
    }

    /**
     * @param string $sourceEndpointPort
     *
     * @return $this
     */
    public function setSourceEndpointPort($sourceEndpointPort)
    {
        $this->requestParameters['SourceEndpointPort'] = $sourceEndpointPort;
        $this->queryParameters['SourceEndpointPort'] = $sourceEndpointPort;

        return $this;
    }

    /**
     * @param string $storageRegion
     *
     * @return $this
     */
    public function setStorageRegion($storageRegion)
    {
        $this->requestParameters['StorageRegion'] = $storageRegion;
        $this->queryParameters['StorageRegion'] = $storageRegion;

        return $this;
    }

    /**
     * @param string $sourceEndpointOracleSID
     *
     * @return $this
     */
    public function setSourceEndpointOracleSID($sourceEndpointOracleSID)
    {
        $this->requestParameters['SourceEndpointOracleSID'] = $sourceEndpointOracleSID;
        $this->queryParameters['SourceEndpointOracleSID'] = $sourceEndpointOracleSID;

        return $this;
    }

    /**
     * @param string $backupStrategyType
     *
     * @return $this
     */
    public function setBackupStrategyType($backupStrategyType)
    {
        $this->requestParameters['BackupStrategyType'] = $backupStrategyType;
        $this->queryParameters['BackupStrategyType'] = $backupStrategyType;

        return $this;
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        $this->requestParameters['PayType'] = $payType;
        $this->queryParameters['PayType'] = $payType;

        return $this;
    }
}
