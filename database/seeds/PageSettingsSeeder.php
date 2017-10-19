<?php
	
	use Illuminate\Database\Seeder;
	use App\Facts;

	class PageSettingsSeeder extends Seeder {

		public function run(){
			DB::table('facts')->insert([
				'title' => 'Ikhlas',
				'text' => 'Hati akan menemukan kedamaiannya saat kita mampu memaafkan. Jadilah pribadi yang anggun diatas ketulusan.'
			]);
			DB::table('facts')->insert([
				'title' => 'Emosional',
				'text' => 'Sikap emosional merupakan ciri belum terampil mengendalikan diri. Bagaimana mungkin dapat mengendalikan orang lain dengan baik, bila diri sendiri kurang terkendali.'
			]);
			DB::table('facts')->insert([
				'title' => 'Ingat Allah',
				'text' => 'Sesibuk apapun Anda hari ini, sholatnya harus tepat waktu. Ingat, adzan itu panggilan Allah, bersegeralah menghadapnya'
			]);
		}

	}

?>