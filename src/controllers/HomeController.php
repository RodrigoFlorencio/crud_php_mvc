<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Funcionario;

class HomeController extends Controller {

    public function index() {

        // Instancie a classe FuncionarioModel para acessar os métodos dela
        $funcionarioModel = new Funcionario();

        // Chame o método da model para obter os vendedores
        $vendedores = $funcionarioModel->findAll();

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

        // Instancie a classe FuncionarioModel para acessar os métodos dela
        $funcionarioModel = new Funcionario();

        $data = $funcionarioModel->findByEmail($email);

        if($nome && $cidade && $email && $telefone) {

            // Instancie a classe FuncionarioModel para acessar os métodos dela
            $funcionarioModel = new Funcionario();

            $data = $funcionarioModel->findByEmail($email);

            if($data === null) {

                // O e-mail não existe, podemos adicionar o funcionário
                $dadosFuncionario = [
                    'nome' => $nome,
                    'cidade' => $cidade,
                    'email' => $email,
                    'telefone' => $telefone
                ];

                // Tente adicionar o funcionário
                if ($funcionarioModel->add($dadosFuncionario)) {
                
                    $this->redirect('/');

                } else {

                    echo "Erro ao adicionar funcionário.";
                    //$this->redirect('/add-vendedor');

                }

                //$this->redirect('/');

            } else {

                echo "Não retornou registro";

                //$this->redirect('/add-vendedor');

            }
    
        }

    }

    public function addVendas() {

        // Instancie a classe FuncionarioModel para acessar os métodos dela
        $funcionarioModel = new Funcionario();

        // Chame o método da model para obter os vendedores
        $vendedores = $funcionarioModel->findAll();
        
        $this->render('add-vendas', [
            'vendedores' => $vendedores
        ]);

    }

    public function fotos() {

        $this->render('fotos');
        
    }
    
    public function foto($idFuncionario) {

        //echo "Vendedor ID: ".$idFuncionario['id'];

        //$this->render('vendedor-detalhes');

        // Instancie a classe FuncionarioModel para acessar os métodos dela
        $funcionarioModel = new Funcionario();

        // Chame o método da model para obter os vendedores
        $vendedores = $funcionarioModel->findById($idFuncionario['id']);

        var_dump($vendedores);

        $this->render('vendedor-detalhes', [
            'vendedores' => $vendedores
        ]);

    }

    public function vendedorDetalhes($idFuncionario) {

        // Instancie a classe FuncionarioModel para acessar os métodos dela
        $funcionarioModel = new Funcionario();

        // Chame o método da model para obter os vendedores
        $vendedores = $funcionarioModel->findById($idFuncionario['id']);

        $this->render('vendedor-detalhes', [
            'vendedores' => $vendedores
        ]);
    }

    public function deletarFuncionario($id) {

        echo "Veio para delete id: $id";

        // Instancie a classe FuncionarioModel para acessar os métodos dela
        $funcionarioModel = new Funcionario();

        // Tenta deletar o funcionário
        if ($this->$funcionarioModel->delete($id)) {
            echo "Funcionário deletado com sucesso!";
            $this->redirect('/');
            // Faça redirecionamento ou outras ações após deletar
        } else {
            echo "Erro ao deletar funcionário.";
            // Lide com o erro, exiba uma mensagem ou faça outras ações
        }

    }

}