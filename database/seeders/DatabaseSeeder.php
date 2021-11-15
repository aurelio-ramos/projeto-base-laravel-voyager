<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class DatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
	        VoyagerDatabaseSeeder::class,	        
	        VoyagerDummyDatabaseSeeder::class,
		]);
        //arquivos gerados pelo seeder de BREADS
        $this->seedersPath = database_path('seeds').'/breads'.'/';
        $this->seed('VoyagerDeploymentOrchestratorSeeder');
    }
}
