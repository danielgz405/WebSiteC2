<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/storage.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a Datastore property in a projection.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.Projection</code>
 */
class Projection extends \Google\Protobuf\Internal\Message
{
    /**
     * The property to project.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.PropertyReference property = 1;</code>
     */
    private $property = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        parent::__construct();
    }

    /**
     * The property to project.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.PropertyReference property = 1;</code>
     * @return \Google\Privacy\Dlp\V2beta1\PropertyReference
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * The property to project.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.PropertyReference property = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\PropertyReference $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\PropertyReference::class);
        $this->property = $var;

        return $this;
    }

}

