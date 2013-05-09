<?php
// src/co/BlogBundle/Entity/article.php

namespace co\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;    //création d'un alias nous permettant d'utiliser l'espace de nom de doctrine 2
use Symfony\Component\Validator\Constraints as Assert;  //Pour pouvoir utiliser les anotations sevant à la validatio ndes formulaires

/**
 * @ORM\Entity(repositoryClass="co\BlogBundle\Repository\articleRepository")
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
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="co\UserBundle\Entity\User", inversedBy="articles", cascade={"persist"})
     */
    private $auteur;
    
    /**
     * @ORM\Column(type="text", nullable=true)     
     */
    private $introduction;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $article;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tags;

    private $comments;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime()
     */
    private $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    private $updated;
    
    /**
     * @ORM\Column(name="viewsCount",nullable=true, type="bigint")     
     */
    private $viewsCount;

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
        $this->setViewsCount(0);
        //$this->setUpdated(new \DateTime());
    }

     /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
       if ($this->getViewsCount()==0) {
           $this->setViewsCount(0);
       }
    }

    /**
     * Set auteur
     *
     * @param co\UserBundle\Entity\User $auteur
     */
    public function setAuteur(\co\UserBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * Get auteur
     *
     * @return co\UserBundle\Entity\User
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set viewsCount
     *
     * @param bigint $viewsCount
     */
    public function setViewsCount($viewsCount=null)
    {
        $this->viewsCount = $viewsCount;
    }

    /**
     * Get viewsCount
     *
     * @return bigint 
     */
    public function getViewsCount()
    {
        return $this->viewsCount;
    }
    
    /**
     * Set introduction     
     */
    public function setIntroduction($introduction=null)
    {
       $this->introduction=$introduction; 
    }
    
    /**
     * Get Introduction     
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }
}