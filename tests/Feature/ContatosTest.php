<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\ContactUs;
use App\Helpers\ContatosDataBuilder;

class Contatos extends TestCase{
    //código de configuração
        public function setUp(): void{
            parent::setUp();
            ContactUs::truncate();
            $cdb = new ContatosDataBuilder();
            $c = $cdb->getData();
            ContactUs::insert($c);
        }

        public function test_le_um_usuario_contato(){
            //arrange(setup)
            //act
            $marco = ContactUs::find(5);
            $nome = $marco['name'];
            //assert
            $this->assertEquals('Marco', $nome);
        }

        public function test_le_todos_os_usuarios_contatos() {
            $c = ContactUs::all();
            $this->assertEquals(10, sizeof($c));
        }

        public function test_le_todos_os_usuarios_contatos_corretamente() {
            $lista = ContactUs::all();

            $this->assertEquals('js@mail.com', $lista[0]['email']);
            $this->assertEquals('Numero errado', $lista[4]['descriptioncontact']);
            $this->assertEquals('Sérgio', $lista[9]['name']);
        }

        public function test_atualiza_usuario_contatos_corretamente(){
            //lê o contato
            $ana = ContactUs::find(9);
            //verificar se o contato esta correto 
            $this->assertEquals('Ana', $ana ['name']);
            //altera alguma informação
            $ana['email'] = 'Anaferraz@gmail.com';
            //salva
            $ana->save();
            //lê novamente o mesmo contato
            $lu = ContactUs::find(9);
            //verifica se o valor alterado está correto
            $this->assertEquals('Anaferraz@gmail.com',$ana ['email']);            
        }

        public function test_remove_usuario_contato_corretamente(){
            //verificar se existe o contato usuario
            $sergio = ContactUs::find(10);
            //remover este contato usuario
            $sergio->delete();
            //verificar se a remoção, de fato ocorreu
            $sergio = ContactUs::find(10);
            $this->assertNull($sergio);
        }

        public function test_cadastro_usuario_contato(){
            //arrange
            $cdb = new ContatosDataBuilder();
            $row =  $cdb->getRow();
            //act
            ContactUs::create($row);

            //assert
            $c = ContactUs::all();
            $num = sizeof($c);
            $this->assertEquals(11, $num);

            $users = $c[$num -1];
            $this->assertEquals('pv@mail.com', $users['email']);
        }


}
