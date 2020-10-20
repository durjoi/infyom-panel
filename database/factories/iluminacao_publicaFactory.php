<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\iluminacao_publica;
use Faker\Generator as Faker;

$factory->define(iluminacao_publica::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idra' => $faker->randomDigitNotNull,
        'idbairro' => $faker->randomDigitNotNull,
        'idlogradouro' => $faker->randomDigitNotNull,
        'idposte' => $faker->randomDigitNotNull,
        'poste_numero' => $faker->word,
        'coordenada_x' => $faker->randomDigitNotNull,
        'coordenada_y' => $faker->randomDigitNotNull,
        'visavis' => $faker->randomDigitNotNull,
        'referencia' => $faker->word,
        'poste_propriedade' => $faker->word,
        'poste_status' => $faker->word,
        'poste_data_instalacao' => $faker->word,
        'idsuporte' => $faker->randomDigitNotNull,
        'suporte_data_instalacao' => $faker->word,
        'idluminaria' => $faker->randomDigitNotNull,
        'luminaria_numero' => $faker->word,
        'fase_ligacao' => $faker->word,
        'altura_montagem' => $faker->randomDigitNotNull,
        'luminaria_data_instalacao' => $faker->word,
        'idlampada' => $faker->randomDigitNotNull,
        'quantidade_lampada' => $faker->randomDigitNotNull,
        'horas_ligada' => $faker->word,
        'lampada_data_instalacao' => $faker->word,
        'idreator' => $faker->randomDigitNotNull,
        'reator_data_instalacao' => $faker->word,
        'idrele' => $faker->randomDigitNotNull,
        'rele_data_instalacao' => $faker->word,
        'idrede' => $faker->randomDigitNotNull,
        'idtransformador' => $faker->randomDigitNotNull,
        'idmedidor' => $faker->randomDigitNotNull,
        'medidor_data_instalacao' => $faker->word,
        'idobjetoiluminado' => $faker->randomDigitNotNull,
        'idtarifa' => $faker->randomDigitNotNull,
        'observacoes' => $faker->word,
        'demanda_w' => $faker->word,
        'consumo_kwh' => $faker->word,
        'quantidade_os_pendente' => $faker->word,
        'quantidade_os_executada' => $faker->word,
        'quantidade_os_cancelada' => $faker->word,
        'quantidade_os_normalizada' => $faker->word,
        'icone' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuarioi' => $faker->randomDigitNotNull,
        'alteradoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'cadastro_manual' => $faker->randomDigitNotNull,
        'iddigitacao_cadastro' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
