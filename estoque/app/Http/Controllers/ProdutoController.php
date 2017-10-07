<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller {

	public function lista()
	{
		$produtos = DB::select('select * from produtos');

		if (view()->exists('listagem'))
		{
			return view('listagem')->withProdutos($produtos);
		}
	}
}