<?php

class Usuario
{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//////////////////////////////
	/// ATRIBUTO DO ID:USUARIO ///
	//////////////////////////////
	public function getIdusuario()
	{
		return $this->idusuario;
	}
	public function setIdusuario($value)
	{
		$this->idusuario = $value;
	}
	////////////////////////////
	/// ATRIBUTO DO DESLOGIN ///
	////////////////////////////
	public function getDeslogin()
	{
		return $this->deslogin;
	}

	public function setDeslogin($value)
	{
		$this->deslogin = $value;
	}
	////////////////////////////
	/// ATRIBUTO DO DESSENHA ///
	////////////////////////////
	public function getDessenha()
	{
		return $this->dessenha;
	}

	public function setDessenha($value)
	{
		$this->dessenha = $value;
	}
	//////////////////////////////
	/// ATRIBUTO DO DTCADASTRO ///
	//////////////////////////////
	public function getDtcadastro()
	{
		return $this->dtcadastro;
	}

	public function setDtcadastro($value)
	{
		$this->dtcadastro = $value;
	}
	/////////////////////////////////////
	/// PUXAR ID DO USUARIO NA TABELA ///
	/////////////////////////////////////
	public function loadById($id)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM  tb_usuario WHERE idusuario = :ID", array(":ID"=>$id));

		if (count($results) > 0)
		{
			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}			
	/////////////////////////
	public function __toString()
	{
		if($this->getIdusuario())
		{
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}
		else
		{ 
			return 'Usuário inexistente';
		}

	}
}
?>