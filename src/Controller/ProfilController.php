<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Form\ProfilType;
use Symfony\Component\Security\Core\User\UserInterface;


class ProfilController extends AbstractController
{


    /**
     * @Route("/profil", name="profil", methods={"GET", "POST"})
     */
    public function profil(Request $request): Response
    {

        $form = $this->createForm(ProfilType::class);



        return $this->render('home/profil.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/save", name="save", methods={"GET", "POST"})
     */
    public function save(UserInterface $user, Request $request): Response
    {
        $user->setFirstName('titi');

        $user->setLastName($request->request->get('last_name'));
        $user->setCurrentLocation($request->request->get('current_location'));
        $user->setAddress($request->request->get('address'));
        $user->setCountry($request->request->get('country'));
        $user->setNationality($request->request->get('nationality'));
        /*  $user->setBirthDate($request->request->get('birth_date'));
            $user->setBirthPlace($request->request->get('birth_place')); */
        $user->setExperience($request->request->get('experience'));
        $user->setDescription($request->request->get('description'));
        $user->setUpdatedAt(new \DateTime());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('home');
    }
}
