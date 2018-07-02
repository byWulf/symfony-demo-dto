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
}