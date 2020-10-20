<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\usuario;
use Faker\Generator as Faker;

$factory->define(usuario::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'email' => $faker->word,
        'senha' => $faker->word,
        'tipo' => $faker->word,
        'telefone_ddd' => $faker->randomDigitNotNull,
        'telefone_numero' => $faker->randomDigitNotNull,
        'empresa' => $faker->word,
        'cargo_setor' => $faker->word,
        'direcionar' => $faker->word,
        'mensagem_instantanea' => $faker->randomDigitNotNull,
        'receber_mensagem' => $faker->randomDigitNotNull,
        'receber_sms' => $faker->randomDigitNotNull,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'w_acesso_whatsapp' => $faker->randomDigitNotNull,
        'w_menu_consultas' => $faker->randomDigitNotNull,
        'w_menu_veiculos' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
