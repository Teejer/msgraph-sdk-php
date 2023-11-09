<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CallRoute implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new callRoute and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallRoute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallRoute {
        return new CallRoute();
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
     * Gets the final property value. The final property
     * @return IdentitySet|null
    */
    public function getEscapedFinal(): ?IdentitySet {
        $val = $this->getBackingStore()->get('escapedFinal');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedFinal'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'final' => fn(ParseNode $n) => $o->setEscapedFinal($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'original' => fn(ParseNode $n) => $o->setOriginal($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'routingType' => fn(ParseNode $n) => $o->setRoutingType($n->getEnumValue(RoutingType::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the original property value. The original property
     * @return IdentitySet|null
    */
    public function getOriginal(): ?IdentitySet {
        $val = $this->getBackingStore()->get('original');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'original'");
    }

    /**
     * Gets the routingType property value. The routingType property
     * @return RoutingType|null
    */
    public function getRoutingType(): ?RoutingType {
        $val = $this->getBackingStore()->get('routingType');
        if (is_null($val) || $val instanceof RoutingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'routingType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('final', $this->getEscapedFinal());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('original', $this->getOriginal());
        $writer->writeEnumValue('routingType', $this->getRoutingType());
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
     * Sets the final property value. The final property
     * @param IdentitySet|null $value Value to set for the final property.
    */
    public function setEscapedFinal(?IdentitySet $value): void {
        $this->getBackingStore()->set('escapedFinal', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the original property value. The original property
     * @param IdentitySet|null $value Value to set for the original property.
    */
    public function setOriginal(?IdentitySet $value): void {
        $this->getBackingStore()->set('original', $value);
    }

    /**
     * Sets the routingType property value. The routingType property
     * @param RoutingType|null $value Value to set for the routingType property.
    */
    public function setRoutingType(?RoutingType $value): void {
        $this->getBackingStore()->set('routingType', $value);
    }

}
