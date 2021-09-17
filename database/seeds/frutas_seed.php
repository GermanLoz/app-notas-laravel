<?php

use Illuminate\Database\Seeder;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 20; $i++){
            //Realizar consulta
            DB::table('frutas') -> insert(array(
                'nombre' => 'cereza'.$i,
                'descripcion' => 'descripcion de la fruta'.$i,
                'precio' => $i,
                'fecha' => date('y-m-d'),
             ));
           }
        $this->command->info('la tabla de frutas a sido rellenada');
    }
}
//ejecutar comando:
// php artisan --class=frutas_seed
