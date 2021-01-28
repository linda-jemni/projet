<?php

namespace  App\Entity;

use App\Repository\Classe;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repository=classe::class)
 */
class Etudiant
{
 
    private $id;

   
    private $name;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
