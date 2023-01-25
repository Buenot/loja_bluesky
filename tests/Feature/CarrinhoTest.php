<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\carrinhodecompra;
use App\Helpers\CarrinhoDataBuilder;




class Carrinho extends TestCase{
    //código de configuração
        public function setUp(): void{
            parent::setUp();
            carrinhodecompra::truncate();
            $cdb = new CarrinhoDataBuilder();
            $ca = $cdb->getData();
            carrinhodecompra::insert($ca);
        }

        public function test_le_uma_compra_usuario_carrinho(){
            //arrange(setup)
            //act
            $user = carrinhodecompra::find(4);
            $id = $user['user_id'];
            //assert
            $this->assertEquals('4', $id);
        }

        public function test_le_todos_as_compra_usuarios_carrinho() {
            $ca = carrinhodecompra::all();
            $this->assertEquals(10, sizeof($ca));
        }

        public function test_le_todos_os_user_id_compras_corretamente() {
            $lista = carrinhodecompra::all();

            $this->assertEquals('1', $lista[0]['user_id']);
            $this->assertEquals('5', $lista[4]['user_id']);
            $this->assertEquals('10', $lista[9]['user_id']);
        }

        public function test_atualiza_compra_usuario_corretamente(){
            //lê a compra
            $user = carrinhodecompra::find(1);
            //verificar se a compra esta correta 
            $this->assertEquals('1',$user['user_id']);
            //altera alguma informação
            $user['status'] = 'buy';
            //salva
            $user->save();
            //lê novamente a mesma compra
            $user1 = carrinhodecompra::find(9);
            //verifica se o valor alterado está correto
            $this->assertEquals('buy',$user['status']);            
        }

        public function test_remove_compra_usuario_corretamente(){
            //verificar se existe a compra exite
            $user = carrinhodecompra::find(9);
            //remover este compra
            $user->delete();
            //verificar se a remoção, de fato ocorreu
            $user = carrinhodecompra::find(9);
            $this->assertNull($user);
        }

        public function test_cadastro_usuario_contato(){
            //arrange
            $ca = new CarrinhoDataBuilder();
            $row = $ca->getRow();
            //act
            carrinhodecompra::create($row);

            //assert
            $ca =  carrinhodecompra::all();
            $num = sizeof($ca);
            $this->assertEquals(11, $num);

            $users = $ca[$num -1];
            $this->assertEquals('11', $users['user_id']);
        }




}
