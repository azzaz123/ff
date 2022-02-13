<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_room.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.UpdateParticipantRequest</code>
 */
class UpdateParticipantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string room = 1;</code>
     */
    private $room = '';
    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     */
    private $identity = '';
    /**
     * metadata to update. skipping updates if left empty
     *
     * Generated from protobuf field <code>string metadata = 3;</code>
     */
    private $metadata = '';
    /**
     * set to update the participant's permissions
     *
     * Generated from protobuf field <code>.livekit.ParticipantPermission permission = 4;</code>
     */
    private $permission = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $room
     *     @type string $identity
     *     @type string $metadata
     *           metadata to update. skipping updates if left empty
     *     @type \Livekit\ParticipantPermission $permission
     *           set to update the participant's permissions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitRoom::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string room = 1;</code>
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Generated from protobuf field <code>string room = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRoom($var)
    {
        GPBUtil::checkString($var, True);
        $this->room = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * metadata to update. skipping updates if left empty
     *
     * Generated from protobuf field <code>string metadata = 3;</code>
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * metadata to update. skipping updates if left empty
     *
     * Generated from protobuf field <code>string metadata = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata = $var;

        return $this;
    }

    /**
     * set to update the participant's permissions
     *
     * Generated from protobuf field <code>.livekit.ParticipantPermission permission = 4;</code>
     * @return \Livekit\ParticipantPermission
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * set to update the participant's permissions
     *
     * Generated from protobuf field <code>.livekit.ParticipantPermission permission = 4;</code>
     * @param \Livekit\ParticipantPermission $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkMessage($var, \Livekit\ParticipantPermission::class);
        $this->permission = $var;

        return $this;
    }

}
