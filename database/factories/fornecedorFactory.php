<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\fornecedor;
use Faker\Generator as Faker;

$factory->define(fornecedor::class, function (Faker $faker) {

    return [
        'cnpj' => $faker->randomDigitNotNull,
        'razao_social' => $faker->word,
        'fantasia' => $faker->word,
        'endereco' => $faker->word,
        'numero' => $faker->randomDigitNotNull,
        'complemento' => $faker->word,
        'bairro' => $faker->word,
        'cidade' => $faker->word,
        'uf' => $faker->word,
        'cep' => $faker->randomDigitNotNull,
        'contato' => $faker->word,
        'telefone' => $faker->word,
        'fax' => $faker->word,
        'email' => $faker->word,
        'produtos' => $faker->word,
        'observacao' => $faker->word,
        'situacao' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
