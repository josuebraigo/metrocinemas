<?php

use Illuminate\Database\Seeder;
use App\Models\Genres;

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
        $genres = new Genres();
        $genres->name = "Acción";
        $genres->slug = "accion";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Animación";
        $genres->slug = "animacion";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Aventura";
        $genres->slug = "aventura";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Bélico";
        $genres->slug = "belico";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Ciencia Ficción";
        $genres->slug = "ciencia-ficcion";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Cine Negro";
        $genres->slug = "cine-negro";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Comedia";
        $genres->slug = "comedia";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Desconocido";
        $genres->slug = "desconocido";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Documental";
        $genres->slug = "documental";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Drama";
        $genres->slug = "drama";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Fantástico";
        $genres->slug = "fantastico";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Infantil";
        $genres->slug = "infantil";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Intriga";
        $genres->slug = "intriga";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Musical";
        $genres->slug = "musical";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Romance";
        $genres->slug = "romance";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Terror";
        $genres->slug = "terror";
        $genres->save();

        $genres = new Genres();
        $genres->name = "Thriller";
        $genres->slug = "thriller";
        $genres->save();

    }
}
