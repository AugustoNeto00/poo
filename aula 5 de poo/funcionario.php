<?php
//Uma coisa que jesus me ensinou ↓
$tabelaTurmas = []; //Digamos que seja um mini banco de dados, serve pra armazenar os alunos cadastrar
class turma {
    function __construct($serie = 1, $email = 0, $horario = 2, $sala = 'A'){
        $this->serie=$serie;
        $this->email=$email;
        $this->horario=$horario;
        $this->sala=$sala;
        $this->alunos=[];
    }
    function getSerie(){
        return $this->serie;
    }
    function getEmail(){
        return $this->email;
    }
    function getHorario(){
        return $this->$horario;
    }
    function getSala(){
        return $this->sala;
    }
    function getAluno(){
        return $this->alunos;
    }
}
class alunos {
    protected $email;
    private $cpf;
    function __construct($nome = "luquinhas", $cpf = 0, $idade = 12, $email = 0, $matricula = 0){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->idade=$idade;
        $this->matricula=$matricula;
    }
}
class funcionario {
    protected $cpf = 0;
    protected $email;
    protected $salario;
    private $formação;
    function __construct($nome = "Peido", $cpf = 0 ,$formação = "gay" ,$email = 0 ,$cargo = "presidente" , $salario = 10){ //é possivel criar atributos publicos diretamente do construct, ajuda bastante e economiza linhas
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->salario = $salario;
        $this->formação = $formação;
        $this->email= $email;
        $this->cargo= $cargo;
    }
    function getNome(){
        return $this->nome;
    }
    function getCpf(){
        return $this->cpf;
    }
    function getEmail(){
        return $this->email;
    }
    function getSalario(){
        return $this->salario;
    }
    function getFormação(){
        return $this->cargo;
    }
    function baterPonto($horario){
        echo $this->nome. " bateu o ponto no horário: ". $horario;
    }
    function cadastrarAluno($aluno, $turma){
        $turma->alunos[] = $aluno;
        echo $aluno. " cadastrado  na turma". $turma->serie;
    }

}
class professor extends funcionario {
    function __construct($nome, $cpf ,$formação ,$email ,$cargo , $salario, $turma){
        parent::__construct($nome, $cpf ,$formação ,$email ,$cargo , $salario);
        $this->turma=$turma;
    }
}


//Area dos objts
$turma1 = new turma();
$func1 = new funcionario();

//Area de mostrar as coisas
echo $func1->cadastrarAluno("davi", $turma1);