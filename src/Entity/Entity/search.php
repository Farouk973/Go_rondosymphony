<?php

namespace App\Entity;
use Symfony\Component\Form\FormType;
class search{
    /**
     * @var int|null
     */
private $maxUser;

    /**
     * @return int|null
     */
    public function getMaxUser(): ?int
    {
        return $this->maxUser;
    }

    /**
     * @param int|null $maxUser
     * @return search
     */
    public function setMaxUser(int $maxUser): search
    {
        $this->maxUser = $maxUser;
        return $this;
    }

}
