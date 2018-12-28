<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(PaisSeeder::class);
		$this->call(CiudadSeeder::class);
		$this->call(Tipo_PagoSeeder::class);
		$this->call(claseSeeder::class);
		$this->call(avionSeeder::class);
		$this->call(aeropuertoSeeder::class);
		$this->call(aerolineaSeeder::class);
		$this->call(asientoSeeder::class);
		$this->call(HotelSeeder::class);
		$this->call(clienteSeeder::class);
		$this->call(transporteSeeder::class);
		$this->call(paqueteSeeder::class);
		$this->call(HabitacionSeeder::class);
		$this->call(Seguro_ViajeSeeder::class);
		$this->call(reserva_Table_Seeder::class);
		$this->call(boletaSeeder::class);
		$this->call(Tipo_AccionSeeder::class);
		$this->call(Historial_ClienteSeeder::class);
		$this->call(pasajeroSeeder::class);
		$this->call(UsuarioSeeder::class);
		$this->call(vueloSeeder::class);
		$this->call(Vuelo_ReservadoSeeder::class);
		$this->call(Vuelo_AeropuertoSeeder::class);
		
    }
}
