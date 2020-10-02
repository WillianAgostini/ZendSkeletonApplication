<?php
namespace Album\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
 class Album
 {
     /**
     * @ORM\Id
     * @ORM\GeneratedValue("AUTO")
     * @ORM\Column(type="integer")
     */
     public $id;
     /**
     * @ORM\Column(type="string", length=50)
     */
     public $artist;
     /**
     * @ORM\Column(type="string", length=15)
     */
     public $title;

     public function exchangeArray($data)
     {
         $this->id     = (!empty($data['id'])) ? $data['id'] : null;
         $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
         $this->title  = (!empty($data['title'])) ? $data['title'] : null;
     }
 }