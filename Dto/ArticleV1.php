<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class ArticleV1
 * @package Api\Dto
 */
class ArticleV1
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var UserV3
     */
    private $user;

    /**
     * @var CommentV1[]
     */
    private $comments = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ArticleV1
     */
    public function setId(int $id): ArticleV1
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ArticleV1
     */
    public function setTitle(string $title): ArticleV1
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return ArticleV1
     */
    public function setText(string $text): ArticleV1
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return ArticleV1
     */
    public function setDate(\DateTime $date): ArticleV1
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return UserV3
     */
    public function getUser(): UserV3
    {
        return $this->user;
    }

    /**
     * @param UserV3 $user
     * @return ArticleV1
     */
    public function setUser(UserV3 $user): ArticleV1
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return CommentV1[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param CommentV1[] $comments
     * @return ArticleV1
     */
    public function setComments(array $comments): ArticleV1
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @param CommentV1 $comment
     * @return ArticleV1
     */
    public function addComment(CommentV1 $comment): ArticleV1
    {
        $this->comments[] = $comment;
        return $this;
    }
}