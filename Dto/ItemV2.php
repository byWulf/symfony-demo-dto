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
    private $attributes;

    /**
     * @var GroupV1
     */
    private $group;

    public function __construct()
    {
        $this->attributes = new AttributeCollectionV2();
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
    public function getAttributes(): AttributeCollectionV2
    {
        return $this->attributes;
    }

    /**
     * @param AttributeCollectionV2 $attributes
     * @return ItemV2
     */
    public function setAttributes(AttributeCollectionV2 $attributes): ItemV2
    {
        $this->attributes = $attributes;
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