<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class ItemCollectionV2
 * @package Api\Dto
 */
class ItemCollectionV2 extends Collection
{
    public function addItem(ItemV1 $itemV1): void
    {
        $this->collection[] = $itemV1;
    }

    public function getItems(): array
    {
        return $this->collection;
    }
}