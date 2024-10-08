<?php

namespace App;

enum ProjectStatus: string
{
        //
    case Open = 'Open';
    case Closed = 'Closed';

    public function label()
    {
        return match ($this) {
            self::Open => 'Aceitando Proposta',
            self::Closed => 'Projeto Encerrado'
        };
    }
}
