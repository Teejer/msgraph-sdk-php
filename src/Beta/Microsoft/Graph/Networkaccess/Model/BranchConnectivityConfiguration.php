<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BranchConnectivityConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* BranchConnectivityConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BranchConnectivityConfiguration implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new BranchConnectivityConfiguration
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the BranchConnectivityConfiguration
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the branchId
    * Unique identifier or a specific reference assigned to a branchSite. Key.
    *
    * @return string|null The branchId
    */
    public function getBranchId()
    {
        if (array_key_exists("branchId", $this->_propDict)) {
            return $this->_propDict["branchId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the branchId
    * Unique identifier or a specific reference assigned to a branchSite. Key.
    *
    * @param string $val The branchId
    *
    * @return BranchConnectivityConfiguration
    */
    public function setBranchId($val)
    {
        $this->_propDict["branchId"] = $val;
        return $this;
    }

    /**
    * Gets the branchName
    * Display name assigned to a branchSite.
    *
    * @return string|null The branchName
    */
    public function getBranchName()
    {
        if (array_key_exists("branchName", $this->_propDict)) {
            return $this->_propDict["branchName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the branchName
    * Display name assigned to a branchSite.
    *
    * @param string $val The branchName
    *
    * @return BranchConnectivityConfiguration
    */
    public function setBranchName($val)
    {
        $this->_propDict["branchName"] = $val;
        return $this;
    }


     /**
     * Gets the links
    * List of connectivity configurations for deviceLink objects.
     *
     * @return array|null The links
     */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
           return $this->_propDict["links"];
        } else {
            return null;
        }
    }

    /**
    * Sets the links
    * List of connectivity configurations for deviceLink objects.
    *
    * @param ConnectivityConfigurationLink[] $val The links
    *
    * @return BranchConnectivityConfiguration
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return BranchConnectivityConfiguration
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
