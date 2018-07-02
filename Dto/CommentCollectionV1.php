<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class CommentCollectionV1
 * @package Api\Dto
 */
class CommentCollectionV1 extends Collection
{
    /**
     * @param CommentV1 $comment
     */
    public function addComment(CommentV1 $comment): void
    {
        $this->collection[] = $comment;
    }

    /**
     * @return CommentV1[]
     */
    public function getComments(): array
    {
        return $this->collection;
    }
}