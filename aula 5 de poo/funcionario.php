<?php
class cursos {
	public $modulos;
	public $materia;
	public $media_para_passar;
	protected $mensalidade;
	private $matricula;
	function __construct($modulos = [], $materia = "Lógica de Programação", $media_para_passar = 7.0, $mensalidade = 13.000, $matricula = 0001) {
		$this->modulos = $modulos;
		$this->materia = $materia;
		$this->media_para_passar = $media_para_passar;
		$this->mensalidade = $mensalidade;
		$this->matricula = $matricula;
	}
}

class Turma {
	public $serie;
	public $email;
	public $horario;
	public $sala;
	public $alunos;

	function __construct($serie = 1, $email = 0, $horario = 2, $sala = "A") {
		$this->serie = $serie;
		$this->email = $email;
		$this->horario = $horario;
		$this->sala = $sala;
		$this->alunos = [];
	}

	function getSerie() {
		return $this->serie;
	}
	function getEmail() {
		return $this->email;
	}
	function getHorario() {
		return $this->horario;
	}
	function getSala() {
		return $this->sala;
	}
	function getAluno() {
		return $this->alunos;
	}
}

class Alunos {
	protected $email;
	private $cpf;
	public $nome;
	public $idade;
	public $matricula;

	function __construct($nome = "luquinhas", $cpf = 0, $idade = 12, $email = 0, $matricula = 0) {
		$this->cpf = $cpf;
		$this->nome = $nome;
		$this->email = $email;
		$this->idade = $idade;
		$this->matricula = $matricula;
	}

	function estudar($aluno, $turma) {
		$turma->alunos[] = $aluno;
		echo "O aluno: " . $aluno . " da turma: " . $turma->serie . ", está estudando na sala: '" . $turma->sala . "'";
	}
	function apresentar($aluno, $turma, $materia, $modulos, $horario) {
		$turma->alunos[] = $aluno;
		$cursos->materia = $materia;
		$cursos->modulos = $modulos;
		echo "O aluno: ". $aluno. " da turma ". $turma->serie. " terá que apresentar um trabalho de: ". $cursos->materia. " do modulo". $cursos->modulos. " no horário: ". $horario;
	}
}

class Funcionario {
	protected $cpf;
	protected $email;
	protected $salario;
	private $formacao;
	public $nome;
	public $cargo;

	function __construct($nome = "Funcionário", $cpf = 0, $formacao = "Professor", $email = 0, $cargo = "presidente", $salario = 10) {
		$this->cpf = $cpf;
		$this->nome = $nome;
		$this->email = $email;
		$this->salario = $salario;
		$this->formacao = $formacao;
		$this->cargo = $cargo;
	}

	function getNome() {
		return $this->nome;
	}

	function getCpf() {
		return $this->cpf;
	}

	function getEmail() {
		return $this->email;
	}

	function getSalario() {
		return $this->salario;
	}

	function getFormacao() {
		return $this->formacao;
	}

	function baterPonto($horario) {
		if ($horario > 13) {
			echo $this->nome . " bateu o ponto no horário: " . $horario. "da manhã";
		} else {
			echo $this->nome . " bateu o ponto no horário: " . $horario. " da tarde";
		}
	}

	function cadastrarAluno($aluno, $turma) {
		$turma->alunos[] = $aluno;
		echo $aluno . " cadastrado na turma " . $turma->serie;
	}
}

class Professor extends Funcionario {
	function __construct($nome, $cpf, $formacao, $email, $cargo, $salario) {
		parent::__construct($nome, $cpf, $formacao, $email, $cargo, $salario);
	}
}

// Área dos objetos
$turma1 = new Turma();
$func1 = new Funcionario();
$aluno1 = new Alunos();
$aluno2 = new Alunos();
$curso1 = new cursos();

// Área de mostrar as coisas
$func1->cadastrarAluno("Davi", $turma1). "\n". $func1->baterPonto(12);
echo "\n";
$aluno1->estudar("Pipo", $turma1);
$aluno2->apresentar("pedro", "Portugues", $turma1, $curso1, 2, 13);
echo "\n";