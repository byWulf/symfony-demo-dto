<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class GroupV2
 * @package Api\Dto
 */
class GroupV2
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var ItemCollectionV2
     */
    private $items;

    public function __construct()
    {
        $this->items = new ItemCollectionV2();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return GroupV2
     */
    public function setName(string $name): GroupV2
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ItemCollectionV2
     */
    public function getItems(): ItemCollectionV2
    {
        return $this->items;
    }

    /**
     * @param ItemCollectionV2 $items
     * @return GroupV2
     */
    public function setItems(ItemCollectionV2 $items): GroupV2
    {
        $this->items = $items;
        return $this;
    }
}