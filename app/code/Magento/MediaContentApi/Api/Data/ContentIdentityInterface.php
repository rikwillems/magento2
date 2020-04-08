<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\MediaContentApi\Api\Data;

use Magento\MediaContentApi\Api\Data\ContentIdentityExtensionInterface;

/**
 * Data interface representing the identificator of content. I.e. short description field of product entity with id 42
 * @api
 */
interface ContentIdentityInterface
{
    /**
     * Type of entity that can have a content with media. I.e. catalog_product or cms_page
     *
     * @return string
     */
    public function getEntityType(): string;

    /**
     * Id of the entity containing content with media
     *
     * @return string
     */
    public function getEntityId(): string;

    /**
     * Field of the entity where the content can be stored. I.e. short_description for product
     *
     * @return string
     */
    public function getField(): string;

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\MediaContentApi\Api\Data\ContentIdentityExtensionInterface|null
     */
    public function getExtensionAttributes(): ContentIdentityExtensionInterface;

    /**
     * Set extension attributes
     *
     * @param \Magento\MediaContentApi\Api\Data\ContentIdentityExtensionInterface $extensionAttributes
     * @return void
     */
    public function setExtensionAttributes(ContentIdentityExtensionInterface $extensionAttributes): void;
}
