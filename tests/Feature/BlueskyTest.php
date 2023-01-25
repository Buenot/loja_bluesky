<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Helpers\BlueskyDataBuilder;


class Bluesky extends TestCase{
    //código de configuração
        public function setUp(): void{
            parent::setUp();
            User::truncate();
            $ubd = new BlueskyDataBuilder();
            $v = $ubd->getData();
            User::insert($v);
        }

        public function test_le_um_usuario(){
            //arrange(setup)
            //act
            $marco = User::find(5);
            $nome = $marco['name'];
            //assert
            $this->assertEquals('Marco', $nome);
        }

        public function test_le_todos_os_usuarios() {
            $v = User::all();
            $this->assertEquals(10, sizeof($v));
        }

        public function test_le_todos_os_usuarios_corretamente() {
            $lista = User::all();

            $this->assertEquals('js@mail.com', $lista[0]['email']);
            $this->assertEquals('123456789@', $lista[4]['password']);
            $this->assertEquals('Sérgio', $lista[9]['name']);
        }

        public function test_atualiza_usuario_corretamente(){
            //lê o usuario
            $lucia = User::find(8);
            //verificar se é o usuario esta correto 
            $this->assertEquals('Lucia', $lucia ['name']);
            //altera alguma informação
            $lucia['email'] = 'luciamaria@gmail.com';
            //salva
            $lucia->save();
            //lê novamente o mesmo registro/usuario
            $lu = User::find(8);
            //verifica se o valor alterado está correto
            $this->assertEquals('luciamaria@gmail.com', $lucia ['email']);            
        }

        public function test_remove_usuario_corretamente(){
            //verificar se existe o voluntário
            $maria = User::find(3);
            //remover este voluntário
            $maria->delete();
            //verificar se a remoção, de fato ocorreu
            $maria = User::find(3);
            $this->assertNull($maria);
        }

        public function test_cadastro_usuario(){
            //arrange
            $ubd = new BlueskyDataBuilder();
            $row =  $ubd->getRow();
            //act
            User::create($row);

            //assert
            $v = User::all();
            $num = sizeof($v);
            $this->assertEquals(11, $num);

            $users = $v[$num -1];
            $this->assertEquals('pv@mail.com', $users['email']);
        }
}
