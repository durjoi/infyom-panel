<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Avaliacoes;
use App\EvalReport;


class AvaliacoesController extends Controller {

	public function index() {
		$data = array();
		$avaliacoes = new Avaliacoes();
		$result = $avaliacoes->fetch();
		$result_array = array();

		foreach ($result as $key => $value) {
			if($value->in_table) {
				$result_array[$key]['id'] = $value->id;
				$result_array[$key]['patient_id'] = $value->patient_id;
				$result_array[$key]['nome'] = $value->nome;
				$result_array[$key]['avaliacao'] = $value->avaliacao;
				$result_array[$key]['data'] = $value->data;
				$result_array[$key]['profissional'] = $value->profissional;
				$result_array[$key]['relatorio'] = $value->relatorio;
				$result_array[$key]['enviado_res'] = $value->enviado_res;
				$result_array[$key]['created_at'] = $value->created_at;
				$result_array[$key]['updated_at'] = $value->updated_at;
			}
		}
		$data['result'] = $result_array;

		return view('avaliacoes.index', $data);
	}

	public function create() {
		$data = array();
		$eval_report = new EvalReport();
		$result = $eval_report->fetch();
		$result_array = array();

		foreach ($result as $key => $value) {
			$result_array[$key]['id'] = $value->id;
			$result_array[$key]['nome'] = $value->name_patient;
		}
		$data['result'] = $result_array;

		return view('avaliacoes.create', $data);
	}

	public function insert(Request $request) {
		$data = $request->all();
		$id = $data['nome'];
		array_shift($data);
		$result = DB::table('avaliacoes')->where('patient_id', $data['nome'])->get()->toArray();
			// echo "<pre>"; print_r($result); die;
		if($result){
			$times_visited = $result[0]->times_visited;
		} else {
			$times_visited = null;
		}

		if($times_visited){
			$total = DB::table('avaliacoes')->where('patient_id', $data['nome'])->get('times_visited')->toArray();
			$total = $total[0]->times_visited;
			if($total < 6) {
				$times_visited++;
				DB::table('avaliacoes')->where('patient_id', $id)->update([
					'avaliacao_'.($times_visited-1) => $data['avaliacao'],
					'data_'.($times_visited-1) => $data['data'],
					'profissional_'.($times_visited-1) => $data['profissional'],
					'relatorio_'.($times_visited-1) => $data['relatorio'],
					'enviado_res_'.($times_visited-1) => $data['enviado_res'],
					'times_visited' => $times_visited
				]);
			}
		} else {
			$times_visited = 1;
			// echo "<pre>"; print_r($times_visited); die;
			$id = $data['nome'];
			$data['patient_id'] = $id;
			$name = DB::table('eval_report')->select('name_patient')
											->where('id', $id)
											->get()->toArray();
			$name = $name[0]->name_patient;
			$data['nome'] = $name;
			$avaliacoes = new Avaliacoes();
			$avaliacoes->insert_record($data);
			DB::table('avaliacoes')->where('patient_id', $id)->update(['times_visited' => $times_visited]);
		}

		return redirect('avaliacoes');
	}

	public function delete(Request $request) {

		$data = $request->all();
		$id = $data['delete_patient_id'];
		$avaliacoes = new Avaliacoes();
		$avaliacoes->delete_record($request);

		return redirect('avaliacoes');
	}

	public function read(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('avaliacoes')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('avaliacoes');
		} else {
			$data['result'] = $result;
			return view('avaliacoes.view', $data);
		}
	}

	public function edit(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('avaliacoes')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('avaliacoes');
		} else {
			$data['result'] = $result;
			return view('avaliacoes.edit', $data);
		}
	}

	public function update(Request $request) {
		$data = $request->all();
		array_shift($data);
		$avaliacoes = new Avaliacoes();
		$avaliacoes->update_record($data);
		return redirect('avaliacoes');
	}
}