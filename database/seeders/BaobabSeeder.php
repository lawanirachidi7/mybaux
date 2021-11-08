<?php

namespace Database\Seeders;
use App\Models\Baobab;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BaobabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baobabs')->insert([
            'raison_social' => "Baobab express sa",
            'rccm' => 'ifu',
            'ifu' => 'password',
            'capital' => 'password',
            'siege' => 'Face CNSS',
            'contact' => '66889977',
            'domaine_activite' => 'Transport',
            'email' => 'tst@test.test',
            'responsable' => 'test',
            'contactsresponsable' => 'test'
        ]);

    }
}
