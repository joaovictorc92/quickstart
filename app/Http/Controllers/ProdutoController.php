<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Http\Requests\ProdutosRequest;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

	public function __construct(){
		$this->middleware('auth',['only' => ['adiciona', 'remove']]);
	}
	
	public function lista(){
    	$produtos = Produto::all();
    	return view('produto.listagem')->with('produtos', $produtos);
	}

	public function mostra($id){
		$produto = Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe";
		}
		return view('produto.detalhes')->with('p',$produto);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(ProdutosRequest $request){
		Produto::create($request->all());

      	return redirect('/produtos')->withInput(Request::only('nome'));
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}

	public function listaJson(){
		$produtos = Produto::all();
		return $produtos;
	}
}