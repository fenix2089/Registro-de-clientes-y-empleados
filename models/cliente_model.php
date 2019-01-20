<?php
class ClienteModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=serppii', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT id, DUI, Nombre, Correo, Apellido, Sexo, FechaNacimiento, TIMESTAMPDIFF(YEAR, FechaNacimiento, CURDATE()) AS Edad, telefono, direccion FROM clientes");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Cliente();

				$alm->__SET('id', $r->id);
				$alm->__SET('Nombre', $r->Nombre);
				$alm->__SET('Apellido', $r->Apellido);
                $alm->__SET('Correo', $r->Correo);
				$alm->__SET('Sexo', $r->Sexo);
				$alm->__SET('FechaNacimiento', $r->FechaNacimiento);
				$alm->__SET('Edad', $r->Edad);
				$alm->__SET('direccion', $r->direccion);
				$alm->__SET('DUI', $r->DUI);
				$alm->__SET('telefono', $r->telefono);
				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT id, DUI, Nombre, Correo, Apellido, Sexo, FechaNacimiento, TIMESTAMPDIFF(YEAR, FechaNacimiento, CURDATE()) AS Edad, telefono, direccion FROM clientes WHERE id = ?");


			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Cliente();

			$alm->__SET('id', $r->id);
			$alm->__SET('Nombre', $r->Nombre);
            $alm->__SET('Correo', $r->Correo);
			$alm->__SET('Apellido', $r->Apellido);
			$alm->__SET('Sexo', $r->Sexo);
			$alm->__SET('FechaNacimiento', $r->FechaNacimiento);
			$alm->__SET('Edad', $r->Edad);
			$alm->__SET('direccion', $r->direccion);
			$alm->__SET('DUI', $r->DUI);
			$alm->__SET('telefono', $r->telefono);
			return $alm;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try
		{
			$stm = $this->pdo->prepare("DELETE FROM clientes WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Cliente $data)
	{
		try
		{
			$sql = "UPDATE clientes SET
						DUI 	        = ?,
						Nombre          = ?,
						Apellido        = ?,
						direccion       = ?,
						telefono        = ?,
						Sexo            = ?,
						FechaNacimiento = ?,
                        Correo          = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('DUI'),
					$data->__GET('Nombre'),
					$data->__GET('Apellido'),
					$data->__GET('direccion'),
					$data->__GET('telefono'),
					$data->__GET('Sexo'),
					$data->__GET('FechaNacimiento'),
                    $data->__GET('Correo'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Cliente $data)
	{
		try
		{
		$sql = "INSERT INTO clientes (DUI,Nombre,Apellido,direccion,telefono,Sexo,FechaNacimiento,Correo)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('DUI'),
				$data->__GET('Nombre'),
				$data->__GET('Apellido'),
				$data->__GET('direccion'),
				$data->__GET('telefono'),
				$data->__GET('Sexo'),
				$data->__GET('FechaNacimiento'),
                $data->__GET('Correo'),
				)
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
