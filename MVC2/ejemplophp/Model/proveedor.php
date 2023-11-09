<?php
class proveedor
{
	private $pdo;
    
    public $idfabrica;
    public $direccion;
    public $nomempresa;
    public $ciudad;
    public $estado;
    public $transporte;
	public $fechallegada;
    public $correo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM proveedor");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idfabrica)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM proveedor WHERE idfabrica = ?");
			          

			$stm->execute(array($idfabrica));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idfabrica)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM proveedor WHERE idfabrica = ?");			          

			$stm->execute(array($idfabrica));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE proveedor SET 
						direccion          = ?, 
						nomempresa        = ?,
                        ciudad        = ?,
						estado            = ?, 
						transporte = ?,
						fechallegada        = ?,
						correo        = ?
				    WHERE idfabrica = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->direccion, 
                        $data->nomempresa,
                        $data->ciudad,
                        $data->estado,
                        $data->transporte,
						$data->fechallegada,
						$data->correo,
                        $data->idfabrica
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `proveedor` (direccion,nomempresa,ciudad,estado,transporte,fechallegada,correo) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->direccion, 
                    $data->nomempresa,
                    $data->ciudad,
                    $data->estado,
                    $data->transporte,
					$data->fechallegada,
					$data->correo                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
