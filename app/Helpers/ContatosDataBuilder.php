<?php 
namespace App\Helpers;

class ContatosDataBuilder {

    private $c = [
        ['name' => 'João',  'email' => 'js@mail.com', 'descriptioncontact'=>'Troca','description'=> 'Pedi o número errado'],
        ['name' => 'Paulo', 'email' => 'ps@mail.com', 'descriptioncontact'=>'Troca', 'description'=> 'não Serviu'],
        ['name' => 'Maria', 'email' => 'mc@mail.com', 'descriptioncontact'=>'Troca', 'description'=>'tamnho incorreto'],
        ['name' => 'José',  'email' => 'jc@mail.com', 'descriptioncontact'=>'Troca', 'description'=>'Pedi o numero errado'],
        ['name' => 'Marco', 'email' => 'mp@mail.com','descriptioncontact'=>'Numero errado', 'description'=> 'Numero maior'],
        ['name' => 'Gilmar','email' => 'gt@mail.com', 'descriptioncontact'=>'Numero errado', 'description'=>'Numero menor'],
        ['name' => 'Eliane','email' => 'ep@mail.com', 'descriptioncontact'=>'Numero errado', 'description'=>'tamanho incompativel'],
        ['name' => 'Lucia', 'email' => 'lv@mail.com', 'descriptioncontact'=>'Defeito','description'=>'Sem etiqueta' ],
        ['name' => 'Ana',  'email' => 'as@mail.com','descriptioncontact'=>'Defeito', 'description'=>'Mancha superficial'],
        ['name' => 'Sérgio','email' => 'sa@mail.com', 'descriptioncontact'=>'Outros', 'description'=>'Não recebi meu produto corretamente']
    ];
    
    public function getData() {
        return $this->c;
    }
    
    public function getRow() {
        $c = ['name' => 'Paulo',
              'email' => 'pv@mail.com',
              'descriptioncontact'=>'Troca',
              'description'=> 'não Serviu'
              ];
        return $c;
    }
}