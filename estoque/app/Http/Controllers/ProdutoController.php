<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

	public function lista()
	{
		$produtos = DB::select('select * from produtos');

		if (view()->exists('produto.listagem'))
		{
			return view('produto.listagem')->withProdutos($produtos);
		}
	}

	public function mostra($id)
	{

		$produto = DB::select('select * from produtos where id = ?', [$id]);

		if (empty($produto))
		{
			return "Esse produto não existe";
		}
		return view('produto.detalhes')->withProduto($produto[0]);
	}


	public function novo()
	{
		return view('produto.formulario');
	}

	public function adiciona()
	{
		$nome 	    = Request::input('nome');
		$descricao  = Request::input('descricao');
		$valor      = Request::input('valor');
		$quantidade = Request::input('quantidade');

		# outro formato para buscar os dados subimetidos do formulário
		# $all = Request::all();
  		# $only = Request::only('nome', 'valor', '...');

		DB::insert('insert into produtos(nome, valor, descricao, quantidade) values (?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));

		// return redirect('/produtos')->withInput(Request::only('nome'));
		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

	}

	public function listaJson(){
	    $produtos = DB::select('select * from produtos');
	    return response()->json($produtos);
	}
}