<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class AttributeV2
 * @package Api\Dto
 */
class AttributeV2
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return AttributeV2
     */
    public function setKey(string $key): AttributeV2
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return AttributeV2
     */
    public function setValue(string $value): AttributeV2
    {
        $this->value = $value;
        return $this;
    }
}