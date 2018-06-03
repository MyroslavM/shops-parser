<?php

use Illuminate\Database\Seeder;

class CreateCountries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("countries")->insert([
            [
                'title' => 'Argentina',
                'href' => 'https://www.adidas.com.ar/',
                'value' => 0,
            ],
            [
                'title' => 'Brasil',
                'href' => 'https://www.adidas.com.br/',
                'value' => 0,
            ],
            [
                'title' => 'South Africa',
                'href' => 'https://www.adidas.co.za/',
                'value' => 0,
            ],
            [
                'title' => 'Canada (EN)',
                'href' => 'https://www.adidas.ca/en',
                'value' => '18.2',
            ],
            [
                'title' => 'Canada (FR)',
                'href' => 'https://www.adidas.ca/fr',
                'value' => '16.7',
            ],
            [
                'title' => 'Chile',
                'href' => 'https://www.adidas.cl/',
                'value' => 0,
            ],
            [
                'title' => 'Colombia',
                'href' => 'https://www.adidas.co/',
                'value' => 0,
            ],
            [
                'title' => 'Mexico',
                'href' => 'https://www.adidas.mx/',
                'value' => 0,
            ],
            [
                'title' => 'Peru',
                'href' => 'https://www.adidas.pe',
                'value' => 0,
            ],
            [
                'title' => 'United States',
                'href' => 'https://www.adidas.com/us',
                'value' => '12.9',
            ],
            [
                'title' => 'Australia',
                'href' => 'https://www.adidas.com.au/',
                'value' => 0,
            ],
            [
                'title' => 'Malaysia',
                'href' => 'https://www.adidas.com.my/',
                'value' => 0,
            ],
            [
                'title' => 'New Zealand',
                'href' => 'https://www.adidas.co.nz/',
                'value' => 0,
            ],
            [
                'title' => 'Philippines',
                'href' => 'https://www.adidas.com.ph/',
                'value' => 0,
            ],
            [
                'title' => 'Belgium',
                'href' => 'https://www.adidas.be/',
                'value' => 0,
            ],
            [
                'title' => 'Czech Republic',
                'href' => 'https://www.adidas.cz/',
                'value' => 0,
            ],
            [
                'title' => 'Denmark',
                'href' => 'https://www.adidas.dk/',
                'value' => 0,
            ],
            [
                'title' => 'Deutschland',
                'href' => 'https://www.adidas.de/',
                'value' => '10.5',
            ],
            [
                'title' => 'Greece',
                'href' => 'https://www.adidas.gr/',
                'value' => 0,
            ],
            [
                'title' => 'Espana',
                'href' => 'https://www.adidas.es/',
                'value' => '9.9',
            ],
            [
                'title' => 'France',
                'href' => 'https://www.adidas.fr/',
                'value' => '7.3',
            ],
            [
                'title' => 'Italia',
                'href' => 'https://www.adidas.it/',
                'value' => '14.6',
            ],
            [
                'title' => 'Nederland',
                'href' => 'https://www.adidas.nl/',
                'value' => 0,
            ],
            [
                'title' => 'Norway',
                'href' => 'https://www.adidas.no/',
                'value' => 0,
            ],
            [
                'title' => 'Osterreich',
                'href' => 'https://www.adidas.at/',
                'value' => 0,
            ],
            [
                'title' => 'Polska',
                'href' => 'https://www.adidas.pl/',
                'value' => 0,
            ],
            [
                'title' => 'Portugal',
                'href' => 'https://www.adidas.pt/',
                'value' => '9.9',
            ],
            [
                'title' => 'Slovakia',
                'href' => 'https://www.adidas.sk/',
                'value' => 0,
            ],
            [
                'title' => 'Sverige',
                'href' => 'https://www.adidas.se/',
                'value' => 0,
            ]
        ]);
    }
}
