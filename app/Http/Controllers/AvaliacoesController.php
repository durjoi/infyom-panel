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
			if (!$value->in_avaliacoes) {
				$result_array[$key]['id'] = $value->id;
				$result_array[$key]['nome'] = $value->name_patient;
			}
		}
		$data['result'] = $result_array;

		return view('avaliacoes.create', $data);
	}

	public function insert(Request $request) {
		$data = $request->all();
		array_shift($data);
		$id = $data['nome'];
		$data['patient_id'] = $id;
		$name = DB::table('eval_report')->select('name_patient')
										->where('id', $id)
										->get()->toArray();
		$name = $name[0]->name_patient;
		$data['nome'] = $name;
		DB::table('eval_report')->where('id', $id)->update(['in_avaliacoes' => '1']);
		$avaliacoes = new Avaliacoes();
		$avaliacoes->insert_record($data);

		return redirect('avaliacoes');
	}

	public function delete(Request $request) {

		$data = $request->all();
		$id = $data['delete_patient_id'];
		$avaliacoes = new Avaliacoes();
		$avaliacoes->delete_record($request);
		DB::table('eval_report')->where('id', $id)->update(['in_avaliacoes' => '0']);

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