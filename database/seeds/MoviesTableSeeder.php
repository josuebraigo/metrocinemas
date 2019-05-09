<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new Movie();
        $movie->poster = "0";
        $movie->name = "E.T. El Extraterrestre";
        $movie->duration = "121";
        $movie->synopsis = "Un pequeño ser de otro planeta se queda abandonado en la Tierra cuando su nave, al emprender el regreso, se olvida de él. Está completamente solo y tiene miedo, pero se hará amigo de un niño, que lo esconde en su casa. El pequeño y sus hermanos intentan encontrar la forma de que el pequeño extraterrestre regrese a su planeta antes de que lo encuentren los científicos y la policía.";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"youtube","id":"MwNuAz-Yt8k","title":"E.T. El Extraterrestre (Trailer 20º Aniversario 2002 subtitulado en español)","image":"https://i.ytimg.com/vi/MwNuAz-Yt8k/maxresdefault.jpg","url":"https://www.youtube.com/watch?v=MwNuAz-Yt8k"}';
        $movie->director_id = "3";
       	$movie->year = '1982';
       	$movie->slug = "et-el-extraterrestre";
       	$movie->save();

       	$movie = new Movie();
        $movie->poster = "0";
        $movie->name = "Avengers Endgame";
        $movie->duration = "182";
        $movie->synopsis = "Después de los eventos devastadores de 'Avengers: Infinity War', el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar deshacer sus acciones y restaurar el orden en el universo de una vez por todas, sin importar cuáles son las consecuencias... Cuarta y última entrega de la saga 'Vengadores'.";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"youtube","id":"0jNvJU52LvU","title":"Marvel Studios’ Avengers: Endgame | “To the End”","image":"https://i.ytimg.com/vi/0jNvJU52LvU/maxresdefault.jpg","url":"https://www.youtube.com/watch?v=0jNvJU52LvU"}';
       	$movie->director_id = "1";
       	$movie->year = '2019';
       	$movie->slug = "avengers-endgame";
       	$movie->save();

       	$movie = new Movie();
        $movie->poster = "0";
        $movie->name = "Tiburón";
        $movie->duration = "124";
        $movie->synopsis = "En la costa de un pequeño pueblo del Este de los Estados Unidos, un enorme tiburón ataca a varias personas. Por temor a los nefastos efectos que este hecho podría tener sobre el negocio turístico, el alcalde se niega a cerrar las playas y a difundir la noticia. Pero un nuevo ataque del tiburón termina con la vida de un bañista. Cuando el terror se apodera de todos, un veterano cazador de tiburones, un oceanógrafo y el jefe de la policía local se unen para capturar al escualo..";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"youtube","id":"JvF0ECpkrqw","title":"Trailer Tiburon HD 1975","image":"https://i.ytimg.com/vi/JvF0ECpkrqw/maxresdefault.jpg","url":"https://www.youtube.com/watch?v=JvF0ECpkrqw"}';
       	$movie->director_id = "3";
       	$movie->year = '1975';
       	$movie->slug = "tiburon";
       	$movie->save();

       	$movie = new Movie();
        $movie->poster = "0";
        $movie->name = "Avatar";
        $movie->duration = "161";
        $movie->synopsis = "Año 2154. Jake Sully (Sam Worthington), un ex-marine condenado a vivir en una silla de ruedas, sigue siendo, a pesar de ello, un auténtico guerrero. Precisamente por ello ha sido designado para ir a Pandora, donde algunas empresas están extrayendo un mineral extraño que podría resolver la crisis energética de la Tierra. Para contrarrestar la toxicidad de la atmósfera de Pandora, se ha creado el programa Avatar, gracias al cual los seres humanos mantienen sus conciencias unidas a un avatar: un cuerpo biológico controlado de forma remota que puede sobrevivir en el aire letal. Esos cuerpos han sido creados con ADN humano, mezclado con ADN de los nativos de Pandora, los Na'vi. Convertido en avatar, Jake puede caminar otra vez. Su misión consiste en infiltrarse entre los Na'vi, que se han convertido en el mayor obstáculo para la extracción del mineral. Pero cuando Neytiri, una bella Na'vi (Zoe Saldana), salva la vida de Jake, todo cambia: Jake, tras superar ciertas pruebas, es admitido en su clan. Mientras tanto, los hombres esperan los resultados de la misión de Jake.";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"youtube","id":"tLylzuf1MWA","title":"AVATAR - SPECIAL EDITION","image":"https://i.ytimg.com/vi/tLylzuf1MWA/maxresdefault.jpg","url":"https://www.youtube.com/watch?v=tLylzuf1MWA"}';
       	$movie->director_id = "2";
       	$movie->year = '2009';
       	$movie->slug = "avatar";
       	$movie->save();

       	$movie = new Movie();
        $movie->poster = "0";
        $movie->name = "Titanic";
        $movie->duration = "195";
        $movie->synopsis = "Jack (DiCaprio), un joven artista, gana en una partida de cartas un pasaje para viajar a América en el Titanic, el transatlántico más grande y seguro jamás construido. A bordo conoce a Rose (Kate Winslet), una joven de una buena familia venida a menos que va a contraer un matrimonio de conveniencia con Cal (Billy Zane), un millonario engreído a quien sólo interesa el prestigioso apellido de su prometida. Jack y Rose se enamoran, pero el prometido y la madre de ella ponen todo tipo de trabas a su relación. Mientras, el gigantesco y lujoso transatlántico se aproxima hacia un inmenso iceberg.";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"youtube","id":"FiRVcExwBVA","title":"Titanic 3D - Tráiler en español","image":"https://i.ytimg.com/vi/FiRVcExwBVA/maxresdefault.jpg","url":"https://www.youtube.com/watch?v=FiRVcExwBVA"}';
       	$movie->director_id = "2";
       	$movie->year = '1997';
       	$movie->slug = "titanic";
       	$movie->save();

       	$movie = new Movie();
        $movie->poster = "0";
        $movie->name = "Tiempos Violentos";
        $movie->duration = "153";
        $movie->synopsis = "Jules y Vincent, dos asesinos a sueldo con no demasiadas luces, trabajan para el gángster Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su atractiva mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse 'manos a la obra'. Su misión: recuperar un misterioso maletín.";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"youtube","id":"LI1yt38A9-E","title":"Pulp Fiction (1994) - Opening Credits","image":"https://i.ytimg.com/vi/LI1yt38A9-E/maxresdefault.jpg","url":"https://www.youtube.com/watch?v=LI1yt38A9-E"}';
       	$movie->director_id = "4";
       	$movie->year = '1994';
       	$movie->slug = "tiempos-violentos";
       	$movie->save();

       	$movie = new Movie();
        $movie->poster = "0";
        $movie->name = "Perros de Reserva";
        $movie->duration = "99";
        $movie->synopsis = "Una banda organizada es contratada para atracar una empresa y llevarse unos diamantes. Sin embargo, antes de que suene la alarma, la policía ya está allí. Algunos miembros de la banda mueren en el enfrentamiento con las fuerzas del orden, y los demás se reúnen en el lugar convenido";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"youtube","id":"OXqI6CrT9Fg","title":"Reservoir Dogs (trailer en castellano)","image":"https://i.ytimg.com/vi/OXqI6CrT9Fg/default.jpg","url":"https://www.youtube.com/watch?v=OXqI6CrT9Fg"}';
       	$movie->director_id = "4";
       	$movie->year = '1992';
       	$movie->slug = "perros-de-reserva";
       	$movie->save();

       	$movie = new Movie();
        $movie->poster = "0";
        $movie->name = "Kill Bill";
        $movie->duration = "150";
        $movie->synopsis = "Killbill mata a medio mundo";
        $movie->country_id = "1";
        $movie->trailer = '{"provider":"vimeo","id":92251044,"title":"killbill c10 Awareness Campaign","image":"https://i.vimeocdn.com/video/471924222_640.jpg","url":"https://vimeo.com/92251044"}';
       	$movie->director_id = "4";
       	$movie->year = '2004';
       	$movie->slug = "kill-bill";
       	$movie->save();
    }
}
