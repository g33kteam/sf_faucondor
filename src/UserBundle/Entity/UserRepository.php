<?php

namespace UserBundle\Entity;
use FaucondorBundle\Entity\Post;

/**
 * SectionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function findUsersByPost(Post $post){
        return $this->createQueryBuilder('u')
            ->innerJoin('u.posts', 'p', 'WITH', 'p.id = :post')
            ->setParameter('post', $post->getId())
            ->getQuery()
            ->getResult();
    }
}
