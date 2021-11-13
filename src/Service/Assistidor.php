<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Pontuavel;
use Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assistir(Pontuavel $conteudo)
    {
        $conteudo->assistir();
    }
}
