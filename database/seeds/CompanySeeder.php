<?php

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Company::create([
            'name' => 'Rockstar Games',
            'tag' => 'RS',
            'country' => 'Estados Unidos',
            'foundation' => '1998',
            'ceo' => 'Sam Houser',
        ]);

        Company::create([
            'name' => 'Electronic Arts',
            'tag' => 'EA',
            'country' => 'Estados Unidos',
            'foundation' => '1982',
            'ceo' => 'Andrew Wilson',
        ]);

        Company::create([
            'name' => 'Sports Interactive',
            'tag' => 'SI',
            'country' => 'Reino Unido',
            'foundation' => '1994',
            'ceo' => 'Arvind Iyengar',
        ]);

        Company::create([
            'name' => 'Sony',
            'tag' => 'SN',
            'country' => 'Japon',
            'foundation' => '1946',
            'ceo' => 'Kenichiro Yoshida',
        ]);

        Company::create([
            'name' => '2K Games',
            'tag' => '2K',
            'country' => 'Estados Unidos',
            'foundation' => '2005',
            'ceo' => 'Strauss Zelnick',
        ]);

        Company::create([
            'name' => 'Riot Games',
            'tag' => 'RG',
            'country' => 'Estados Unidos',
            'foundation' => '2006',
            'ceo' => 'Nicolo Laurent',
        ]);

        Company::create([
            'name' => 'Bethesda Softworks',
            'tag' => 'BS',
            'country' => 'Estados Unidos',
            'foundation' => '1986',
            'ceo' => 'Robert A. Altman',
        ]);

        Company::create([
            'name' => 'Rovio Entertainment',
            'tag' => 'RE',
            'country' => 'Finlandia',
            'foundation' => '2003',
            'ceo' => 'Kati Levoranta',
        ]);                                        

    }
}
