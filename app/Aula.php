<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model{

    protected $table = 'aula';

    protected $fillable = ['nome', 'sigla'];

    public $timestamps = false;

    public function alunos(){
        return $this->belongsToMany('App\Aluno');
    }

    public function professores(){
        return $this->belongsTo('App\Professor');
    }
}   