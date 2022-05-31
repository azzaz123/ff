<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_egress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * composite using a web browser
 *
 * Generated from protobuf message <code>livekit.RoomCompositeEgressRequest</code>
 */
class RoomCompositeEgressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * required
     *
     * Generated from protobuf field <code>string room_name = 1;</code>
     */
    protected $room_name = '';
    /**
     * (optional)
     *
     * Generated from protobuf field <code>string layout = 2;</code>
     */
    protected $layout = '';
    /**
     * (default false)
     *
     * Generated from protobuf field <code>bool audio_only = 3;</code>
     */
    protected $audio_only = false;
    /**
     * (default false)
     *
     * Generated from protobuf field <code>bool video_only = 4;</code>
     */
    protected $video_only = false;
    /**
     * (default https://recorder.livekit.io)
     *
     * Generated from protobuf field <code>string custom_base_url = 5;</code>
     */
    protected $custom_base_url = '';
    protected $output;
    protected $options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $room_name
     *           required
     *     @type string $layout
     *           (optional)
     *     @type bool $audio_only
     *           (default false)
     *     @type bool $video_only
     *           (default false)
     *     @type string $custom_base_url
     *           (default https://recorder.livekit.io)
     *     @type \Livekit\EncodedFileOutput $file
     *     @type \Livekit\StreamOutput $stream
     *     @type int $preset
     *           (default H264_720P_30)
     *     @type \Livekit\EncodingOptions $advanced
     *           (optional)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitEgress::initOnce();
        parent::__construct($data);
    }

    /**
     * required
     *
     * Generated from protobuf field <code>string room_name = 1;</code>
     * @return string
     */
    public function getRoomName()
    {
        return $this->room_name;
    }

    /**
     * required
     *
     * Generated from protobuf field <code>string room_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomName($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_name = $var;

        return $this;
    }

    /**
     * (optional)
     *
     * Generated from protobuf field <code>string layout = 2;</code>
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * (optional)
     *
     * Generated from protobuf field <code>string layout = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLayout($var)
    {
        GPBUtil::checkString($var, True);
        $this->layout = $var;

        return $this;
    }

    /**
     * (default false)
     *
     * Generated from protobuf field <code>bool audio_only = 3;</code>
     * @return bool
     */
    public function getAudioOnly()
    {
        return $this->audio_only;
    }

    /**
     * (default false)
     *
     * Generated from protobuf field <code>bool audio_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAudioOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->audio_only = $var;

        return $this;
    }

    /**
     * (default false)
     *
     * Generated from protobuf field <code>bool video_only = 4;</code>
     * @return bool
     */
    public function getVideoOnly()
    {
        return $this->video_only;
    }

    /**
     * (default false)
     *
     * Generated from protobuf field <code>bool video_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setVideoOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->video_only = $var;

        return $this;
    }

    /**
     * (default https://recorder.livekit.io)
     *
     * Generated from protobuf field <code>string custom_base_url = 5;</code>
     * @return string
     */
    public function getCustomBaseUrl()
    {
        return $this->custom_base_url;
    }

    /**
     * (default https://recorder.livekit.io)
     *
     * Generated from protobuf field <code>string custom_base_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomBaseUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_base_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodedFileOutput file = 6;</code>
     * @return \Livekit\EncodedFileOutput|null
     */
    public function getFile()
    {
        return $this->readOneof(6);
    }

    public function hasFile()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.livekit.EncodedFileOutput file = 6;</code>
     * @param \Livekit\EncodedFileOutput $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkMessage($var, \Livekit\EncodedFileOutput::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.StreamOutput stream = 7;</code>
     * @return \Livekit\StreamOutput|null
     */
    public function getStream()
    {
        return $this->readOneof(7);
    }

    public function hasStream()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.livekit.StreamOutput stream = 7;</code>
     * @param \Livekit\StreamOutput $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkMessage($var, \Livekit\StreamOutput::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * (default H264_720P_30)
     *
     * Generated from protobuf field <code>.livekit.EncodingOptionsPreset preset = 8;</code>
     * @return int
     */
    public function getPreset()
    {
        return $this->readOneof(8);
    }

    public function hasPreset()
    {
        return $this->hasOneof(8);
    }

    /**
     * (default H264_720P_30)
     *
     * Generated from protobuf field <code>.livekit.EncodingOptionsPreset preset = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPreset($var)
    {
        GPBUtil::checkEnum($var, \Livekit\EncodingOptionsPreset::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * (optional)
     *
     * Generated from protobuf field <code>.livekit.EncodingOptions advanced = 9;</code>
     * @return \Livekit\EncodingOptions|null
     */
    public function getAdvanced()
    {
        return $this->readOneof(9);
    }

    public function hasAdvanced()
    {
        return $this->hasOneof(9);
    }

    /**
     * (optional)
     *
     * Generated from protobuf field <code>.livekit.EncodingOptions advanced = 9;</code>
     * @param \Livekit\EncodingOptions $var
     * @return $this
     */
    public function setAdvanced($var)
    {
        GPBUtil::checkMessage($var, \Livekit\EncodingOptions::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->whichOneof("output");
    }

    /**
     * @return string
     */
    public function getOptions()
    {
        return $this->whichOneof("options");
    }

}
