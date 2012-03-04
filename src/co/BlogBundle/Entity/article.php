<?php
// src/co/BlogBundle/Entity/article.php

namespace co\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;    //création d'un alias nous permettant d'utiliser l'espace de nom de doctrine 2
use Symfony\Component\Validator\Constraints as Assert;  //Pour pouvoir utiliser les anotations sevant à la validatio ndes formulaires

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 * @ORM\HasLifecycleCallbacks()
 */
class article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    protected $author;

    /**
     * @ORM\Column(type="text")
     */
    protected $article;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank()
     */
    protected $image;

    /**
     * @ORM\Column(type="text", nullable=true)     
     */
    protected $tags;

    protected $comments;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime()
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    protected $updated;

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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
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
     * Set article
     *
     * @param text $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * Get article
     *
     * @return text 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set tags
     *
     * @param text $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get tags
     *
     * @return text 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return datetime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    
    
        public function __construct()
    {
        $this->setCreated(new \DateTime()); //lors de la création, on met la date par défaut à celle du jour
        //$this->setUpdated(new \DateTime());
    }
    
     /**
     * @ORM\preUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }
    
}