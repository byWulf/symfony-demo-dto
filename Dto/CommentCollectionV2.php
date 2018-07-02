<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class CommentCollectionV2
 * @package Api\Dto
 */
class CommentCollectionV2 extends Collection
{
    /**
     * @param CommentV2 $comment
     */
    public function addComment(CommentV2 $comment): void
    {
        $this->collection[] = $comment;
    }

    /**
     * @return CommentV2[]
     */
    public function getComments(): array
    {
        return $this->collection;
    }
}