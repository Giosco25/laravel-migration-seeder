<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dati_prodotti = config('products');
         foreach ($dati_prodotti as $dati_prodotto) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $dati_prodotto['nome'];
            $nuovo_prodotto->price = $dati_prodotto['prezzo'];
            $nuovo_prodotto->category = $dati_prodotto['categoria'];
           $nuovo_prodotto->save();
        }
        for ($i=0; $i < 10 ; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $faker->firstName;
            $nuovo_prodotto->price = $faker->lastName;
            $nuovo_prodotto->category = $faker->address;
            $nuovo_prodotto->save();
        }
    }
}
