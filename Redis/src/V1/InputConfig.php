<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The input content
 *
 * Generated from protobuf message <code>google.cloud.redis.v1.InputConfig</code>
 */
final class InputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Redis\V1\GcsSource $gcs_source
     *           Google Cloud Storage location where input content is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Google Cloud Storage location where input content is located.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.GcsSource gcs_source = 1;</code>
     * @return \Google\Cloud\Redis\V1\GcsSource
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    /**
     * Google Cloud Storage location where input content is located.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.GcsSource gcs_source = 1;</code>
     * @param \Google\Cloud\Redis\V1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\V1\GcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

