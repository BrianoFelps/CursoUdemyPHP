<?php
declare(strict_types=1);

namespace App\Classes;

use DateTimeImmutable;
use PDO;

class DBConnection {
    // Propriedade protegida para armazenar a instância de conexão
    protected $conn;

    // Construtor que iniciará a conexão
    public function __construct() {
        $this->connect();
    }
    
    public function gravaPedido(string $nomeCliente, string $nomeFuncionario, array $ingredientes){
        $now = new DateTimeImmutable();

        $sql = "INSERT INTO pedidos (nome_cliente, nome_funcionario, ingredientes, created_on) 
                VALUES(:nome_cliente, :nome_funcionario, :ingredientes, :created_on)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam('nome_cliente', $nomeCliente, PDO::PARAM_STR);
                $stmt->bindParam('nome_funcionario', $nomeFuncionario, PDO::PARAM_STR);
                $stmt->bindParam('ingredientes', json_encode($ingredientes), PDO::PARAM_STR);
                $stmt->bindParam('created_on', $now->format('Y-m-d H:i:s'), PDO::PARAM_STR);

                try{
                    $stmt->execute();
                }catch(\Throwable $th){
                    echo $th;
                }
    }

    // Método privado responsável por criar a conexão com o banco de dados
    private function connect(): void {
        // Configuração do banco de dados em formato de array (DBConfig)
        $dbConfig = [
            'host'     => 'localhost',   // ou IP padrão, ex.: '127.0.0.1'
            'port'     => '3306',        // porta padrão do MySQL
            'dbname'   => 'confeiteiro', // nome do banco de dados
            'username' => 'root',        // usuário para conexão
            'password' => '',            // senha (vazia por padrão)
            'charset'  => 'utf8'         // charset
        ];

        // Construção do DSN utilizando sprintf para facilitar a formatação
        // O DSN segue o padrão do PDO para MySQL:
        // "mysql:host={host};port={port};dbname={dbname};charset={charset}"
        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=%s',
            $dbConfig['host'],
            $dbConfig['port'],
            $dbConfig['dbname'],
            $dbConfig['charset']
        );

        try {
            // Criação da instância PDO para realizar a conexão
            $this->conn = new PDO(
                $dsn,
                $dbConfig['username'],
                $dbConfig['password'],
                [
                    // Configura o modo de erro para exceção
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    // Define o modo de fetch padrão (por exemplo, associativo)
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
            // Opcional: Mensagem de sucesso para debug
            // echo "Conexão estabelecida com sucesso!<br>";
        } catch (PDOException $e) {
            // Em caso de erro, exibe a mensagem e interrompe a execução
            die("Erro na conexão: " . $e->getMessage());
        }
    }


    // Método público para retornar a instância da conexão
    public function getConnection() {
        return $this->conn;
    }

    // Aqui, futuramente, você poderá adicionar métodos para gravar pedidos,
    // executar queries, atualizar dados, etc.
}
