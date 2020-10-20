<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\pedido_cabecalho;
use Faker\Generator as Faker;

$factory->define(pedido_cabecalho::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'centro_custo' => $faker->word,
        'almoxarifado' => $faker->word,
        'telefone_fixo' => $faker->word,
        'telefone_celular' => $faker->word,
        'cnpj' => $faker->word,
        'inscricao_estadual' => $faker->word,
        'gerente_geral' => $faker->word,
        'encarregado_eletrica' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
