<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 25.01.2018
 * Time: 22:02
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class UploadedImageRepository extends EntityRepository
{

    public function findAllActive(){
        return $this->findBy(array(
            'isActive' => true
        ));
    }
    public function findAllDeleted(){
        return $this->findBy(array(
            'isActive' => false
        ));
    }
}