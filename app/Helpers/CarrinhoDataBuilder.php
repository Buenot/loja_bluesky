<?php 
namespace App\Helpers;

class CarrinhoDataBuilder {

private $ca = [
    ['id'=>1, 'product_id'=>'4', 'status'=>'padding', 'user_id'=>'1' ],
    ['id'=>2, 'product_id'=>'3', 'status'=>'padding','user_id'=> '2'],
    ['id'=>3, 'product_id'=>'2','status'=> 'padding', 'user_id'=>'3'],
    ['id'=>4, 'product_id'=>'1', 'status'=>'padding', 'user_id'=>'4'],
    ['id'=>5, 'product_id'=>'5', 'status'=>'padding', 'user_id'=>'5'],
    ['id'=>6, 'product_id'=>'6', 'status'=>'padding', 'user_id'=>'6'],
    ['id'=>7, 'product_id'=>'7', 'status'=>'padding', 'user_id'=>'7'],
    ['id'=>8, 'product_id'=>'8',  'status'=>'padding', 'user_id'=>'8'],
    ['id'=>9, 'product_id'=>'9', 'status'=>'padding', 'user_id'=>'9'],
    ['id'=>10, 'product_id'=>'10', 'status'=>'padding','user_id'=>'10' ]
];

public function getData() {
    return $this->ca;
}

public function getRow() {
    $ca = ['id'=>11,
         'product_id'=>'4',
         'status'=>'padding',
         'user_id'=>'11'
          ];
    return $ca;
}
}