<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessGuestsOrExternalUsers implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessGuestsOrExternalUsers and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessGuestsOrExternalUsers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessGuestsOrExternalUsers {
        return new ConditionalAccessGuestsOrExternalUsers();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the externalTenants property value. The externalTenants property
     * @return ConditionalAccessExternalTenants|null
    */
    public function getExternalTenants(): ?ConditionalAccessExternalTenants {
        return $this->getBackingStore()->get('externalTenants');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalTenants' => fn(ParseNode $n) => $o->setExternalTenants($n->getObjectValue([ConditionalAccessExternalTenants::class, 'createFromDiscriminatorValue'])),
            'guestOrExternalUserTypes' => fn(ParseNode $n) => $o->setGuestOrExternalUserTypes($n->getEnumValue(ConditionalAccessGuestOrExternalUserTypes::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the guestOrExternalUserTypes property value. The guestOrExternalUserTypes property
     * @return ConditionalAccessGuestOrExternalUserTypes|null
    */
    public function getGuestOrExternalUserTypes(): ?ConditionalAccessGuestOrExternalUserTypes {
        return $this->getBackingStore()->get('guestOrExternalUserTypes');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('externalTenants', $this->getExternalTenants());
        $writer->writeEnumValue('guestOrExternalUserTypes', $this->getGuestOrExternalUserTypes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the externalTenants property value. The externalTenants property
     * @param ConditionalAccessExternalTenants|null $value Value to set for the externalTenants property.
    */
    public function setExternalTenants(?ConditionalAccessExternalTenants $value): void {
        $this->getBackingStore()->set('externalTenants', $value);
    }

    /**
     * Sets the guestOrExternalUserTypes property value. The guestOrExternalUserTypes property
     * @param ConditionalAccessGuestOrExternalUserTypes|null $value Value to set for the guestOrExternalUserTypes property.
    */
    public function setGuestOrExternalUserTypes(?ConditionalAccessGuestOrExternalUserTypes $value): void {
        $this->getBackingStore()->set('guestOrExternalUserTypes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
