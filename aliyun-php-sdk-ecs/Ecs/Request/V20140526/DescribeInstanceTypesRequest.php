<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeInstanceTypes
 *
 * @method string getResourceOwnerId()
 * @method array getInstanceTypess()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getInstanceTypeFamily()
 * @method string getOwnerId()
 */
class DescribeInstanceTypesRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'DescribeInstanceTypes',
            'ecs'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function setInstanceTypess(array $instanceTypes)
	{
	    $this->requestParameters['InstanceTypess'] = $instanceTypes;
		foreach ($instanceTypes as $i => $iValue) {
			$this->queryParameters['InstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function setInstanceTypeFamily($instanceTypeFamily)
    {
        $this->requestParameters['InstanceTypeFamily'] = $instanceTypeFamily;
        $this->queryParameters['InstanceTypeFamily'] = $instanceTypeFamily;

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
}
