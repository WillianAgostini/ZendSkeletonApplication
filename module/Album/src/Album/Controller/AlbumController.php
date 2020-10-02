<?php

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class AlbumController extends AbstractActionController
{
    protected $albumTable;

    public function indexAction()
    {
        $res = $this->getAlbumTable()->findAll();
        return new JsonModel(array(
            'albums' => $res,
        ));
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }

    public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
            $this->albumTable =  $em->getRepository("Album\Model\Album");
        }

        // if (!$this->albumTable) {
        //     $sm = $this->getServiceLocator();
        //     $this->albumTable = $sm->get('Album\Model\AlbumTable');
        // }

        return $this->albumTable;
    }
}
