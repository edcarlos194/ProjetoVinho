<?php

require_once ('Vinho.php');

$v = new Vinho();

if(isset($_POST['btnCadastrar'])){
    $v -> setNome($_POST['nome']);
    $v -> setTipo($_POST['tipo']);
    $v -> setSafra($_POST['safra']);
    $v -> setPreco($_POST['preco']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .info {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Vinho</h2>
        <form action="" method="post" class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br/>
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" id="tipo" required><br/>
            <label for="safra">Safra:</label>
            <input type="text" name="safra" id="safra" required><br/>
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" name="preco" id="preco" required><br/>
            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"><br/>
        </form>

        <?php if(isset($v)): ?>
        <div class="info">
            <h2>Informações do Vinho</h2>
            <p><?php echo $v->mostrarVinho(); ?></p>
            <p><?php echo $v->verificarPreco($v->getPreco()); ?></p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>































<!--
Claro! Vamos revisar os principais conceitos de Orientação a Objetos em PHP:

1. Classes e Objetos:
   - Uma classe é uma estrutura que define o comportamento e as propriedades de um objeto.
   - Um objeto é uma instância de uma classe.

2. Atributos e Métodos:
   - Atributos são as características ou propriedades de um objeto.
   - Métodos são as funções ou comportamentos que um objeto pode realizar.

3. Encapsulamento:
   - É o conceito de esconder detalhes de implementação e proteger o estado de um objeto.
   - Atributos e métodos podem ser definidos como públicos, privados ou protegidos.
   - Métodos públicos podem ser acessados de fora da classe, métodos privados só podem ser acessados dentro da classe e métodos protegidos podem ser acessados dentro da classe e suas subclasses.

4. Herança:
   - É um mecanismo que permite que uma classe herde atributos e métodos de outra classe.
   - A classe que herda é chamada de classe filha ou subclasse, e a classe da qual ela herda é chamada de classe pai ou superclasse.
   - A herança permite a reutilização de código e a criação de uma hierarquia de classes.

5. Polimorfismo:
   - Permite que objetos de diferentes classes sejam tratados de maneira uniforme.
   - Um objeto pode se comportar de maneira diferente dependendo do contexto em que é usado.
   - O polimorfismo é alcançado por meio de métodos com o mesmo nome em classes diferentes, mas com implementações diferentes.

6. Abstração:
   - É o processo de simplificar a complexidade de um sistema, fornecendo uma interface simplificada para o usuário.
   - Em PHP, a abstração pode ser alcançada por meio de interfaces e classes abstratas.

7. Interfaces:
   - Uma interface define um contrato que as classes podem implementar.
   - Ela contém apenas a assinatura dos métodos, sem a implementação.
   - As classes que implementam uma interface devem fornecer uma implementação para todos os métodos definidos na interface.

8. Classes Abstratas:
   - Uma classe abstrata é uma classe que não pode ser instanciada diretamente.
   - Ela pode conter métodos abstratos (métodos sem implementação) e métodos concretos (métodos com implementação).
   - As subclasses de uma classe abstrata devem fornecer implementações para todos os métodos abstratos.

9. Métodos Mágicos:
   - São métodos especiais fornecidos pelo PHP que são chamados automaticamente em certas situações.
   - Exemplos incluem `__construct()` para construtor, `__destruct()` para destruidor, `__toString()` para representação de string, etc.
        -->