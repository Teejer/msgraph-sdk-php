<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewQueryScope extends AccessReviewScope implements Parsable 
{
    /**
     * Instantiates a new accessReviewQueryScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewQueryScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewQueryScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewQueryScope {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.accessReviewInactiveUsersQueryScope': return new AccessReviewInactiveUsersQueryScope();
            }
        }
        return new AccessReviewQueryScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'query' => fn(ParseNode $n) => $o->setQuery($n->getStringValue()),
            'queryRoot' => fn(ParseNode $n) => $o->setQueryRoot($n->getStringValue()),
            'queryType' => fn(ParseNode $n) => $o->setQueryType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the query property value. The query representing what will be reviewed in an access review.
     * @return string|null
    */
    public function getQuery(): ?string {
        $val = $this->getBackingStore()->get('query');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'query'");
    }

    /**
     * Gets the queryRoot property value. In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query is specified. For example, ./manager.
     * @return string|null
    */
    public function getQueryRoot(): ?string {
        $val = $this->getBackingStore()->get('queryRoot');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'queryRoot'");
    }

    /**
     * Gets the queryType property value. Indicates the type of query. Types include MicrosoftGraph and ARM.
     * @return string|null
    */
    public function getQueryType(): ?string {
        $val = $this->getBackingStore()->get('queryType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'queryType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('query', $this->getQuery());
        $writer->writeStringValue('queryRoot', $this->getQueryRoot());
        $writer->writeStringValue('queryType', $this->getQueryType());
    }

    /**
     * Sets the query property value. The query representing what will be reviewed in an access review.
     * @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value): void {
        $this->getBackingStore()->set('query', $value);
    }

    /**
     * Sets the queryRoot property value. In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query is specified. For example, ./manager.
     * @param string|null $value Value to set for the queryRoot property.
    */
    public function setQueryRoot(?string $value): void {
        $this->getBackingStore()->set('queryRoot', $value);
    }

    /**
     * Sets the queryType property value. Indicates the type of query. Types include MicrosoftGraph and ARM.
     * @param string|null $value Value to set for the queryType property.
    */
    public function setQueryType(?string $value): void {
        $this->getBackingStore()->set('queryType', $value);
    }

}
