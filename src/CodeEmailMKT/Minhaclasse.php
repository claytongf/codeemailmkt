<?php

namespace CodeEmailMKT;


class Minhaclasse
{
    const MINHA_CONSTANTE = "minha constante";
    private $name;
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}