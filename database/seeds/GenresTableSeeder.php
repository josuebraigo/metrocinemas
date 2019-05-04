<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $genres = new Genre();
        $genres->name = "Acción";
        $genres->slug = "accion";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Animación";
        $genres->slug = "animacion";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Aventura";
        $genres->slug = "aventura";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Bélico";
        $genres->slug = "belico";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Ciencia Ficción";
        $genres->slug = "ciencia-ficcion";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Cine Negro";
        $genres->slug = "cine-negro";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Comedia";
        $genres->slug = "comedia";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Desconocido";
        $genres->slug = "desconocido";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Documental";
        $genres->slug = "documental";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Drama";
        $genres->slug = "drama";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Fantástico";
        $genres->slug = "fantastico";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Infantil";
        $genres->slug = "infantil";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Intriga";
        $genres->slug = "intriga";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Musical";
        $genres->slug = "musical";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Romance";
        $genres->slug = "romance";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Terror";
        $genres->slug = "terror";
        $genres->save();

        $genres = new Genre();
        $genres->name = "Thriller";
        $genres->slug = "thriller";
        $genres->save();

    }
}
