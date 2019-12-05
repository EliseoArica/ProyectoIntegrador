<?php
namespace Database\Procedures;
use DB;

class RegistrarEmpresaProcedure {

    //Método que llama al procedimiento almacenado
    public function spRegistrarEmpresa($email, $password, $name, $business_name, $representative, $ruc)
    {
        return DB::select('CALL sp_registrar_empresa(?,?,?,?,?,?)', array($email, $password, $name, $business_name, 
        $representative, $ruc));
    }
}