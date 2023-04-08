<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Nullable;


#[ORM\Entity ()]


class Book
{

     #[ORM\Id]
     #[ORM\GeneratedValue]
     #[ORM\Column]
    private ?int $id = null;


 #[ORM\Column(length:255)]
    private  ?string $isbn = null;

 #[ORM\Column(length: 255)]
    private ?string $name = null;

 #[ORM\Column(type:"text", nullable:"true")]
    private ?string $abstract = null;

#[ORM\Column]
    private ?int $numberOfPages = null;

#[ORM\Column]
    private ?int $datePublished = null;




    public function getId() : ?int
    {
        return $this->id;
    }


    public function getIsbn() : ?string
    {
        return $this->isbn;
    }
    public function setIsbn(string $isbn) : self
    {
        $this->isbn = $isbn;
            return $this;
    }


    private function getName() : string
    {
        return $this->name;
    }

    private function setName(string $name) : self
    {
        $this->name = $name;
            return $this;
    }


    private function getAbstract() : string
    {
        return $this->abstract;
    }

    private function setAbstract(string $abstract) : self
    {
        $this->name = $abstract;
        return $this;
    }



     private function getNumberOfPages() : string
    {

       return $this->numberOfPages;
    }

    private function setNumberOfPages($numberOfPages) : self
    {
        $this->numberOfPages = $numberOfPages ;
        return $this;

    }

    private function getDatePublished() : string
    {
        return $this->datePublished;

    }
    private function setDatePublished(int $datePublished) : self
    {

        $this->datePublished = $datePublished ;
        return $this;
    }

}