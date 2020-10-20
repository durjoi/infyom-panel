<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Digitacao_cadastros;
use Faker\Generator as Faker;

$factory->define(Digitacao_cadastros::class, function (Faker $faker) {

    return [
        'cidade' => $faker->word,
        'bairro' => $faker->word,
        'lograduro' => $faker->word,
        'visavis' => $faker->randomDigitNotNull,
        'referncia' => $faker->word,
        'transformador' => $faker->word,
        'medidor' => $faker->word,
        'poste_numero' => $faker->word,
        'luminaria_numero' => $faker->randomDigitNotNull,
        'coordenada_x' => $faker->word,
        'coordenada_y' => $faker->word,
        'poste_propriedade' => $faker->word,
        'poste_status' => $faker->word,
        'fase_ligacao' => $faker->word,
        'luminaria_propriedade' => $faker->word,
        'luminaria_estado' => $faker->word,
        'quantidade_lampada' => $faker->randomDigitNotNull,
        'observacoes' => $faker->word,
        'data_cadastro' => $faker->word,
        'cadastrador' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'idra' => $faker->randomDigitNotNull,
        'id_logradouro_tipo' => $faker->randomDigitNotNull,
        'id_rede' => $faker->randomDigitNotNull,
        'id_poste' => $faker->randomDigitNotNull,
        'id_lampada' => $faker->randomDigitNotNull,
        'id_rele' => $faker->randomDigitNotNull,
        'id_reator' => $faker->randomDigitNotNull,
        'id_objeto_iluminado' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
