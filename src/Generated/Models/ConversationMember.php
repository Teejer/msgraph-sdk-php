<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConversationMember extends Entity implements Parsable 
{
    /**
     * Instantiates a new conversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationMember {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.aadUserConversationMember': return new AadUserConversationMember();
                case '#microsoft.graph.anonymousGuestConversationMember': return new AnonymousGuestConversationMember();
                case '#microsoft.graph.microsoftAccountUserConversationMember': return new MicrosoftAccountUserConversationMember();
                case '#microsoft.graph.skypeForBusinessUserConversationMember': return new SkypeForBusinessUserConversationMember();
                case '#microsoft.graph.skypeUserConversationMember': return new SkypeUserConversationMember();
            }
        }
        return new ConversationMember();
    }

    /**
     * Gets the displayName property value. The display name of the user.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfPrimitiveValues()),
            'visibleHistoryStartDateTime' => fn(ParseNode $n) => $o->setVisibleHistoryStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the roles property value. The roles for that user. This property only contains additional qualifiers when relevant - for example, if the member has owner privileges, the roles property contains owner as one of the values. Similarly, if the member is a guest, the roles property contains guest as one of the values. A basic member should not have any values specified in the roles property.
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->getBackingStore()->get('roles');
    }

    /**
     * Gets the visibleHistoryStartDateTime property value. The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat.
     * @return DateTime|null
    */
    public function getVisibleHistoryStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('visibleHistoryStartDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('roles', $this->getRoles());
        $writer->writeDateTimeValue('visibleHistoryStartDateTime', $this->getVisibleHistoryStartDateTime());
    }

    /**
     * Sets the displayName property value. The display name of the user.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the roles property value. The roles for that user. This property only contains additional qualifiers when relevant - for example, if the member has owner privileges, the roles property contains owner as one of the values. Similarly, if the member is a guest, the roles property contains guest as one of the values. A basic member should not have any values specified in the roles property.
     * @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the visibleHistoryStartDateTime property value. The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat.
     * @param DateTime|null $value Value to set for the visibleHistoryStartDateTime property.
    */
    public function setVisibleHistoryStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('visibleHistoryStartDateTime', $value);
    }

}
