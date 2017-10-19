<?php
	
	use Illuminate\Database\Seeder;
	use App\User;
	use RaccoonSoftware\Slug\Facade\Slug;

	class AddSlugSeeder extends Seeder {

		public function run(){
			$users = User::all();
			foreach($users as $user){
				$user->slug = Slug::convert($user->name);
				$user->save();		
			}

		}

	}

?>