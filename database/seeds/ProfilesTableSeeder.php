<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('profiles')->insert([
            'firstname' => 'Gilles',
            'lastname' => 'Roussel',
            'origin' => 'France',
            'profession' => 'Auteur',
            'biography' => 'Gilles Roussel, dit Boulet, né le 1er février 1975 à Meaux, est un auteur de bande dessinée français. En 1998, à la suite d\'un concours de bande dessinée organisé par le festival de Sierre, il est remarqué par Zep, auteur de Titeuf, et Jean-Claude Camano, rédacteur en chef du magazine Tchô ! qui vient d\'être lancé. De 1998 à 2001, il réalise donc de nombreuses pages pour ce nouveau magazine. En 2001, il publie sa première bande dessinée, Raghnarok. Suivent ensuite plusieurs séries, toutes publiées par Tchô ! : La Rubrique scientifique, Le Miya et Womoks (avec Reno au dessin). Il débute ensuite en juillet 2004 un blog dessiné, Bouletcorp.com, sur Internet, et ce média lui permet de se faire connaître. En parallèle, il participe toujours régulièrement au magazine Tchô ! et a fait une ou deux apparitions dans les magazines Psikopat et Spirou. ',
            'photo' => 'A0Dr3wi6xgenDZpWYYXR2eWSTP4WWkhfTjlKmmKp.jpeg',
        ]);

        DB::table('profiles')->insert([
            'firstname' => 'Xavier',
            'lastname' => 'Dang',
            'origin' => 'France',
            'profession' => 'Streamer',
            'biography' => 'Xavier Dang, dit MisterMV, né le 26 août 1980 à Paris, est un vidéaste, streamer, et compositeur de musiques de jeux vidéos français. Créateur de plusieurs émissions telles que "Indéfinitivement" ou "Le Nouveau Jeu Fini à La Pisse", il varie le contenu proposé en jouant à un jeu combat ("Le Manque de Respect"), en présentant les jeux rétros qui l\'ont marqué ("Astralo-Interstellaire) ou encore en faisant du speedrun ("Speed René"). ',
            'photo' => 'M6HmyH9qi9KFCzs4a4HcnDdrrUiZYMgtOAOKAVWU.jpeg',
        ]);

        DB::table('profiles')->insert([
            'firstname' => 'Robin',
            'lastname' => 'Taylor',
            'origin' => 'U.S.A.',
            'profession' => 'Acteur',
            'biography' => 'Robin Lord Taylor, ou Robin Taylor à ses débuts, est un acteur américain, né le 4 juin 1978 à Shueyville dans l\'Iowa. Il est connu pour ses rôles dans Admis à tout prix (Accepted, 2006), Another Earth (2011) et Would You Rather (2012). Après une brève apparition dans la série The Walking Dead, il est également connu dans la série Gotham, incarnant le personnage d\'Oswald Cobblepot alias le Pingouin, un des plus dangereux ennemis de Batman. ',
            'photo' => 'fYon1CZaHBjGcjLCl7axiaqXqP4qrzdCxPZc8u4U.jpeg',
        ]);

        DB::table('profiles')->insert([
            'firstname' => 'Bolvar',
            'lastname' => 'Fordragon',
            'origin' => 'Azeroth',
            'profession' => 'Geôlier des morts',
            'biography' => 'Le haut seigneur Bolvar Fordragon était un chevalier respecté de l’Alliance et occupa le poste de régent du royaume de Hurlevent à la suite de la disparition du roi Varian Wrynn. Veillant sur le jeune prince Anduin comme un père veille sur son fils, il noua une profonde relation avec le garçon.',
            'photo' => 'JjMosfuT6FaC93vat5fmjWtteJzP52MBOZRcbTae.jpeg',

        ]);

        DB::table('profiles')->insert([
            'firstname' => 'Triss',
            'lastname' => 'Merigold',
            'origin' => 'Témérie',
            'profession' => 'Magicienne',
            'biography' => 'riss Merigold est une magicienne, originaire de Maribor. Elle fut l\'une des conseillères du roi Foltest de Temeria avant d\'être contrainte d’émigrer, le roi ayant chassé toutes les magiciennes de Temeria. En 1263, Triss combattit à la Bataille du Mont Sodden. À un moment donné, la peur lui a fait oublier toutes ses formules magiques, à part une qui lui a permis de se téléporter loin de cet horrible endroit, jusqu’à sa maison, dans sa petite tour à Maribor. Elle se souviens aussi d’avoir vomi d’effroi, alors que Yennefer et Corail l\'a soutenaient par la nuque et les cheveux… Tout n’était que fracas et désolation, il y avait des flèches enflammées et des boules de feu qui explosaient au milieu de hurlements et de grondements terribles, et Triss se retrouva soudain à terre sur un tas de lambeaux calcinés et fumants. Elle compris que ce tas de lambeaux, c’était Yoël, et que ce qui se trouvait à côté, cette horrible chose, ce corps sans bras ni jambes qui poussait des hurlements macabres, c’était Corail. Elle cru que le sang dans lequel elle baignait était celui de Corail. Mais en vérité, c’était le sien. Triss a alors vu ce que l’on lui avait fait, et elle se mit à hurler, à hurler comme un chien dément, comme un enfant battu…',
            'photo' => 'FgcZUsyykBynetA1zY5vcdETTS4J1wvDb6J4j4oM.jpeg',
        ]);


        DB::table('profiles')->insert([
            'firstname' => 'Clifford',
            'lastname' => 'Burton',
            'origin' => 'U.S.A.',
            'profession' => 'Musicien',
            'biography' => 'Clifford Lee "Cliff" Burton né le 10 février 1962 à Castro Valley, Californie, et mort le 27 septembre 1986 à Dörarp, dans la commune de Ljungby en Suède, était un musicien américain principalement connu pour être le deuxième bassiste du groupe de thrash metal Metallica. Le 27 septembre 1986, Burton décède lorsque le bus de tournée du groupe se renverse dans les régions rurales du sud de la Suède. Burton a été, à titre posthume, intronisé au Rock and Roll Hall of Fame avec Metallica le 4 avril 2009. En 2011, un sondage en ligne des lecteurs de Rolling Stone l\'a classé neuvième des dix plus grands bassistes de tous les temps1. Il était un grand fan de l\'écrivain américain Howard Phillips Lovecraft ce qui donnera au groupe Metallica le nom des chansons The Call Of Ktulu sur l\'album Ride the Lightning et The Thing That Should Not Be sur l\'album Master of Puppets d\'après deux de ses livres.  ',
            'photo' =>'eY4KACYN9vJEK8rl9Apcm280js60WT93nrnY4ZXH.jpeg',
        ]);

    }
}
