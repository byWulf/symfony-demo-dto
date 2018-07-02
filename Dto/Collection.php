<?php
declare(strict_types=1);

namespace Api\Dto;

abstract class Collection implements \Iterator, \Countable
{
    protected $collection;
    protected $position;

    public function __construct(array $collection = [])
    {
        $this->collection = $collection;
    }

    public function current()
    {
        if (null === $this->position && $this->collection) {
            $this->position = \key($this->collection);
        }
        return $this->collection[$this->position];
    }

    /**
     * @return int|string
     */
    public function key()
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position = null;
        if (\next($this->collection) !== false) {
            $this->position = \key($this->collection);
        }
    }

    public function rewind(): void
    {
        \reset($this->collection);
        $this->position = \key($this->collection);
    }

    public function valid(): bool
    {
        return isset($this->collection[$this->position]);
    }

    public function count(): int
    {
        return \count($this->collection);
    }

    public function clear(): void
    {
        $this->collection = [];
        $this->rewind();
    }

    public function toArray(): array
    {
        return $this->collection;
    }
}