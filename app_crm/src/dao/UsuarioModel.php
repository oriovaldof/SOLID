<?php

namespace src\dao;

use src\BD;
use src\componentes\{
    Log,
    Notificacao
};
use src\interfaces\{
    ICadastro,
    ILog,
    INotificacao
};

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao
{
    public function salvar()
    {
        //logica
    }

    public function registrarLog(Log $log)
    {
        //logica
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        //logica
    }
}
