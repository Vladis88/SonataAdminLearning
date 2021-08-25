<?php

namespace App\Entity\Blog;

use App\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Post
 *
 * @ORM\Entity
 */
class Post extends AbstractEntity
{
    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $title = null;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $body;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private bool $draft = false;


    /**
     * @var \App\Entity\Blog\Category|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Blog\Category", inversedBy="posts")
     */
    private ?Category $category = null;

    public function __toString()
    {
        return $this->getTitle();
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Post
     */
    public function setTitle(?string $title): Post
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $body
     * @return Post
     */
    public function setBody(?string $body): Post
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDraft(): bool
    {
        return $this->draft;
    }

    /**
     * @param bool $draft
     * @return Post
     */
    public function setDraft(bool $draft): Post
    {
        $this->draft = $draft;
        return $this;
    }

    /**
     * @return \App\Entity\Blog\Category|null
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param \App\Entity\Blog\Category|null $category
     * @return Post
     */
    public function setCategory(?Category $category): Post
    {
        $this->category = $category;
        return $this;
    }

}