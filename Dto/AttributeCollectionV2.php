<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class AttributeCollectionV1
 * @package Api\Dto
 */
class AttributeCollectionV2
{
    /**
     * @var AttributeV2[]
     */
    private $attributes = [];

    public function addAttribute(AttributeV2 $attribute): void
    {
        $this->attributes[] = $attribute;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }
}