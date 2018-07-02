<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class ArticleV2
 * @package Api\Dto
 */
class ArticleV2
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
     * @var CommentCollectionV2
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new CommentCollectionV2();
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
     * @return ArticleV2
     */
    public function setId(int $id): ArticleV2
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
     * @return ArticleV2
     */
    public function setTitle(string $title): ArticleV2
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
     * @return ArticleV2
     */
    public function setText(string $text): ArticleV2
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
     * @return ArticleV2
     */
    public function setDate(\DateTime $date): ArticleV2
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
     * @return ArticleV2
     */
    public function setUser(UserV3 $user): ArticleV2
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return CommentCollectionV2
     */
    public function getComments(): CommentCollectionV2
    {
        return $this->comments;
    }

    /**
     * @param CommentCollectionV2 $comments
     * @return ArticleV2
     */
    public function setComments(CommentCollectionV2 $comments): ArticleV2
    {
        $this->comments = $comments;
        return $this;
    }
}