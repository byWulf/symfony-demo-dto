<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class GroupV1
 * @package Api\Dto
 */
class GroupV1
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var ItemV1[]
     */
    private $items;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return GroupV1
     */
    public function setName(string $name): GroupV1
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ItemV1[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param ItemV1[] $items
     * @return GroupV1
     */
    public function setItems(array $items): GroupV1
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param ItemV1 $item
     * @return GroupV1
     */
    public function addItem(ItemV1 $item): GroupV1
    {
        $this->items[] = $item;
        return $this;
    }
}