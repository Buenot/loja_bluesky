<?php 
namespace App\Helpers;
use Illuminate\Support\Facades\Hash;

class BlueskyDataBuilder {

    private $v = [
        ['name' => 'João',  'email' => 'js@mail.com', 'password'=> '12345@1'],
        ['name' => 'Paulo', 'email' => 'ps@mail.com', 'password'=>'321@'],
        ['name' => 'Maria', 'email' => 'mc@mail.com', 'password'=>'4321@'],
        ['name' => 'José',  'email' => 'jc@mail.com', 'password'=>'54321@'],
        ['name' => 'Marco', 'email' => 'mp@mail.com','password'=>'123456789@'],
        ['name' => 'Gilmar','email' => 'gt@mail.com', 'password'=>'12345678@'],
        ['name' => 'Taina Marins bueno','email' => 'buenotaina981@gmail.com', 'password'=>'12345467@'],
        ['name' => 'Lucia', 'email' => 'lv@mail.com', 'password'=>'123456@'],
        ['name' => 'Ana',  'email' => 'as@mail.com','password'=>'12345@'],
        ['name' => 'Sérgio','email' => 'sa@mail.com', 'password'=>'1234@']
    ];
    
    public function getData() {
        return $this->v;
    }
    
    public function getRow() {
        $v = ['name' => 'Paulo',
              'email' => 'pv@mail.com',
              'password'=>'1234@'
              ];
        return $v;
    }
}