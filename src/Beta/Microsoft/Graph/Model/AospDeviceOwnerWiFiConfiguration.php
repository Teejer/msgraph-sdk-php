<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AospDeviceOwnerWiFiConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AospDeviceOwnerWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AospDeviceOwnerWiFiConfiguration extends DeviceConfiguration
{
    /**
    * Gets the connectAutomatically
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    *
    * @return bool|null The connectAutomatically
    */
    public function getConnectAutomatically()
    {
        if (array_key_exists("connectAutomatically", $this->_propDict)) {
            return $this->_propDict["connectAutomatically"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectAutomatically
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    *
    * @param bool $val The connectAutomatically
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setConnectAutomatically($val)
    {
        $this->_propDict["connectAutomatically"] = boolval($val);
        return $this;
    }

    /**
    * Gets the connectWhenNetworkNameIsHidden
    * When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    *
    * @return bool|null The connectWhenNetworkNameIsHidden
    */
    public function getConnectWhenNetworkNameIsHidden()
    {
        if (array_key_exists("connectWhenNetworkNameIsHidden", $this->_propDict)) {
            return $this->_propDict["connectWhenNetworkNameIsHidden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectWhenNetworkNameIsHidden
    * When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    *
    * @param bool $val The connectWhenNetworkNameIsHidden
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setConnectWhenNetworkNameIsHidden($val)
    {
        $this->_propDict["connectWhenNetworkNameIsHidden"] = boolval($val);
        return $this;
    }

    /**
    * Gets the networkName
    * Network Name
    *
    * @return string|null The networkName
    */
    public function getNetworkName()
    {
        if (array_key_exists("networkName", $this->_propDict)) {
            return $this->_propDict["networkName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkName
    * Network Name
    *
    * @param string $val The networkName
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setNetworkName($val)
    {
        $this->_propDict["networkName"] = $val;
        return $this;
    }

    /**
    * Gets the preSharedKey
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @return string|null The preSharedKey
    */
    public function getPreSharedKey()
    {
        if (array_key_exists("preSharedKey", $this->_propDict)) {
            return $this->_propDict["preSharedKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preSharedKey
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @param string $val The preSharedKey
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setPreSharedKey($val)
    {
        $this->_propDict["preSharedKey"] = $val;
        return $this;
    }

    /**
    * Gets the preSharedKeyIsSet
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @return bool|null The preSharedKeyIsSet
    */
    public function getPreSharedKeyIsSet()
    {
        if (array_key_exists("preSharedKeyIsSet", $this->_propDict)) {
            return $this->_propDict["preSharedKeyIsSet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preSharedKeyIsSet
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @param bool $val The preSharedKeyIsSet
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setPreSharedKeyIsSet($val)
    {
        $this->_propDict["preSharedKeyIsSet"] = boolval($val);
        return $this;
    }

    /**
    * Gets the proxyAutomaticConfigurationUrl
    * Specify the proxy server configuration script URL.
    *
    * @return string|null The proxyAutomaticConfigurationUrl
    */
    public function getProxyAutomaticConfigurationUrl()
    {
        if (array_key_exists("proxyAutomaticConfigurationUrl", $this->_propDict)) {
            return $this->_propDict["proxyAutomaticConfigurationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyAutomaticConfigurationUrl
    * Specify the proxy server configuration script URL.
    *
    * @param string $val The proxyAutomaticConfigurationUrl
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setProxyAutomaticConfigurationUrl($val)
    {
        $this->_propDict["proxyAutomaticConfigurationUrl"] = $val;
        return $this;
    }

    /**
    * Gets the proxyExclusionList
    * List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as *.example.com.
    *
    * @return array|null The proxyExclusionList
    */
    public function getProxyExclusionList()
    {
        if (array_key_exists("proxyExclusionList", $this->_propDict)) {
            return $this->_propDict["proxyExclusionList"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyExclusionList
    * List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as *.example.com.
    *
    * @param string[] $val The proxyExclusionList
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setProxyExclusionList($val)
    {
        $this->_propDict["proxyExclusionList"] = $val;
        return $this;
    }

    /**
    * Gets the proxyManualAddress
    * Specify the proxy server IP address. Both IPv4 and IPv6 addresses are supported. For example: 192.168.1.1.
    *
    * @return string|null The proxyManualAddress
    */
    public function getProxyManualAddress()
    {
        if (array_key_exists("proxyManualAddress", $this->_propDict)) {
            return $this->_propDict["proxyManualAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyManualAddress
    * Specify the proxy server IP address. Both IPv4 and IPv6 addresses are supported. For example: 192.168.1.1.
    *
    * @param string $val The proxyManualAddress
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setProxyManualAddress($val)
    {
        $this->_propDict["proxyManualAddress"] = $val;
        return $this;
    }

    /**
    * Gets the proxyManualPort
    * Specify the proxy server port.
    *
    * @return int|null The proxyManualPort
    */
    public function getProxyManualPort()
    {
        if (array_key_exists("proxyManualPort", $this->_propDict)) {
            return $this->_propDict["proxyManualPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyManualPort
    * Specify the proxy server port.
    *
    * @param int $val The proxyManualPort
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setProxyManualPort($val)
    {
        $this->_propDict["proxyManualPort"] = intval($val);
        return $this;
    }

    /**
    * Gets the proxySetting
    * Specify the proxy setting for Wi-Fi configuration. Possible values include none, manual, and automatic.
    *
    * @return WiFiProxySetting|null The proxySetting
    */
    public function getProxySetting()
    {
        if (array_key_exists("proxySetting", $this->_propDict)) {
            if (is_a($this->_propDict["proxySetting"], "\Beta\Microsoft\Graph\Model\WiFiProxySetting") || is_null($this->_propDict["proxySetting"])) {
                return $this->_propDict["proxySetting"];
            } else {
                $this->_propDict["proxySetting"] = new WiFiProxySetting($this->_propDict["proxySetting"]);
                return $this->_propDict["proxySetting"];
            }
        }
        return null;
    }

    /**
    * Sets the proxySetting
    * Specify the proxy setting for Wi-Fi configuration. Possible values include none, manual, and automatic.
    *
    * @param WiFiProxySetting $val The proxySetting
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setProxySetting($val)
    {
        $this->_propDict["proxySetting"] = $val;
        return $this;
    }

    /**
    * Gets the ssid
    * This is the name of the Wi-Fi network that is broadcast to all devices.
    *
    * @return string|null The ssid
    */
    public function getSsid()
    {
        if (array_key_exists("ssid", $this->_propDict)) {
            return $this->_propDict["ssid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ssid
    * This is the name of the Wi-Fi network that is broadcast to all devices.
    *
    * @param string $val The ssid
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setSsid($val)
    {
        $this->_propDict["ssid"] = $val;
        return $this;
    }

    /**
    * Gets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wep, wpaPersonal, wpaEnterprise.
    *
    * @return AospDeviceOwnerWiFiSecurityType|null The wiFiSecurityType
    */
    public function getWiFiSecurityType()
    {
        if (array_key_exists("wiFiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wiFiSecurityType"], "\Beta\Microsoft\Graph\Model\AospDeviceOwnerWiFiSecurityType") || is_null($this->_propDict["wiFiSecurityType"])) {
                return $this->_propDict["wiFiSecurityType"];
            } else {
                $this->_propDict["wiFiSecurityType"] = new AospDeviceOwnerWiFiSecurityType($this->_propDict["wiFiSecurityType"]);
                return $this->_propDict["wiFiSecurityType"];
            }
        }
        return null;
    }

    /**
    * Sets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wep, wpaPersonal, wpaEnterprise.
    *
    * @param AospDeviceOwnerWiFiSecurityType $val The wiFiSecurityType
    *
    * @return AospDeviceOwnerWiFiConfiguration
    */
    public function setWiFiSecurityType($val)
    {
        $this->_propDict["wiFiSecurityType"] = $val;
        return $this;
    }

}
