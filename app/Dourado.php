<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Dourado extends Model {

	public function fetch() {
		return DB::table('dourado')->get()->toArray();
	}
	
	public function update_record($data) {
		DB::table('dourado')->where('id', $data['id'])->update($data);
	}

	public function insert_record($data) {
		DB::table('dourado')->insert($data);
	}

	public function delete_record($data) {
		DB::table('dourado')->where('id', $data['delete_record_id'])->delete();
	}
}
