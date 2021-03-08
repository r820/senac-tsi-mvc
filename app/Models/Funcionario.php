<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['id',
                           'nome',
                           'endereco',
                           'email',
                          'telefone'];

    protected $table = 'Fucionario';

    /*
    E possivel mudar a chave primaria assim
    protected $primaryKey = 'nome_da_pk';
    
    Se não quiser que seja auto_increment public
    sincrement = false;

    Para definir o tipo protected SkeyType = 'string';

    Para tirar os campos timestamps public $timestamps =
    false;
    
    */                      

}
