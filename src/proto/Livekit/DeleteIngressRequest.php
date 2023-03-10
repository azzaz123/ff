<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_ingress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.DeleteIngressRequest</code>
 */
class DeleteIngressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ingress_id = 1;</code>
     */
    protected $ingress_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ingress_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitIngress::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ingress_id = 1;</code>
     * @return string
     */
    public function getIngressId()
    {
        return $this->ingress_id;
    }

    /**
     * Generated from protobuf field <code>string ingress_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIngressId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ingress_id = $var;

        return $this;
    }

}

