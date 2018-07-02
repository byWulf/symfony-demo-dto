<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class AttributeV1
 * @package Api\Dto
 */
class AttributeV1
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
     * @return AttributeV1
     */
    public function setKey(string $key): AttributeV1
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
     * @return AttributeV1
     */
    public function setValue(string $value): AttributeV1
    {
        $this->value = $value;
        return $this;
    }
}