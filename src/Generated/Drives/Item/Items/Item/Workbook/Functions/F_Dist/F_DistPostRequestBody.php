<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\F_Dist;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class F_DistPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new f_DistPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return F_DistPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): F_DistPostRequestBody {
        return new F_DistPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cumulative property value. The cumulative property
     * @return Json|null
    */
    public function getCumulative(): ?Json {
        $val = $this->getBackingStore()->get('cumulative');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cumulative'");
    }

    /**
     * Gets the degFreedom1 property value. The degFreedom1 property
     * @return Json|null
    */
    public function getDegFreedom1(): ?Json {
        $val = $this->getBackingStore()->get('degFreedom1');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'degFreedom1'");
    }

    /**
     * Gets the degFreedom2 property value. The degFreedom2 property
     * @return Json|null
    */
    public function getDegFreedom2(): ?Json {
        $val = $this->getBackingStore()->get('degFreedom2');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'degFreedom2'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cumulative' => fn(ParseNode $n) => $o->setCumulative($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'degFreedom1' => fn(ParseNode $n) => $o->setDegFreedom1($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'degFreedom2' => fn(ParseNode $n) => $o->setDegFreedom2($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'x' => fn(ParseNode $n) => $o->setX($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the x property value. The x property
     * @return Json|null
    */
    public function getX(): ?Json {
        $val = $this->getBackingStore()->get('x');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'x'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('cumulative', $this->getCumulative());
        $writer->writeObjectValue('degFreedom1', $this->getDegFreedom1());
        $writer->writeObjectValue('degFreedom2', $this->getDegFreedom2());
        $writer->writeObjectValue('x', $this->getX());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cumulative property value. The cumulative property
     * @param Json|null $value Value to set for the cumulative property.
    */
    public function setCumulative(?Json $value): void {
        $this->getBackingStore()->set('cumulative', $value);
    }

    /**
     * Sets the degFreedom1 property value. The degFreedom1 property
     * @param Json|null $value Value to set for the degFreedom1 property.
    */
    public function setDegFreedom1(?Json $value): void {
        $this->getBackingStore()->set('degFreedom1', $value);
    }

    /**
     * Sets the degFreedom2 property value. The degFreedom2 property
     * @param Json|null $value Value to set for the degFreedom2 property.
    */
    public function setDegFreedom2(?Json $value): void {
        $this->getBackingStore()->set('degFreedom2', $value);
    }

    /**
     * Sets the x property value. The x property
     * @param Json|null $value Value to set for the x property.
    */
    public function setX(?Json $value): void {
        $this->getBackingStore()->set('x', $value);
    }

}
