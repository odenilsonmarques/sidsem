<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    //informando para o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;
    protected $fillable = ['crime','descricao','infrator','bairro','rua','anexoUm','anexoDois','anexoTres'];

    public function denunciante(){
        return $this->belongsTo(Denunciante::class);
    }
}
