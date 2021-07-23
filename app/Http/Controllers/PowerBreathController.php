<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\PowerBreath;
use App\EvalReport;


class PowerBreathController extends Controller {

	public function index() {
		$data = array();
		$power_breath = new PowerBreath();
		$result = $power_breath->fetch();
		$result_array = array();

		foreach ($result as $key => $value) {
			// if($value->in_table) {
				$result_array[$key]['id'] = $value->id;
				$result_array[$key]['nome'] = $value->nome;
				$result_array[$key]['idade'] = $value->idade;
				$result_array[$key]['peso'] = $value->peso;
				$result_array[$key]['altura'] = $value->altura;
				$result_array[$key]['genero'] = $value->genero;
			// }
		}
		$data['result'] = $result_array;

		return view('power_breath.index', $data);
	}

	public function create() {
		$data = array();
		$eval_report = new EvalReport();
		$result = $eval_report->fetch();
		$result_array = array();

		foreach ($result as $key => $value) {
			if (!$value->in_power_breath) {
				$result_array[$key]['id'] = $value->id;
				$result_array[$key]['nome'] = $value->name_patient;
			}
		}
		$data['result'] = $result_array;

		return view('power_breath.create', $data);
	}

	public function insert(Request $request) {
		$data = $request->all();
		// echo "<pre>"; print_r($data); die;
		array_shift($data);
		$id = $data['nome'];
		$data['patient_id'] = $id;
		$name = DB::table('eval_report')->select('name_patient')
										->where('id', $id)
										->get()->toArray();
		$name = $name[0]->name_patient;
		$data['nome'] = $name;
		DB::table('eval_report')->where('id', $id)->update(['in_power_breath' => '1']);
		$power_breath = new PowerBreath();
		$power_breath->insert_record($data);

		return redirect('power_breath');
	}

	public function delete(Request $request) {

		$data = $request->all();
		$id = $data['delete_patient_id'];
		$power_breath = new PowerBreath();
		$power_breath->delete_record($request);
		DB::table('eval_report')->where('id', $id)->update(['in_power_breath' => '0']);

		return redirect('power_breath');
	}

	public function read(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('power_breath')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('power_breath');
		} else {
			$data['result'] = $result;
			return view('power_breath.view', $data);
		}
	}

	public function edit(Request $request) {
		$id = $request->route('id');
		$data = array();
		$result = DB::table('power_breath')->where('id', $id)->get()->toArray();
		if(count($result) == 0){
			return redirect('power_breath');
		} else {
			$data['result'] = $result;
			return view('power_breath.edit', $data);
		}
	}

	public function update(Request $request) {
		$data = $request->all();
		array_shift($data);
		$power_breath = new PowerBreath();
		$power_breath->update_record($data);
		return redirect('power_breath');
	}
}