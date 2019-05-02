<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CafeUsuario extends Model
{
    protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('id_cafe', '=', $this->getAttribute('id_cafe'))
            ->where('id_usuario', '=', $this->getAttribute('id_usuario'));
        return $query;
    }
}
