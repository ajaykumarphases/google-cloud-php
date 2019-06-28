<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace Google\Cloud\OsLogin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for updating an SSH public key.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1.UpdateSshPublicKeyRequest</code>
 */
final class UpdateSshPublicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The fingerprint of the public key to update. Public keys are identified by
     * their SHA-256 fingerprint. The fingerprint of the public key is in format
     * `users/{user}/sshPublicKeys/{fingerprint}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2;</code>
     */
    private $ssh_public_key = null;
    /**
     * Mask to control which fields get updated. Updates all if not present.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The fingerprint of the public key to update. Public keys are identified by
     *           their SHA-256 fingerprint. The fingerprint of the public key is in format
     *           `users/{user}/sshPublicKeys/{fingerprint}`.
     *     @type \Google\Cloud\OsLogin\Common\SshPublicKey $ssh_public_key
     *           The SSH public key and expiration time.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Mask to control which fields get updated. Updates all if not present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * The fingerprint of the public key to update. Public keys are identified by
     * their SHA-256 fingerprint. The fingerprint of the public key is in format
     * `users/{user}/sshPublicKeys/{fingerprint}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The fingerprint of the public key to update. Public keys are identified by
     * their SHA-256 fingerprint. The fingerprint of the public key is in format
     * `users/{user}/sshPublicKeys/{fingerprint}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2;</code>
     * @return \Google\Cloud\OsLogin\Common\SshPublicKey
     */
    public function getSshPublicKey()
    {
        return $this->ssh_public_key;
    }

    /**
     * The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2;</code>
     * @param \Google\Cloud\OsLogin\Common\SshPublicKey $var
     * @return $this
     */
    public function setSshPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsLogin\Common\SshPublicKey::class);
        $this->ssh_public_key = $var;

        return $this;
    }

    /**
     * Mask to control which fields get updated. Updates all if not present.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Mask to control which fields get updated. Updates all if not present.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

