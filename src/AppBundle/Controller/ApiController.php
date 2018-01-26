<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UploadedImage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends Controller
{


    /**
     * @Route("/api/download/{id}", name="api_download")
     */
    public function downloadAction($id){


        $id = (integer) $id;

        $imageRepo = $this->getDoctrine()->getRepository(UploadedImage::class);
        $image = $imageRepo->findOneBy(array(
            'id' => $id
        ));

        if(!$image){
            throw $this->createNotFoundException('Sorry. The image is not exist');
        }

        $fmanager = $this->get('file_manager');

        return $fmanager->downloadImage($image);
    }

    /**
     * @Route("/api/delete/{id}", name="api_delete")
     */
    public function deleteAction($id){

        $id = (integer) $id;

        $imageRepo = $this->getDoctrine()->getRepository(UploadedImage::class);
        $image = $imageRepo->findOneBy(array(
            'id' => $id
        ));
        if(!$image){
            throw $this->createNotFoundException('Sorry. The image is not exist');
        }

        $image->setIsActive(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($image);
        $em->flush();

        $this->addFlash('file_deleted_successfully', 'The file was deleted. No worries, you can restore it in DELETED section :)');
        return $this->redirectToRoute('active');

    }

    /**
     * @Route("/api/restore/{id}", name="api_restore")
     */
    public function restoreAction($id){

        $id = (integer) $id;

        $imageRepo = $this->getDoctrine()->getRepository(UploadedImage::class);
        $image = $imageRepo->findOneBy(array(
            'id' => $id
        ));
        if(!$image){
            throw $this->createNotFoundException('Sorry. The image is not exist');
        }

        $image->setIsActive(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($image);
        $em->flush();

        $this->addFlash('file_restored_successfully', 'You brought the file back to life. From the darknesssss ... ');
        return $this->redirectToRoute('active');

    }

    /**
     * @Route("api/initial_upload")
     */
    public function initialUpload(Request $request){

        $images = array();
        $images = $request->files->get('images');

        if(!$images){
            throw new \Exception('Invalid initial upload script');
        }

        $fmanager = $this->get('file_manager');

        try{
            foreach($images as $image){
                $fmanager->uploadImage($image);
            }
        } catch (\Exception $e){
            $allowedFiles = implode(' and ', $this->getParameter('allowed_mime_types'));
            return new Response('Initial upload failed. Allowed files : ' . $allowedFiles);
        }

        return new Response('Files succesfully uploaded.');

    }
}
