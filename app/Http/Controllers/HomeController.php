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

    public function homepage() {

        $data = array();
        $dates = array();
        $counts = array();

        $physio_therapy = DB::select("SELECT COUNT(physio_therapy) AS 'physio_therapy' FROM eval_report");
        $physio_therapy = $physio_therapy[0]->physio_therapy;

        $cardio = DB::select("SELECT COUNT(*) AS 'cardio' FROM eval_report WHERE physio_therapy LIKE '%cardio%'");
        $cardio = $cardio[0]->cardio;
        if ($cardio) {
            $data['cardio'] = ($cardio / $physio_therapy) * 100;
        } else {
            $data['cardio'] = 0;
        }

        $respira = DB::select("SELECT COUNT(*) AS 'respira' FROM eval_report WHERE physio_therapy LIKE '%respira%'");
        $respira = $respira[0]->respira;
        if ($respira) {
            $data['respira'] = ($respira / $physio_therapy) * 100;
        } else {
            $data['respira'] = 0;
        }

        $neuro = DB::select("SELECT COUNT(*) AS 'neuro' FROM eval_report WHERE physio_therapy LIKE '%neuro%'");
        $neuro = $neuro[0]->neuro;
        if ($neuro) {
            $data['neuro'] = ($neuro / $physio_therapy) * 100;
        } else {
            $data['neuro'] = 0;
        }

        $cognitiva = DB::select("SELECT COUNT(*) AS 'cognitiva' FROM eval_report WHERE physio_therapy LIKE '%cognitiva%'");
        $cognitiva = $cognitiva[0]->cognitiva;
        if ($cognitiva) {
            $data['cognitiva'] = ($cognitiva / $physio_therapy) * 100;
        } else {
            $data['cognitiva'] = 0;
        }

        $month = date('Y-m');

        $this_month = DB::select("SELECT COUNT(*) AS 'all' FROM eval_report WHERE assessment_date_and_time LIKE '%$month%'");
        
        if($this_month) {
            $this_month = $this_month[0]->all;
            $data['this_month'] = $this_month;
        } else {
            $data['this_month'] = 0;
        }

        $result = DB::select("SELECT DISTINCT(DATE_FORMAT(assessment_date_and_time, '%Y-%m')) AS 'date' FROM eval_report ORDER BY assessment_date_and_time");

        foreach ($result as $key => $value) {
            $dates[$key] = $value->date;
            $res = DB::select("SELECT COUNT(assessment_date_and_time) AS 'total' FROM eval_report WHERE assessment_date_and_time LIKE '%$value->date%'");
            $counts[$key] = $res[0]->total;
        }

        if($dates) {
            $data['dates'] = json_encode($dates);
        } else {
            $data['dates'] = 0;
        }

        if($counts) {
            $data['counts'] = json_encode($counts);
        } else {
            $data['counts'] = 0;
        }

        $count_doctors = DB::select("SELECT COUNT(DISTINCT(responsible_pulsar_professional)) AS 'count' FROM eval_report");
        
        if($count_doctors) {
            $count_doctors = $count_doctors[0]->count;
            $data['count_doctors'] = $count_doctors;
        } else {
            $data['count_doctors'] = 0;
        }

        $one_way = DB::select("SELECT COUNT(*) AS 'count' FROM avaliacoes WHERE times_visited <= 1 OR times_visited IS NULL");

        if($one_way) {
            $one_way = $one_way[0]->count;
            $data['one_way'] = $one_way;
        } else {
            $data['one_way'] = 0;
        }


        return view('homepage', $data);
    }

}
