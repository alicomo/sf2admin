<?php

namespace Acme\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\TestBundle\Entity\Comment
 */
class Comment
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $author
     */
    private $author;

    /**
     * @var string $body
     */
    private $body;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set body
     *
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }
}