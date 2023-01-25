<?php

namespace App\Http\Controllers;

use App\Models\carrinhodecompra;
use App\Models\Product;
use App\Http\Requests\StorecarrinhodecompraRequest;
use App\Http\Requests\UpdatecarrinhodecompraRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CarrinhodecompraController extends Controller
{
    /**
     * Exiba uma listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.carrinho');
    }

    /**
     * Mostre o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function addShoppingCart(Request $request)
    {
        $idProduct = $request->idProduct;    
        //  Validações são verificações de campos neste caso, podemos validar utilizando somente IF, ELSE e ELSE IF

        // TODO: receber id do produto
        $idProductFind = Product::where('id', $idProduct)->first();
        // Recebendo id do produto atraves so id vindo da tela 
        // TODO: Preciso saber do id usuario 
        // Como o usuario esta logado ?
        // TODO: caso não tenha id do usuario redirecionar para a tela de login
        // Chamar a rota
        $email = $request->session()->get('useremail');   
        $user = DB::table('users')->where('email', $email)->first();

        if(!is_null($idProductFind)){
            $carrinhodecompra = new carrinhodecompra();            
            $carrinhodecompra->product_id = $idProduct;
            $carrinhodecompra->user_id = $user->id;
            $carrinhodecompra->status = 'padding';
            $carrinhodecompra->save();
        }
        // TODO: Tendo as informações que eu preciso tenho que adicionar produtos no carrinho
        // TODO: Redirecionar para a tela do produto
        //$listProducts = DB::table('carrinhodecompras')->where('user_id', $user->id)->where('status', 'padding')->get();
        if ($request->session()->has('userid')) {
            $id= $request->session()->get('userid');
            }

        $listproducts = DB::table('carrinhodecompras')
        ->join('products', 'products.id', '=', 'carrinhodecompras.product_id')
        ->select('products.*','carrinhodecompras.id as crr_id')
        ->where('carrinhodecompras.user_id',  $id )
        ->where('carrinhodecompras.status', 'padding')
        ->get();
       
        $total = 0;
        foreach ($listproducts as $product) {
            $total += $product->price;
        }

return view('site.carrinho',['products' => $listproducts,'total' => $total]);

}

       
    /**
     * Armazene um recurso recém-criado no armazenamento.
     *
     * @param  \App\Http\Requests\StorecarrinhodecompraRequest  $request
     * @return \Illuminate\Http\Response
     */
    // TODO: Remover item do carrinho
    public function removeShoppingCart(Request $request)
    {
        $idCard = $request->idCard;
        // TODO: pesquisar item do carrinho

        // TODO: remover o item do carrinho -> delete no mabco de dados com o WHERE (id do produto no carrinho)
        $removeItemCart = carrinhodecompra::where('id', $idCard)->first();
        if(!is_null($removeItemCart)){
            $removeItemCart->delete();
        }        

        // Retornar para tela de HOME -> Ja sabe
        return redirect('/carrinho');
    }

    /**
     * Exiba o recurso especificado.
     *
     * @param  \App\Models\carrinhodecompra  $carrinhodecompra
     * @return \Illuminate\Http\Response
     */
    public function showAllShoppingCart(carrinhodecompra $carrinhodecompra)
    {
        // Select com o WHERE junto com o ID do usuario e diferente de comprado
    }
    /**
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \App\Http\Requests\UpdatecarrinhodecompraRequest  $request
     * @param  \App\Models\carrinhodecompra  $carrinhodecompra
     * @return \Illuminate\Http\Response
     */
    public function buy(Request $request)
    {
        
        
    }

    public function buyCart(Request $request)
    {
        $idUser = 1;

        $productsCart = carrinhodecompra::where('user_id', $idUser)->where('status','padding')->getget();
        
        if(!is_null($productsCart)){
            carrinhodecompra::where('user_id', $idUser)->where('status','padding')->lazyById(200, $column = 'id')->each->update(['status' => 'buy']);
            
        }
        
        return view('index');
    }
}
