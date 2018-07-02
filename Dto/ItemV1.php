<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class ItemV1
 * @package Api\Dto
 */
class ItemV1
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
     * @var AttributeV1[]
     */
    private $attributes;

    /**
     * @var GroupV1
     */
    private $group;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ItemV1
     */
    public function setId(int $id): ItemV1
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
     * @return ItemV1
     */
    public function setName(string $name): ItemV1
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return AttributeV1[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param AttributeV1[] $attributes
     * @return ItemV1
     */
    public function setAttributes(array $attributes): ItemV1
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @param AttributeV1 $attribute
     * @return ItemV1
     */
    public function addAttribute(AttributeV1 $attribute): ItemV1
    {
        $this->attributes[] = $attribute;
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
     * @return ItemV1
     */
    public function setGroup(GroupV1 $group): ItemV1
    {
        $this->group = $group;
        return $this;
    }
}