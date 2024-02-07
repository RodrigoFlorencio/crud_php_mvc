<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Funcionario_teste;

class HomeController extends Controller {

    public function index() {

        $vendedores = Funcionario_teste::select()->execute();

        $this->render('home', [
            'vendedores' => $vendedores
        ]);
    }

    public function adicionar() {
        
        $this->render('adicionar');

    }

    public function addAction() {
        
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $telefone = filter_input(INPUT_POST, 'telefone');

        if($nome && $cidade && $email && $telefone) {

            $data = Funcionario_teste::select()->where('email', $email)->execute();

            if(count($data) === 0) {

                Funcionario_teste::insert([
                    'nome' => $nome,
                    'cidade' => $cidade,
                    'email' => $email,
                    'telefone' => $telefone
                ])->execute();

                $this->redirect('/');

            } else {

                $this->redirect('/add-vendedor');

            }
    
        }

    }

    public function vendedorDetalhes($idVendedor) {

        $vendedores = Funcionario_teste::select()
                    ->join('vendas_teste_php', 'vendas_teste_php.idVendedor', '=', 'funcionario_teste.id', 'inner')
                    ->where('funcionario_teste.id', '=', $idVendedor)
                    ->execute();

        $this->render('vendedor-detalhes', [
            'vendedores' => $vendedores
        ]);
    }

}