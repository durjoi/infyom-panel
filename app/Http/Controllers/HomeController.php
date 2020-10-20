<?php

namespace App\Http\Controllers;

use App\Mail\NotificacaoDiaria;
use App\Models\Estoque_saida;
use App\Models\Eventos;
use App\Models\ordemDeServico;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $indicadores = $this->getIndicadores();
        $indicadores['graficos'] = $this->getGraficos();
        $indicadores['pontosMapa'] = $this->getPontosMapa();
        return view('home')->with('indicadores', $indicadores);
    }
    public function email()
    {
        $indicadores = $this->getIndicadores();
        $indicadores['graficos'] = $this->getGraficos(false);
        $indicadores['pontosMapa'] = $this->getPontosMapa();
        Mail::to(['albertmoreira@gmail.com', 'contato@vivainovacao.com'])->send(new NotificacaoDiaria());
        return view('mail.notificacao')->with('indicadores', $indicadores);
    }
    private function getIndicadores(){
        $horaDoze = (new DateTime(now()))->modify('-12 Hour')->format('Y-m-d H:i:s');
        $horaVinteEQuatro = (new DateTime(now()))->modify('-24 Hour')->format('Y-m-d H:i:s');
        $horaQuarentaEOito = (new DateTime(now()))->modify('-48 Hour')->format('Y-m-d H:i:s');
        $indicadores =[];
        $indicadores['um'] = count(ordemDeServico::where([['created_at', '>=', $horaDoze],['status', '=', 0]])->get());
        $indicadores['dois'] = count(ordemDeServico::where([['created_at', '<', $horaDoze],['created_at', '>=', $horaVinteEQuatro],['status', '=', 0]])->get());
        $indicadores['tres'] = count(ordemDeServico::where([['created_at', '<', $horaVinteEQuatro],['created_at', '>=', $horaQuarentaEOito],['status', '=', 0]])->get());
        $indicadores['quatro'] = count(ordemDeServico::where([['created_at', '<', $horaQuarentaEOito], ['status', '=', 0]])->get());

        return $indicadores;
    }

    private function getGraficos($json = true){
        $graficos = [];
        $anterior = 0;
        for ($i = 0; $i < 12; $i++) {
            $mes = (new DateTime(now()))->modify('-'.$i.' Month')->format('Y-m');
            $graficos['area'][$i]['data'] = $mes;
            $graficos['area'][$i]['valor'] = count(Estoque_saida::where('incluidodoem', '>', $mes)->get()) - $anterior;
            $anterior += $graficos['area'][$i]['valor'];
        }
        $query = DB::table('eventos')
            ->select(DB::raw('cidades.descricao as label, count(eventos.id) as value'))
            ->join('cidades', 'eventos.id_cidade', '=' ,'cidades.id')
            ->groupBy('eventos.id_cidade')
            ->get();
        foreach ($query as $item) {
            $graficos['donut'][] = $item;
        }

        return $json ? json_encode($graficos) : $graficos;
    }

    private function getPontosMapa(){
        $pontosMapa = DB::table('iluminacao_publicas')
            ->select(DB::raw('poste_numero as titulo, coordenada_x as lat, coordenada_y as lng'))
            ->get();
        return json_encode($pontosMapa);
    }

}
