<?php
namespace src\models;

use \PDO;

class Funcionario {

    private $pdo;

    public function __construct() {
        // Configurações do banco de dados
        $dbDriver = \src\Config::DB_DRIVER;
        $dbHost = \src\Config::DB_HOST;
        $dbName = \src\Config::DB_DATABASE;
        $dbUser = \src\Config::DB_USER;
        $dbPass = \src\Config::DB_PASS;

        // Cria a string de conexão
        $dsn = "$dbDriver:host=$dbHost;dbname=$dbName;charset=utf8";

        try {
            // Inicia a conexão PDO
            $this->pdo = new PDO($dsn, $dbUser, $dbPass);
        } catch (\PDOException $e) {
            die('Erro de conexão com o banco de dados: ' . $e->getMessage());
        }
    }

    // Agora você pode usar $this->pdo para executar consultas no banco de dados

    public function findAll() {

        $sql = $this->pdo->query('SELECT * FROM funcionario_teste');
        return $sql->fetchAll();

    }

    public function findByIdNOInner($id) {

        $sql = $this->pdo->prepare("SELECT * FROM funcionario_teste WHERE funcionario_teste.id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    
        // Verifica se há resultados
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        // Retorna os resultados se existirem, caso contrário, retorna null
        return $result ? $result : null;

    }

    public function findById($id) {

        $sql = $this->pdo->prepare("SELECT * FROM funcionario_teste LEFT JOIN vendas_teste_php ON vendas_teste_php.idVendedor = funcionario_teste.id WHERE funcionario_teste.id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    
        // Verifica se há resultados
        $result = $sql->fetchAll();
    
        // Retorna os resultados se existirem, caso contrário, retorna null
        return $result ? $result : null;

    }

    public function findByEmail($email) {

        $sql = $this->pdo->prepare("SELECT * FROM funcionario_teste WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
    
        // Verifica se há resultados
        $result = $sql->fetch(PDO::FETCH_ASSOC);
    
        // Retorna os resultados se existirem, caso contrário, retorna null
        return $result ? $result : null;

    }

    public function add($dados) {

        $sql = $this->pdo->prepare("INSERT INTO funcionario_teste (nome, cidade, email, telefone) VALUES (:nome, :cidade, :email, :telefone)");

        $sql->bindValue(':nome', $dados['nome']);
        $sql->bindValue(':cidade', $dados['cidade']);
        $sql->bindValue(':email', $dados['email']);
        $sql->bindValue(':telefone', $dados['telefone']);

        try {
            $sql->execute();
            return true; // Sucesso ao adicionar
        } catch (\PDOException $e) {
            // Trate os erros de inserção, se necessário
            return false; // Falha ao adicionar
        }

    }

    public function editVendedor($dados) {
        
        $sql = $this->pdo->prepare("UPDATE funcionario_teste SET nome = :nome, cidade = :cidade, email = :email, telefone = :telefone WHERE id = :id");

        $sql->bindValue(':nome', $dados['nome']);
        $sql->bindValue(':cidade', $dados['cidade']);
        $sql->bindValue(':email', $dados['email']);
        $sql->bindValue(':telefone', $dados['telefone']);
        $sql->bindValue(':id', $dados['id']);

        try {
            $sql->execute();
            return true; // Sucesso ao adicionar
        } catch (\PDOException $e) {
            print_r($e);
            return false; // Falha ao adicionar
        }

    }

    public function addVendas($dados) {
        
        $sql = $this->pdo->prepare("INSERT INTO vendas_teste_php (idVendedor, produto, qtd, valor) VALUES (:idVendedor, :produto, :qtd, :valor)");

        $sql->bindValue(':idVendedor', $dados['idVendedor']);
        $sql->bindValue(':produto', $dados['produto']);
        $sql->bindValue(':qtd', $dados['qtd']);
        $sql->bindValue(':valor', $dados['valor']);

        try {
            $sql->execute();
            return true; // Sucesso ao adicionar
        } catch (\PDOException $e) {
            // Trate os erros de inserção, se necessário
            return false; // Falha ao adicionar
        }

    }

    public function delete($id) {
        
        $sql = $this->pdo->prepare("DELETE FROM funcionario_teste WHERE id = :id");
        $sql->bindValue(':id', $id['id']);

        try {
            $sql->execute();
            return true; // Sucesso ao deletar
        } catch (\PDOException $e) {
            return false; // Falha ao deletar
        }
        
    }

}
