<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateAuditRange
 *
 * @method string getAuditRange()
 * @method string getSourceIp()
 */
class UpdateAuditRangeRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'UpdateAuditRange',
            'green'
        );
    }

    /**
     * @param string $auditRange
     *
     * @return $this
     */
    public function setAuditRange($auditRange)
    {
        $this->requestParameters['AuditRange'] = $auditRange;
        $this->queryParameters['AuditRange'] = $auditRange;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }
}
