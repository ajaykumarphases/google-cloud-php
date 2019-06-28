<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace Google\Cloud\OsLogin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for importing an SSH public key.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1.ImportSshPublicKeyResponse</code>
 */
final class ImportSshPublicKeyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The login profile information for the user.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.v1.LoginProfile login_profile = 1;</code>
     */
    private $login_profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsLogin\V1\LoginProfile $login_profile
     *           The login profile information for the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * The login profile information for the user.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.v1.LoginProfile login_profile = 1;</code>
     * @return \Google\Cloud\OsLogin\V1\LoginProfile
     */
    public function getLoginProfile()
    {
        return $this->login_profile;
    }

    /**
     * The login profile information for the user.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.v1.LoginProfile login_profile = 1;</code>
     * @param \Google\Cloud\OsLogin\V1\LoginProfile $var
     * @return $this
     */
    public function setLoginProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsLogin\V1\LoginProfile::class);
        $this->login_profile = $var;

        return $this;
    }

}

