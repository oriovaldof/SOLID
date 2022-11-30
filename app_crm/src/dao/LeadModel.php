<?php

namespace src\dao;

use src\BD;
use src\componentes\{
    Notificacao
};
use src\interfaces\{
    ICadastro,
    INotificacao
};

class LeadModel extends BD implements ICadastro, INotificacao
{
    public function salvar()
    {
        //logica
    }
    public function enviarNotificacao(Notificacao $notificacao)
    {
        //logica
    }
}
