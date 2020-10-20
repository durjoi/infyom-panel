<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\datosDoUsuario;
use Faker\Generator as Faker;

$factory->define(datosDoUsuario::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'email' => $faker->word,
        'senha' => $faker->word,
        'tipo' => $faker->word,
        'telefone_ddd' => $faker->word,
        'telefone_numero' => $faker->word,
        'empresa' => $faker->word,
        'cargo_setor' => $faker->word,
        'direcionar' => $faker->word,
        'mensagem_instantanea' => $faker->word,
        'receber_sms' => $faker->word,
        'w_acesso_whatsapp' => $faker->word,
        'w_menu_consultas' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
