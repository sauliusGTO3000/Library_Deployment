<?php

namespace AppBundle\Repository;


use AppBundle\Entity\Author;

class AuthorRepository extends \Doctrine\ORM\EntityRepository
{
        /**
        **
        * @param string|null $term
        * @return Author[]
        */
        public function findByAuthorName(?string $term)

        {
            return $this->createQueryBuilder('c')
                ->andWhere('c.fullName LIKE :term')
                ->setParameter('term', '%' . $term . '%')
                ->orderBy('c.fullName', 'ASC')
                ->getQuery()
                ->getResult();
        }
}
