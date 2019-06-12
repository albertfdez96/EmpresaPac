<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Entity\User;
use App\Form\BuscarType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PacController extends AbstractController
{
    /**
     * @Route("/pac", name="pac")
     */
    public function index()
    {
        return $this->render('pac/index.html.twig', [
            'controller_name' => 'PacController',
        ]);
    }

    /**
     * @Route("/BuscarPJ",name="app_buscar")
     */
    public function buscar(Request $request)
    {

        $busca=1;
        /**
        $employee=new Employee();

        $form=$this->createForm(BuscarType::class,$employee);

        $form->handleRequest($request);
        $error=$form->getErrors();


         *
         * $em = $this->getDoctrine()->getEntityManager();
         * $db = $em->getConnection();
         * $query = "select *
         * FROM employee
         * WHERE id  = $id;
         * ";
         * $stmt = $db->prepare($query);
         * $params = array();
         * $stmt->execute($params);
         * $levels=$stmt->fetchAll();
         * }
         **/




       /** if(...........){
        *
            return $this->render('pac/resultado.html.twig',[

            ]);

        }**/

        return $this->render('pac/buscar.html.twig',[

        ]);
    }
}
