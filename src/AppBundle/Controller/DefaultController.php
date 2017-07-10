<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'userId' => $user->getId(),
            'userName' => $user->getUsername(),
            'userAddress' => $user->getAddress(),
            'userCity' => $user->getCity(),
            'userCountry' => $user->getCountry()
        ));
    }

    /**
     * @Route("/add_passenger", name="addPassengerPage")
     */
    public function addPassengerAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/add_passenger.html.twig');
    }

    /**
     * @Route("/add_trip", name="addTripPage")
     */
    public function addTripAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/add_trip.html.twig');
    }

    /**
     * @Route("/update/user", name="updateUser")
     */
    public function updateUserAction(Request $request)
    {
        $user = Request::createFromGlobals();

        if ($user->request->has('submit')) {
            $username = $user->request->get('username');
            $address = $user->request->get('address');
            $city = $user->request->get('city');
            $country = $user->request->get('country');

            $qb = $this->getDoctrine()->getmanager();
            $qb = $qb->createQueryBuilder();
        
            $user = $this->get('security.context')->getToken()->getUser();
            $userId = $user->getId();
           
            $q = $qb->update('AppBundle:User', 'u')
                    ->set('u.username', $qb->expr()->literal($username))
                    ->set('u.address', $qb->expr()->literal($address))
                    ->set('u.city', $qb->expr()->literal($city))
                    ->set('u.country', $qb->expr()->literal($country))
                    ->where('u.id = ?1')
                    ->setParameter(1, $userId)
                    ->getQuery();
            $p = $q->execute();
        } else {
            $name = 'Not submitted yet';
            $p = false;
        }
        if($p)
            $data = 'success';
        else
            $data = 'error';

        return $this->redirect($this->generateUrl('homepage'));

    }
}
