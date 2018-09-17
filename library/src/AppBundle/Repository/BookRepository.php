<?php

namespace AppBundle\Repository;
use AppBundle\Entity\Book;


class BookRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param string|null $term
     * @return Book[]
     */
    public function findAllWithIsbn(?string $term)

    {
        return $this->createQueryBuilder('c')
                ->andWhere('c.isbn LIKE :term')
                ->setParameter('term', '%' . $term . '%')
                ->orderBy('c.title', 'DESC')
                ->getQuery()
                ->getResult();
        }


    /**
     * @param null|string $authorName
     * @return array
     */
    public function findAllWithAuthorName(?string $authorName)

    {
        return $this->createQueryBuilder('c')
            ->join('c.authors', 'h')
            ->andWhere('h.fullName LIKE :term')
            ->setParameter('term', '%' . $authorName . '%')
            ->orderBy('h.fullName', 'ASC')
            ->getQuery()
            ->getResult();
    }


}
