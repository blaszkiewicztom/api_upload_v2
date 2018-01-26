<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24.01.18
 * Time: 00:47
 */

namespace AppBundle\Service;


use AppBundle\Entity\UploadedImage;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser;
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeExtensionGuesser;
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class FileManager
{
    private $em;
    private $container;

    public function __construct(EntityManager $em, ContainerInterface $container){

        $this->em = $em;
        $this->container = $container;

    }

    public function uploadImage(UploadedFile $image, $description = 'default'){

        $mimeType = $image->getMimeType();
        $allowedMimeTypes = $this->container->getParameter('allowed_mime_types');
        $allowedSize = $this->container->getParameter('allowed_file_size');

        if(!in_array($mimeType,$allowedMimeTypes)){
            throw new FileException('Incorrect file extension.');
        }
        if($image->getSize() > $allowedSize){
            throw new FileException('Toooo much data. Allowed file size is ' . $allowedSize . ' bytes');
        }
        $ext = $image->guessClientExtension();
        $fileName = md5(uniqid()) . '.' . $ext;
        $originalName = $image->getClientOriginalName ();
        $image->move($this->container->getParameter( 'image_directory' ), $fileName);

        $imageEntity = new UploadedImage();
        $imageEntity->setFileName ($fileName);
        $imageEntity->setDescription($description);
        $imageEntity->setOriginalName ($originalName);
        $imageEntity->setCreatedAt(new \DateTime ());

        $this->em->persist($imageEntity);
        $this->em->flush();

    }

    public function downloadImage(UploadedImage $image){

        $fileName = $image->getFileName();
        $filePath = $this->container->getParameter('image_directory') . '/' . $fileName;
        $response = new BinaryFileResponse($filePath);
        $mimeTypeGuesser = new FileinfoMimeTypeGuesser();

        $response->headers->set('Content-Type', $mimeTypeGuesser->guess($filePath));
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $image->getOriginalName()
        );

        return $response;

    }

}