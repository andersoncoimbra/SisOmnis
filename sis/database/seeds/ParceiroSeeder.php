<?php

use Illuminate\Database\Seeder;

class ParceiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 2'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 3'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 4'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 5'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 6'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 7'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 8'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 9'
        ]);
        $parceiro->save();

        $parceiro = new App\Parceiro([
            'nome'=>'Parceiro 10'
        ]);
        $parceiro->save();
    }
}
