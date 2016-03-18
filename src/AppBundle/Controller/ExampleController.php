<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ExampleController extends Controller
{
    /**
     * @Route("/random/{limit}")
     */
    public function randomAction($limit)
    {
        $conn = $this->get('database_connection');
var_dump($conn);
        $number = rand(0, $limit);

        return $this->render('example/random.html.twig', array(
            'number' => $number
        ));
    }
}