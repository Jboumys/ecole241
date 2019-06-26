<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 06/04/2019
 * Time: 04:56
 */

namespace App\Controller;

use App\Entity\Dossier;
use App\Entity\Requerant;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RequerantType;



class RequerantController extends AbstractController
{

    /**
     * @Route("/requerant", name="requerant")
     */
    public function index(){
        $repository = $this->getDoctrine()->getRepository(Requerant::class);
        $requerants = $repository->findAll();
        return $this->render('requerant/index.html.twig',[
            'requerants' => $requerants
        ]);
    }

    /**
     * @Route("/requerant/new", name="requerant_new")
     */
    public function add(Request $request, ObjectManager $manager){

        $requerant = new Requerant();

        $form = $this->createForm(RequerantType::class, $requerant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($requerant);
            $manager->flush($requerant);

            $this->addFlash('success','Enregistrement affectué!');

            return $this->redirectToRoute('requerant_new');
        }

        return $this->render('requerant/new.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/requerant/show/{id}", name="requerant_show")
     */
    public function show(Requerant $requerant){

        $em = $this->getDoctrine()->getManager();
        $id = $requerant->getId();
        $requerant = $em->getRepository(Requerant::class)->find($id);

        return $this->render('requerant/show.html.twig',[
            'requerant'=> $requerant
        ]);
    }


    /**
     * @Route("/requerant/edit/{id}", name="requerant_edit")
     */
    public function update(Requerant $requerant)
    {
        $em = $this->getDoctrine()->getManager();
        $requerant = $em->getRepository(Requerant::class)->find($requerant->getId());

        if (!$requerant) {
            throw $this->createNotFoundException(
                'No product found for id '.$requerant
            );
        }

        $requerant->setName('New product name!');
        $em->flush();

        return $this->redirectToRoute('requerant_edit', [
            'id' => $requerant->getId()
        ]);
    }

    /**
     * @Route("/requerant/listing/{id}", name="requerant_listing")
     */
    public function listing(Requerant $requerant){

        $dossier = new Dossier();
        $em = $this->getDoctrine()->getManager();

        $id = $requerant->getId();
        $dossiers = $em->getRepository(Dossier::class)->findBy(['requerant'=>$id]);

        return $this->render('requerant/listing.html.twig',[
            'dossiers'=>$dossiers,
            'requerant'=>$requerant,
        ]);
    }



}