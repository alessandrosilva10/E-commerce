<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("tb_estado")->insert([
            "idEstado"         => 11,
                "name"       => "Rondônia",
                "abbr"       => "RO"
            ], [
                "idEstado"         => 12,
                "name"       => "Acre",
                "abbr"       => "AC"
            ], [
                "idEstado"         => 13,
                "name"       => "Amazonas",
                "abbr"       => "AM"
            ], [
                "idEstado"         => 14,
                "name"       => "Roraima",
                "abbr"       => "RR"
            ], [
                "idEstado"         => 15,
                "name"       => "Pará",
                "abbr"       => "PA"
            ], [
                "idEstado"         => 16,
                "name"       => "Amapá",
                "abbr"       => "AP"
            ], [
                "idEstado"         => 17,
                "name"       => "Tocantins",
                "abbr"       => "TO"
            ], [
                "idEstado"         => 21,
                "name"       => "Maranhão",
                "abbr"       => "MA"
            ], [
                "idEstado"         => 22,
                "name"       => "Piauí",
                "abbr"       => "PI"
            ], [
                "idEstado"         => 23,
                "name"       => "Ceará",
                "abbr"       => "CE"
            ], [
                "idEstado"         => 24,
                "name"       => "Rio Grande do Norte",
                "abbr"       => "RN"
            ], [
                "idEstado"         => 25,
                "name"       => "Paraíba",
                "abbr"       => "PB"
            ], [
                "idEstado"         => 26,
                "name"       => "Pernambuco",
                "abbr"       => "PE"
            ], [
                "idEstado"         => 27,
                "name"       => "Alagoas",
                "abbr"       => "AL"
            ], [
                "idEstado"         => 28,
                "name"       => "Sergipe",
                "abbr"       => "SE"
            ], [
                "idEstado"         => 29,
                "name"       => "Bahia",
                "abbr"       => "BA"
            ], [
                "idEstado"         => 31,
                "name"       => "Minas Gerais",
                "abbr"       => "MG"
            ], [
                "idEstado"         => 32,
                "name"       => "Espírito Santo",
                "abbr"       => "ES"
            ], [
                "idEstado"         => 33,
                "name"       => "Rio de Janeiro",
                "abbr"       => "RJ"
            ], [
                "idEstado"         => 35,
                "name"       => "São Paulo",
                "abbr"       => "SP"
            ], [
                "idEstado"         => 41,
                "name"       => "Paraná",
                "abbr"       => "PR"
            ], [
                "idEstado"         => 42,
                "name"       => "Santa Catarina",
                "abbr"       => "SC"
            ], [
                "idEstado"         => 43,
                "name"       => "Rio Grande do Sul",
                "abbr"       => "RS"
            ], [
                "idEstado"         => 50,
                "name"       => "Mato Grosso do Sul",
                "abbr"       => "MS"
            ], [
                "idEstado"         => 51,
                "name"       => "Mato Grosso",
                "abbr"       => "MT"
            ], [
                "idEstado"         => 11,
                "name"       => "Rondônia",
                "abbr"       => "RO"
            ], [
                "idEstado"         => 12,
                "name"       => "Acre",
                "abbr"       => "AC"
            ], [
                "idEstado"         => 13,
                "name"       => "Amazonas",
                "abbr"       => "AM"
            ], [
                "idEstado"         => 14,
                "name"       => "Roraima",
                "abbr"       => "RR"
            ], [
                "idEstado"         => 15,
                "name"       => "Pará",
                "abbr"       => "PA"
            ], [
                "idEstado"         => 16,
                "name"       => "Amapá",
                "abbr"       => "AP"
            ], [
                "idEstado"         => 17,
                "name"       => "Tocantins",
                "abbr"       => "TO"
            ], [
                "idEstado"         => 21,
                "name"       => "Maranhão",
                "abbr"       => "MA"
            ], [
                "idEstado"         => 22,
                "name"       => "Piauí",
                "abbr"       => "PI"
            ], [
                "idEstado"         => 23,
                "name"       => "Ceará",
                "abbr"       => "CE"
            ], [
                "idEstado"         => 24,
                "name"       => "Rio Grande do Norte",
                "abbr"       => "RN"
            ], [
                "idEstado"         => 25,
                "name"       => "Paraíba",
                "abbr"       => "PB"
            ], [
                "idEstado"         => 26,
                "name"       => "Pernambuco",
                "abbr"       => "PE"
            ], [
                "idEstado"         => 27,
                "name"       => "Alagoas",
                "abbr"       => "AL"
            ], [
                "idEstado"         => 28,
                "name"       => "Sergipe",
                "abbr"       => "SE"
            ], [
                "idEstado"         => 29,
                "name"       => "Bahia",
                "abbr"       => "BA"
            ], [
                "idEstado"         => 31,
                "name"       => "Minas Gerais",
                "abbr"       => "MG"
            ], [
                "idEstado"         => 32,
                "name"       => "Espírito Santo",
                "abbr"       => "ES"
            ], [
                "idEstado"         => 33,
                "name"       => "Rio de Janeiro",
                "abbr"       => "RJ"
            ], [
                "idEstado"         => 35,
                "name"       => "São Paulo",
                "abbr"       => "SP"
            ], [
                "idEstado"         => 41,
                "name"       => "Paraná",
                "abbr"       => "PR"
            ], [
                "idEstado"         => 42,
                "name"       => "Santa Catarina",
                "abbr"       => "SC"
            ], [
                "idEstado"         => 43,
                "name"       => "Rio Grande do Sul",
                "abbr"       => "RS"
            ], [
                "idEstado"         => 50,
                "name"       => "Mato Grosso do Sul",
                "abbr"       => "MS"
            ], [
                "idEstado"         => 51,
                "name"       => "Mato Grosso",
                "abbr"       => "MT"
            ], [
                "idEstado"         => 52,
                "name"       => "Goiás",
                "abbr"       => "GO"
            ], [
                "idEstado"         => 53,
                "name"       => "Distrito Federal",
                "abbr"       => "DF"
            ], [
                "idEstado"        => 52,
                "name"       => "Goiás",
                "abbr"       => "GO"
            ], [
                "idEstado"         => 53,
                "name"       => "Distrito Federal",
                "abbr"       => "DF"
            ]
        );
    }
}
