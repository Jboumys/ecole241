<?php

namespace App\Controller;

use App\Entity\Dossier;
use App\Entity\Fichier;
use App\Entity\Parcelle;
use App\Entity\Requerant;
use App\Form\DossierType;
use App\Form\FichierType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class DossierController extends AbstractController
{
    /**
     * @Route("/dossier", name="dossier")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Dossier::class);
        $dossiers = $repository->findAll();
        return $this->render('dossier/index.html.twig', [
            'dossiers' => $dossiers
        ]);
    }

    /**
     * @Route("/dossier/new", name="dossier_new")
     */
    public function newAction(Request $request){

        $dossier = new Dossier();
        $requerant = new Requerant();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(DossierType::class, $dossier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $dossier->setDateMAJ(new \DateTime());
            $dossier->setDateCreate(new \DateTime());

            $id = $dossier->getRequerant();
            $requerant = $em->getRepository(Requerant::class)->find($id);

            $em->persist($requerant);
            $em->persist($dossier);
            $em->flush();

            $this->addFlash('success','Le dossier n°'.$dossier->getMatricule().' vient d\'être créé!');

            return $this->redirectToRoute('dossier_new');

        }else{
            $this->addFlash('warning','invalid!');
        }

        return $this->render('dossier/new.html.twig', [
            'form' => $form->createView(),
            'requerant' => $requerant
        ]);
    }

    /**
     * @Route("/dossier/show/{id}", name="dossier_show")
     */
    public function show(Dossier $dossier){

        $fichier = new Fichier();
        $parcelle = new Parcelle();
        $em = $this->getDoctrine()->getManager();

        $id = $dossier->getId();
        $fichiers = $em->getRepository(Fichier::class)->findBy(['dossier'=>$id]);

        $form = $this->createForm(FichierType::class,$fichier);

        return $this->render('dossier/show.html.twig',[
            'dossier'   => $dossier,
            'fichiers'  => $fichiers,
            'parcelle'  => $parcelle,
            'form'      => $form->createView()
        ]);
    }

    /**
     * @Route("/product/edit/{id}", name="dossier_edit")
     */
    public function edit(){

    }


    /**
     * @Route("/dossier/exportation/{id}", name="dossier_export")
     */
    public function export(Dossier $dossier){

        $fichier = new Fichier();
        $em = $this->getDoctrine()->getManager();
        $id = $dossier->getId();
        $fichiers = $em->getRepository(Fichier::class)->findBy(['dossier'=>$id]);
        $form = $this->createForm(FichierType::class,$fichier);

        /************create a new folder****************/
        $repOrigine = 'C:/TestDossier/';
        $rep = 'C:/TestDossier/'.$dossier->getRequerant()->getIdentite().'/';
        $fileSource = '../../public/uploads/document/5d0c3ae027715195719049.png';

        if ($repOrigine){
            mkdir($repOrigine);
            if ($repOrigine){
                if (!is_dir($rep)){
                    mkdir($rep);
                    //copy($fileSource, $rep);
                    $this->addFlash('success','Exportation réussie!');
                }else{
                    $this->addFlash('success','un dossier de ce type est déjà existent dans ce repertoire!');
                }
            }
        }

        return $this->render('dossier/show.html.twig',[
            'dossier'=>$dossier,
            'fichiers'=>$fichiers,
            'form' => $form->createView()
        ]);
    }




}



