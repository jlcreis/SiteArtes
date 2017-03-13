<?php namespace artes\Http\Controllers;

use Illuminate\Support\Facades\DB;
use artes\Produto;
use artes\Categorias;
use artes\CategoriaProduto;
use Request;

class PublicoController extends Controller {
    
    
    public function __construct(){

    }
    //lista destaques de produtos
    public function listaDestaques(){
        $categorias = DB::select('select c.id, c.categoria from categorias c order by c.categoria');
        $produtos = Produto::all();
        $resultado = array();
        foreach ($produtos as $p){
             $destaque = DB::select('select * from imagems i where i.idProduto = ? limit 1',[$p->id]);
             $resultado = array_merge($resultado, $destaque);
        }
        //return $resultado;
        return view('publico.destaques')->with(array('destaques'=>$resultado, 'categorias'=>$categorias));
    }
    
    //lista geral de produtos
    public function listaProduto(){
        
        $categorias = DB::select('select c.id, c.categoria from categorias c order by c.categoria');
        
        $produtos = Produto::all();

        return view('publico.listaProdutos')->with(array('produtos'=>$produtos, 'categorias'=>$categorias));

    }
    //produto especifico
    public function mostraProduto($id){

        $produto = Produto::find($id);

        return view('detalhes')->with('p', $produto);
    }

    //lista de categorias
    public function listaCategoria(){
        
        $categorias = DB::table('categorias')->select('id','categoria')->orderBy('categoria', 'asc')->get();
        
        return view('categorias')->withCategorias($categorias);

    }

    //lista de produtos por categoria
    public function mostraProdutoCategoria(){

        $id = Request::input('id');
        $produtosCategoria = DB::select('select * from categoria_produtos c join produtos p where p.id = c.idProduto and c.idCategoria = ?', [$id]);

        return view('produtos')->withProdutos($produtosCategoria)->withInput(Request::only('categoria'));
    }
    
    public function quemSomos(){
        return view('publico.quem_somos');
    }
}