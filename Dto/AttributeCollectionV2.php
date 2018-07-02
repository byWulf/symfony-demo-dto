<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class AttributeCollectionV1
 * @package Api\Dto
 */
class AttributeCollectionV2 extends Collection
{
    public function addAttribute(AttributeV2 $attribute): void
    {
        $this->collection[] = $attribute;
    }

    public function getAttributes(): array
    {
        return $this->collection;
    }
}