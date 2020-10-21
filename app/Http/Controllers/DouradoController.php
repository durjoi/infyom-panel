<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Dourado;
use App\Avaliacoes;
use App\EvalReport;


class DouradoController extends Controller {

	public function index() {
		$data = array();
		$dourado = new Dourado();
		$result = $dourado->fetch();
		$result_array = array();

		foreach ($result as $key => $value) {
			// if($value->in_table) {
				$result_array[$key]['id'] = $value->id;
				$result_array[$key]['patient_id'] = $value->patient_id;
				$result_array[$key]['nome'] = $value->nome;
				$result_array[$key]['idade'] = $value->idade;
				$result_array[$key]['peso'] = $value->peso;
				$result_array[$key]['altura'] = $value->altura;
				$result_array[$key]['genero'] = $value->genero;
				$result_array[$key]['distancia_predita'] = $value->distancia_predita;
				$result_array[$key]['distancia_obtida_no_teste'] = $value->distancia_obtida_no_teste;
				$result_array[$key]['percentual_do_predito'] = $value->percentual_do_predito;
				$result_array[$key]['velocidade_media_do_teste'] = $value->velocidade_media_do_teste;
				$result_array[$key]['velocidade_media'] = $value->velocidade_media;
			// }
		}
		$data['result'] = $result_array;

		return view('dourado.index', $data);
	}

	public function create() {
		$data = array();
		$eval_report = new EvalReport();
		$result = $eval_report->fetch();
		$result_array = array();

		foreach ($result as $key => $value) {
			if (!$value->in_dourado) {
				$result_array[$key]['id'] = $value->id;
				$result_array[$key]['nome'] = $value->name_patient;
			}
		}
		$data['result'] = $result_array;

		return view('dourado.create', $data);
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
		DB::table('eval_report')->where('id', $id)->update(['in_dourado' => '1']);
		$dourado = new Dourado();
		$dourado->insert_record($data);
		// DB::table('dourado')->where('id', $id)->update(['in_table' => '1']);

		return redirect('dourado');
	}

	public function delete(Request $request) {

		$data = $request->all();
		$id = $data['delete_patient_id'];
		$dourado = new Dourado();
		$dourado->delete_record($request);
		DB::table('eval_report')->where('id', $id)->update(['in_dourado' => '0']);

		return redirect('dourado');
	}

	public function read(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('dourado')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('dourado');
		} else {
			$data['result'] = $result;
			return view('dourado.view', $data);
		}
	}

	public function edit(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('dourado')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('dourado');
		} else {
			$data['result'] = $result;
			return view('dourado.edit', $data);
		}
	}

	public function update(Request $request) {
		$data = $request->all();
		array_shift($data);
		$dourado = new Dourado();
		$dourado->update_record($data);
		return redirect('dourado');
	}
}