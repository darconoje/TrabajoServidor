<?php

use App\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Game::create([
            'name' => 'Red Dead Redemption 2',
            'genre' => 'Accion',
            'platform' => 'Consolas',
            'company' => 'Rockstar Games',
            'release' => '2018',
        ]);

        Game::create([
            'name' => 'GTA San Andreas',
            'genre' => 'Accion',
            'platform' => 'Consolas',
            'company' => 'Rockstar Games',
            'release' => '2004',
        ]);

        Game::create([
            'name' => 'GTA V',
            'genre' => 'Accion',
            'platform' => 'Consolas',
            'company' => 'Rockstar Games',
            'release' => '2013',
        ]);

        Game::create([
            'name' => 'FIFA 20',
            'genre' => 'Deportes',
            'platform' => 'Consolas',
            'company' => 'Electronic Arts',
            'release' => '2019',
        ]);

        Game::create([
            'name' => 'Los Sims 4',
            'genre' => 'Simulacion',
            'platform' => 'PC',
            'company' => 'Electronic Arts',
            'release' => '2014',
        ]);        

        Game::create([
            'name' => 'Football Manager 2020',
            'genre' => 'Deportes',
            'platform' => 'PC',
            'company' => 'Sports Interactive',
            'release' => '2019',
        ]);

        Game::create([
            'name' => 'Uncharted 4',
            'genre' => 'Accion',
            'platform' => 'Consolas',
            'company' => 'Sony',
            'release' => '2016',
        ]);

        Game::create([
            'name' => 'NBA 2K20',
            'genre' => 'Deportes',
            'platform' => 'Consolas',
            'company' => '2K Games',
            'release' => '2019',
        ]);

        Game::create([
            'name' => 'League of Legends',
            'genre' => 'Multijugador',
            'platform' => 'PC',
            'company' => 'Riot Games',
            'release' => '2009',
        ]);
          
        Game::create([
            'name' => 'TES: Skyrim',
            'genre' => 'Rol',
            'platform' => 'PC',
            'company' => 'Bethesda Softworks',
            'release' => '2011',
        ]);

        Game::create([
            'name' => 'Fallout 4',
            'genre' => 'Rol',
            'platform' => 'PC',
            'company' => 'Bethesda Softworks',
            'release' => '2015',
        ]);

        Game::create([
            'name' => 'Fallout Shelter',
            'genre' => 'Simulacion',
            'platform' => 'Moviles',
            'company' => 'Bethesda Softworks',
            'release' => '2015',
        ]);

        Game::create([
            'name' => 'Angry Birds',
            'genre' => 'Varios',
            'platform' => 'Moviles',
            'company' => 'Rovio Entertainment',
            'release' => '2009',
        ]);

    }
}
