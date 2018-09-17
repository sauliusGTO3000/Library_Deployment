<?php

namespace AppBundle\Controller;

use AppBundle\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Book;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->redirectToRoute('book_index');

    }
}
