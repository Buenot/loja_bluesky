<?php 
namespace App\Helpers;

class ProductDataBuilder {

    private $c = [
        ['id' => '1',  'name_product' => 'Camiseta preta', 'description'=>'logo branco', 'category'=>'Camisetas','price'=>'70'],
        ['id' => '2', 'name_product' => 'Camiseta preta', 'description'=>'logo rosa', 'category'=>'Camisetas','price'=>'80'],
        ['id' => '3', 'name_product' => 'Camiseta preta e vermelha', 'description'=>'logo preto','category'=>'Camisetas', 'price'=>'90'],
        ['id' => '4',  'name_product' => 'Camiseta amarela', 'description'=>'logo preto','category'=>'Camisetas', 'price'=>'80'],
        ['id' => '5', 'name_product' => 'Moletom preto','description'=>'logo branco','category'=>'Moletons','price'=>'160'],
        ['id' => '6','name_product' => 'Moletom laranja', 'description'=>'logo preto','category'=>'Moletons','price'=>'120'],
        ['id' => '7','name_product' => 'Moletom branco', 'description'=>'logo de carpa','category'=>'Moletons','price'=>'180'],
        ['id' => '8', 'name_product' => 'Moletom azul e mostrda', 'description'=>'logo branco', 'category'=>'Moletons','price'=>'120'],
        ['id' => '9',  'name_product' => 'Touca verde','description'=>'logo verde', 'category'=>'Toucas','price'=>'60'],
        ['id' => '10','name_product' => 'Touca preta', 'description'=>'logo preto', 'category'=>'Toucas','price'=>'60'],
        ['id' => '11','name_product' => 'Touca azul', 'description'=>'logo azul', 'category'=>'Toucas','price'=>'60'],
        ['id' => '12','name_product' => 'Touca branca', 'description'=>'logo branco', 'category'=>'Toucas','price'=>'60']
    ];
    
    public function getData() {
        return $this->c;
    }
}