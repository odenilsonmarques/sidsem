<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    //informando para o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;
    protected $fillable = ['nome','email','cpf','telefone','crime','descricao','infrator','municipio','numero','pontoDeRefencia','bairro','rua','anexoUm','anexoDois','data','status','descricaoStatus'];

    public function denunciante(){
        return $this->belongsTo(Denunciante::class);
    }
}
