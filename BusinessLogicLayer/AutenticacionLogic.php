<?php 

use \Firebase\JWT\JWT;

class AutenticacionLogic{

    public function getUser(Usuario $usuario){
        $email = $usuario->getEmail();
        $clave = $usuario->getClave();
        $usp = "CALL USP_LOGIN('$email','$clave')";
        //var_dump($usp);
        $array;//= array();
        try {
            $conexion = Conexion::openConnect();
            $resultado = $conexion->query($usp);
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
                    $array = $row;
                }
                //var_dump($array);
                //var_dump($array[0]["email"]);
                $payload = [
                    'iat' => time(),
                    'iss' => 'localhost',
                    'exp' => time() + 60,
                    'email' => $array["email"]
                    ];

                $array = JWT::encode($payload,"SECRET 123");
                return $array;
            }   
        } catch (mysqli_sql_exception $e) {
            echo $e;
        }
        return array();
    }
}

?>