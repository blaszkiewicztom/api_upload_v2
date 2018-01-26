<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UploadedImage;
use AppBundle\Form\UploadForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UIController extends Controller
{
    /**
     * @Route("/upload", name="upload")
     */
    public function uploadAction(Request $request)
    {

        $uploadForm = $this->createForm(UploadForm::class);

        if ($request->getMethod() == 'POST'){
            $uploadForm->handleRequest($request);

            if($uploadForm->isSubmitted() && $uploadForm->isValid()){

                $file = $uploadForm['file']->getData();
                $description = $uploadForm['description']->getData();

                $fmanager = $this->get('file_manager');
                $fmanager->uploadImage($file, $description);


                $this->addFlash('file_uploaded_successfully', 'File uploaded successfully. Enjoy!');
                return $this->redirectToRoute('active');
            }
        }


        return $this->render('default/upload.html.twig', array(
            'uploadForm' => $uploadForm->createView()
        ));
    }

    /**
     * @Route("/active", name="active")
     */
    public function activeAction(){

        $imageRepo = $this->getDoctrine()->getRepository(UploadedImage::class);
        $activeImages = $imageRepo->findAllActive();


        return $this->render('default/active.html.twig', array(
            'activeImages' => $activeImages
        ));
    }

    /**
     * @Route("/deleted", name="deleted")
     */
    public function deletedAction(){

        $imageRepo = $this->getDoctrine()->getRepository(UploadedImage::class);
        $deletedImages = $imageRepo->findAllDeleted();

        return $this->render('default/deleted.html.twig', array(
            'deletedImages' => $deletedImages
        ));

    }
}
