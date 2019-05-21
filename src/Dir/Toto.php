<?php

namespace App\Dir;

class Toto {

    public function  __construct(Tata $tata)
    {
        $this->tata = $tata;
    }

    public function toto()
    {
        return 'toto';
    }

    public function tata()
    {
        $this->tata->tata();
    }

    public function todo()
    {
        return 'todo';
    }

}