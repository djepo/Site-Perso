<?php

namespace co\blogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller;

/**
 * entitésRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class articleRepository extends EntityRepository
{    
    public function getLatestArticles($page=-1)
    {
        $em=$this->_em;
        
        if ($page==-1) {
            //on retourne tous les articles
            $entites = $em->getRepository('coBlogBundle:article')->findBy(array(), array('created'=>'DESC'));            
        } else {
            //on retourne les articles allant de offset+1 à offset+10
           $qb=$em->createQueryBuilder('a');
           $qb->Select('a');
           $qb->from('coBlogBundle:article', 'a');           
           $qb->OrderBy('a.created', 'DESC');
           $qb->setFirstResult($page*10);
           $qb->setMaxResults(10);           
           $entites=$qb->getQuery()->execute();
        }
       
        return $entites;
    }
    
    public function getNombrePages()
    {
        $em=$this->_em;
        $qb=$em->createQueryBuilder('a');
        $qb->Select('COUNT(a)');
        $qb->from('coBlogBundle:article', 'a');           
        $nbreArticles=$qb->getQuery()->getSingleScalarResult();
        $nbrePages=ceil($nbreArticles/10);
        
        return $nbrePages;
        
    }
}