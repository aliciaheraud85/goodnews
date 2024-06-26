<?php

//1. APPEL A LA CONNEXION

 require_once("connexion.php");

 //2. FAIRE MES TRY CATCH PR INSERER MES DONNEES DANS LES TABLES 

    try{
        $sql="CREATE DATABASE IF NOT EXISTS goodnews";
        $connexion->exec($sql);

        //2.1 JE ME CONNECTE A LA BASE DE DONNEES
        $connexion-> exec("USE goodnews");

        //3. JE REDIGE MES REQUETES POUR INSERER MES DONNEES DANS MES TABLES
        $sql="INSERT INTO rubrik (rubrik_name)VALUES(:rubrik_name)";
            //3.1 JE PROTEGE MA REQUETE AVEC PREPARE
            $stmt = $connexion->prepare($sql);

            $rubrik = [
                [
                    'rubrik_name' => 'actualites'
                ],
                [
                    'rubrik_name' => 'politique'
                ],
                [
                    'rubrik_name' => 'economie'
                ],
                [
                    'rubrik_name' => 'sport'
                ],
                [
                    'rubrik_name' => 'technologies'
                ],
                [
                    'rubrik_name' => 'culture'
                ]
            ];
        //4. JE FAIS MA BOUCLE FOREACH POUR EXECUTER MA REQUETE
        foreach($rubrik as $r){
            $stmt->execute($r);
        }

        echo"Les données de la table rubrik ont été insérées avec succès. <br>";

    }catch(PDOException $e){
        echo "ERREUR :" . $e->getMessage();
    }

    try{

        $sql="CREATE DATABASE IF NOT EXISTS goodnews";
        $connexion->exec($sql);
        $connexion->exec("USE goodnews");

        $sql="INSERT INTO post (
        title, image, abstract, content, content2, author, createdAt, id_rubrik) 
        VALUES (
        :title, :image, :abstract, :content, :content2, :author, :createdAt, :id_rubrik)";

        $stmt = $connexion->prepare($sql);

        $post = [
            [
                'title' => 'Après le télépéage, Ulys lance le premier pass pour passer devant tout le monde aux toilettes',
                'image' => 'ulys.jpg',
                'abstract' => 'Connue pour son pass de télépéage qui permet de gagner du temps sur l’autoroute, la société Ulys se lance aujourd’hui dans un projet encore plus vaste : un pass qui permet de passer devant tout le monde aux toilettes. Une révolution dans le monde des files d’attente insupportables.',
                'content' => '« Ce pass, c’est un projet que je porte depuis longtemps » commente Valérie Dumont, cheffe de projet chez Ulys. « Personnellement, j’ai une vessie de taille réduite et je bois quotidiennement six litres de thé vert, ce qui fait que je dois aller aux toilettes environ 48 fois par jour. Dans ces moments, chaque seconde compte, et attendre plusieurs minutes que la place se libère peut me transformer en bête sauvage. Alors, ce pass c’est une bouffée d’air frais. ». Les conditions d’utilisation du pass seront identiques à celui du télépéage : « On garde le même prix : 2 €/mois durant les mois utilisés et gratuit quand on ne s’en sert pas. » explique Valérie Dumont. « Vous pourrez l’utiliser aussi bien dans les toilettes d’un TGV que dans celles du bar PMU en bas de chez vous. En revanche, les toilettes des restaurants mexicains ne sont pas couverts, car il aurait fallu doubler nos tarifs, et ça c’était contre notre politique. »',
                'content2' => 'Le pass est très attendu cet été avec l’arrivée de l’Euro 2024 mais surtout des festivals de musique, connus pour leur gestion désastreuse des WC. Pour Josselin Montel, expert des toilettes depuis 2011, « Le pass permettrait par exemple de passer devant toute une famille de Bretons avinés au festival des Vieilles Charrues, et de faire vos besoins avant que les lieux ne soient dévastés par leur passage. Un réflexe bien vu, qui vous empêchera de faire des cauchemars la nuit… Personnellement, j’ai déjà précommandé, car les toilettes, c’est toute ma vie. » En revanche, certaines voix s’insurgent contre la venue de ce pass. C’est le cas de l’ADGQAAAWC : L’Association des Gens qui Aiment Attendre aux WC, qui compte déjà porter l’affaire devant les tribunaux. Selon leur communiqué officiel “Ce pass met en danger une tradition française, celle du moment gênant où des inconnus attendent ensemble devant une porte fermée. Il est hors de question que cette entreprise ruine ce beau moment de vivre ensemble”. Ulys élargit donc son offre, et nous attendons avec impatience d’autres projets comme le pass qui permettrait enfin de passer devant tout le monde à la caisse du supermarché.',
                'author' => 'Jean Dupont',
                'createdAt' => '',
                'id_rubrik' => '1'
            ],
            [
                'title' => 'Expulsions – Le RN remercie Valérie Pécresse d’avoir relié Châtelet à Orly en seulement 25 minutes',
                'image' => 'pecresse.jpg',
                'abstract' => 'Jordan Bardella a remercié publiquement Valérie Pécresse pour l’allongement de la ligne 14 du métro parisien qui facilitera les expulsions de son futur gouvernement.',
                'content' => 'En conférence de presse, le président du Rassemblement National et possible futur Premier Ministre a tenu à remercier la présidente de la région Ile-de-France, Valérie Pécresse, pour l’allongement de la ligne 14 du métro parisien : « Ça va considérablement accélérer notre processus d’expulsion des sans-papiers. Ils errent tous dans le centre de Paris, ça va donc être très facile de les arrêter au métro Châtelet et de les mettre dans un charter à Orly ». ',
                'content2' => 'Les commentateurs y voient le début d’une nouvelle alliance de la droite, comme nous l’affirme Jean-Michel Apathie : « Ce n’est pas qu’un prolongement de ligne entre Châtelet et Orly, mais aussi et surtout un prolongement entre les LR et le RN ! Il ne serait pas étonnant que pour plaire au gouvernement RN, Eric Ciotti demande à rallonger la ligne 4 de Bagneux jusqu’à Nice ! ». A droite certains y voient le baiser du diable, même s’il n’est pas question de s’inquiéter, comme l’affirme ce pilier des LR, qui a préféré rester anonyme : « C’est un coup de com ! La ligne 14 n’aidera en aucun cas M. Bardella dans ses expulsions. Elle sera, comme toutes les lignes, en panne, en retard, ou remplie à ras bord. Les policiers n’auront pas la place de rentrer avec le futur expulsé ou arriveront en retard et louperont le vol. Sans parler du coût : le ticket de métro est à 11,50 euros, vous imaginez ce que ça va coûter aux Français ? ». ',
                'author' => 'Marie Draville',
                'createdAt' => '',
                'id_rubrik' => '2'
            ],
            [
                'title' => '« Accumuler du béton, tracer des routes » : les infrastructures, ciment du capitalisme',
                'image' => 'beton.jpg',
                'abstract' => 'Dans un essai brillant, le chercheur Nelo Magalhaes retrace l’histoire de la « production d’espace » en France depuis 1945, montrant comme elle a profondément transformé la terre.',
                'content' => 'La pensée écologique se formule par vagues. Après celle du vivant, la production se focalise ces temps-ci sur la matérialité du monde. Critique de la transition énergétique, généalogie de la production, question minière… A ce programme déjà fourni, il manquait Accumuler du béton, tracer des routes (La Fabrique, 304 pages, 18 euros), essai brillant de Nelo Magalhaes qui retrace l’histoire environnementale des grandes infrastructures de transport bâties en France depuis 1945. Le chercheur à l’Institut de la transition environnementale y décortique les rouages de cette « monumentale production d’espace » formée par cet ensemble d’autoroutes, de canaux, de carrières et de déchets, qui a transfiguré le visage du territoire hexagonal en quelques décennies.',
                'content2' => 'Cette histoire en cache plusieurs : l’espace n’est pas seulement physique, il fige des rapports sociaux. Héritant du meilleur de la tradition critique, Nelo Magalhaes se lance donc dans une histoire à la fois matérielle, technique et idéologique. Dans cette intrication tient le geste capital de ce docteur en mathématiques et en économie, qui repolitise un sujet si longtemps laissé aux experts, dont la fausse neutralité enrobe le dogme modernisateur porté par les intérêts industriels. Deux chiffres vertigineux résument ce gigantisme : depuis 1945, 20 gigatonnes de gravier et 10 gigamètres cubes de terres et sédiments ont été mis en mouvement. « En même temps qu’il a modifié l’atmosphère, le capitalisme a transformé la topographie terrestre. » ',
                'author' => 'Youness Bousenna',
                'createdAt' => '',
                'id_rubrik' => '3'
            ],
            [
                'title' => 'Kylian Mbappé pourra remplacer son nez cassé par un 3e pied',
                'image' => 'mbappe.jpg',
                'abstract' => 'L’UEFA a annoncé que l’attaquant vedette de l’équipe de France pourra remplacer son nez cassé par un 3e pied.',
                'content' => 'Kylian Mbappé n’a plus de soucis à se faire et l’équipe de France non plus. L’attaquant pourra remplacer son nez cassé par un troisième pied pour le reste de la compétition. En effet, le règlement de l’UEFA autorise pour certaines blessures, une greffe express. “Cette règle ne concerne que les blessures au visage et s’applique aux attaquants qui ont marqué plus de 40 buts en équipe nationale et qui n’ont jamais remporté la ligue des champions avec leur club”, explique Lorenzo Bento, porte-parole de l’UEFA. “S’il préfère, le joueur peut se greffer une autre partie du corps comme un genou ou une pomme d’adam. Par contre, il est interdit de se greffer un 3e bras”.',
                'content2' => 'En effet, depuis 2009 et le but polémique de Thierry Henry face à l’Irlande, l’UEFA a interdit la greffe d’une main aux attaquants.',
                'author' => 'Jean Dupont',
                'createdAt' => '',
                'id_rubrik' => '4'
            ],
            [
                'title' => 'Fact-check : oui ou non ?',
                'image' => 'check.jpg',
                'abstract' => 'C’est une question que vous êtes nombreux à nous avoir posée et sur laquelle notre cellule de fact-checking s’est penchée pendant plus de trois ans. Voici ses conclusions.',
                'content' => 'Il y a de nombreux arguments en faveur du oui qui est loin d’être une hypothèse farfelue et qui se révèle même crédible dans plusieurs domaines. Ajoutons que plusieurs spécialistes et experts n’excluent pas cette éventualité et la jugent même « plausible à 50% ». Enfin, si certains ne vont pas jusqu’à affirmer que la réponse serait un « oui franc et massif », plusieurs penchent pour « un embryon de mouvement collectif en faveur d’une politique de l’acquiescement relatif ».',
                'content2' => 'Toutefois, d’autres arguments en faveur du non ne sont pas totalement dénués d’intérêt ni de pertinence. Ils sont même pour certains assez convaincants voire extrêmement probants. Sans compter que de nombreuses personnalités de la communauté scientifique valident en grande partie cette hypothèse. Si d’autres ont quelques doutes et préfèrent réserver leur pronostic, ils penchent nettement en faveur d’une hypothèse négative au détriment du postulat affirmatif.',
                'author' => 'Cagkan Sayin',
                'createdAt' => '',
                'id_rubrik' => '5'
            ],
            [
                'title' => 'LOISIRSElle garde son tapis de yoga de 2015 en pensant encore qu’elle va s’y mettre',
                'image' => 'yoga.jpg',
                'abstract' => 'Inès, juriste de 38 ans, a acheté un tapis de yoga en 2015 mais ne s’en est encore jamais servi. Encore aujourd’hui, elle le garde précieusement sous son lit, persuadée qu’elle va s’y mettre un jour. Parce qu’on ne sait jamais…',
                'content' => '« J’avais une amie complètement fan de yoga, et je me suis dit que j’allais faire comme elle, elle avait l’air épanouie… alors que c’était pas la chips la plus craquante du paquet » raconte Inès. « Donc j’ai acheté un legging de sport, une brique de yoga, un CD de musiques de méditation, mais il me manquait un équipement primordial : le tapis de yoga. C’était l’accessoire indispensable, ma vie était vide sans ce tapis de yoga, je ne me sentais pas comme une juriste totalement épanouie, il me manquait un objet pour parvenir à ce nouveau stade d’apaisement intérieur globalisé cumulatif”.',
                'content2' => 'En effet, Inès se définit comme une femme d’action, qui n’a pas peur d’aller au bout de ses idées. Après 25 minutes d’intenses rêverie à s’imaginer bientôt aussi apaisée qu’un petit coquelicot sur la pente d’une colline du Larzac, elle avait acheté ce superbe tapis sur un site de vente en ligne « Alors c’est vrai, j’ai mis 2 heures pour trouver le bon, j’ai lu 4500 commentaires et des dizaines de comparatifs mais j’ai fini par mettre la main dessus. Et je l’ai acheté au prix fort : 29,99 euros. Quand je l’ai reçu j’étais une nouvelle personne.” Après quelques utilisations (3 selon nos sources), Inès a rangé le tapis sous son lit, d’où il attend avec impatience le moment où il reviendra à la lumière.',
                'author' => 'Marie Darville',
                'createdAt' => '',
                'id_rubrik' => '6'
            ]
        ];
        foreach($post as $p){
            $stmt->execute($p);
        }
        echo "les données de la table post ont bien été insérées";

    }catch(PDOException $e){
        echo "ERREUR :" . $e->getMessage();
    }

    //4. ON FERME LA CONNEXION 

    $connexion = null;
 ?>
