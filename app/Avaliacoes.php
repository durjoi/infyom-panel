<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Avaliacoes extends Model {

	public function fetch() {
		return DB::table('avaliacoes')->get()->toArray();
	}
	
	public function update_record($data) {
		DB::table('avaliacoes')->where('id', $data['id'])->update($data);
	}

	public function insert_record($data) {
		DB::table('avaliacoes')->insert($data);
	}

	public function delete_record($data) {
		DB::table('avaliacoes')->where('id', $data['delete_record_id'])->delete();
	}
}
