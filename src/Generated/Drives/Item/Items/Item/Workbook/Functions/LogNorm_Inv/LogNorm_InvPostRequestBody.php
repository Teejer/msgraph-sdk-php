<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\LogNorm_Inv;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LogNorm_InvPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new logNorm_InvPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LogNorm_InvPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LogNorm_InvPostRequestBody {
        return new LogNorm_InvPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'mean' => fn(ParseNode $n) => $o->setMean($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'probability' => fn(ParseNode $n) => $o->setProbability($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'standardDev' => fn(ParseNode $n) => $o->setStandardDev($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the mean property value. The mean property
     * @return Json|null
    */
    public function getMean(): ?Json {
        $val = $this->getBackingStore()->get('mean');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mean'");
    }

    /**
     * Gets the probability property value. The probability property
     * @return Json|null
    */
    public function getProbability(): ?Json {
        $val = $this->getBackingStore()->get('probability');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'probability'");
    }

    /**
     * Gets the standardDev property value. The standardDev property
     * @return Json|null
    */
    public function getStandardDev(): ?Json {
        $val = $this->getBackingStore()->get('standardDev');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'standardDev'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('mean', $this->getMean());
        $writer->writeObjectValue('probability', $this->getProbability());
        $writer->writeObjectValue('standardDev', $this->getStandardDev());
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
     * Sets the mean property value. The mean property
     * @param Json|null $value Value to set for the mean property.
    */
    public function setMean(?Json $value): void {
        $this->getBackingStore()->set('mean', $value);
    }

    /**
     * Sets the probability property value. The probability property
     * @param Json|null $value Value to set for the probability property.
    */
    public function setProbability(?Json $value): void {
        $this->getBackingStore()->set('probability', $value);
    }

    /**
     * Sets the standardDev property value. The standardDev property
     * @param Json|null $value Value to set for the standardDev property.
    */
    public function setStandardDev(?Json $value): void {
        $this->getBackingStore()->set('standardDev', $value);
    }

}
