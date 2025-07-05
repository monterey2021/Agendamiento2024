<?php
class Conectar 
{
    public static function con()
    {
        $cadena = "host = 'localhost' port = '5432' dbname = 'agenda_medica' user = 'postgres' password = 'mibebe'";
        $con = pg_connect($cadena) or die ("Error de conexion. ".pg_last_error());
        return $con;
    }
}

class consultas extends Conectar
{
    public static function get_datos($sql)
    {
        $res = pg_query(parent::con(), $sql) or die($sql.'<br>'. utf8_decode(pg_last_error()));
        if(isset($res)){
            while($reg = pg_fetch_assoc($res))
            {
                $t[]=$reg;
            }
            if(isset($t)){
                return $t;
            }else{
                return null;
            }
        }
    }
    public static function ejecutar_sql($sql)
    {
        if(pg_query(parent::con(), $sql)){
            return true;
        }else{
            return false;
        }
    }
     public static function ejecutar($sql)
    {
        $con = parent::con(); // Cambiado para usar la clase "Conectar"
        $resultado = pg_query($con, $sql);
        if (!$resultado) {
            die('Error al ejecutar la consulta: ' . pg_last_error($con));
        }
        return $resultado;
    }
}
// Obtener sucursales
$sql = "SELECT id_sucursal, nombre FROM sucursal";
$sucursales = consultas::get_datos($sql);

// Obtener datos de la agenda médica con nombres de pacientes y médicos
/*$sql = "SELECT agenda_medica.*, pacientes.nombre AS nombre_paciente,CONCAT(pacientes.nombre, ' ', pacientes.apellido) AS nombre_completo, medicos.nombre AS nombre_medico
        FROM agenda_medica
        JOIN pacientes ON agenda_medica.id_paciente = pacientes.id_paciente
        JOIN medicos ON agenda_medica.id_medico = medicos.id_medico
        ORDER BY agenda_medica.id_agenda";
$agenda_medica = consultas::get_datos($sql);*/

// Obtener datos de los pacientes
$sql = "SELECT id_paciente, nombre FROM pacientes";
$pacientes = consultas::get_datos($sql);

// Obtener datos de los médicos
$sql = "SELECT id_medico, nombre FROM medicos";
$medicos = consultas::get_datos($sql);

// Obtener datos de las sucursales
$sql = "SELECT id_sucursal, nombre FROM sucursal";
$sucursal = consultas::get_datos($sql);

// Obtener datos de las agendas medicas
$sql = "SELECT id_agenda FROM agenda_medica";
$agenda_medica = consultas::get_datos($sql);

// Obtener los citas de la base de datos
$sql = "SELECT id_cita FROM citas";
$citas = consultas::get_datos($sql);

// Obtener los recordatorios de la base de datos
$sql = "SELECT id_recordatorio FROM recordatorios";
$recordatorios = consultas::get_datos($sql);

// Obtener las consultas de la base de datos
$sql = "SELECT * FROM consultas";
$consultas = consultas::get_datos($sql);
?>
