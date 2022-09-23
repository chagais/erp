<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\CategoriaService;

class CategoriaController extends Controller{
   private $tabela = "categoria";
   private $campo  = "id_categoria";
   
    public function index(){
       $dados["lista"] = Service::lista($this->tabela); 
       $dados["view"]  = "Categoria/Index";
       $this->load("template", $dados);
    }
    
    public function create(){
        $dados["categoria"] = Flash::getForm();
        $dados["view"] = "Categoria/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id){
        $categoria = Service::get($this->tabela, $this->campo, $id);       
        if(!$categoria){
            $this->redirect(URL_BASE."categoria");
        }
        
        $dados["categoria"]   = $categoria;
        $dados["view"]      = "Categoria/Create";
        $this->load("template", $dados);
    }
    
    public function salvar(){
        $categoria = new \stdClass();
        $categoria->id_categoria        = $_POST["id_categoria"];
        $categoria->categoria 		    = $_POST['categoria'];
        $categoria->endereco 		    = $_POST['endereco'];
        $categoria->complemento 		= $_POST['complemento'];
        $categoria->numero 			= $_POST['numero'];
        $categoria->bairro 			= $_POST['bairro'];
        $categoria->cidade 			= $_POST['cidade'];
        $categoria->uf 		        = $_POST['uf'];
        $categoria->cep		        = $_POST['cep'];
        $categoria->celular	        = $_POST['celular'];
        $categoria->cpf 			    = $_POST['cpf'];
        $categoria->sexo		        = $_POST['sexo'];
        $categoria->email		        = $_POST['email'];
        $categoria->senha		        = $_POST['senha'];
        $categoria->data_cadastro		= date("Y-m-d");
        
        Flash::setForm($categoria);
        if(CategoriaService::salvar($categoria, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."categoria");
        }else{
            if(!$categoria->id_categoria){
                $this->redirect(URL_BASE."categoria/create");
            }else{
                $this->redirect(URL_BASE."categoria/edit/".$categoria->id_categoria);
            }
        }
    }
    
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."categoria");
    }
}

