<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class ItemV2
 * @package Api\Dto
 */
class ItemV2
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var AttributeCollectionV2
     */
    private $attributeCollection;

    /**
     * @var GroupV1
     */
    private $group;

    public function __construct()
    {
        $this->attributeCollection = new AttributeCollectionV2();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ItemV2
     */
    public function setId(int $id): ItemV2
    {
        $this->id = $id;
        return $this;
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
     * @return ItemV2
     */
    public function setName(string $name): ItemV2
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return AttributeCollectionV2
     */
    public function getAttributeCollection(): AttributeCollectionV2
    {
        return $this->attributeCollection;
    }

    /**
     * @param AttributeCollectionV2 $attributeCollection
     * @return ItemV2
     */
    public function setAttributeCollection(AttributeCollectionV2 $attributeCollection): ItemV2
    {
        $this->attributeCollection = $attributeCollection;
        return $this;
    }

    /**
     * @return GroupV1
     */
    public function getGroup(): GroupV1
    {
        return $this->group;
    }

    /**
     * @param GroupV1 $group
     * @return ItemV2
     */
    public function setGroup(GroupV1 $group): ItemV2
    {
        $this->group = $group;
        return $this;
    }
}