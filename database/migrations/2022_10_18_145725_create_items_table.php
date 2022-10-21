<?php

use App\Models\ItemModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nameBR', 64);
            $table->string('nameOG', 64);
            $table->string('slug', 64);
            $table->string('synopsis', 1024);
            $table->string('thumbnail', 2048)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Seeding when running the migration
        ItemModel::firstOrCreate([
            'nameBR' => 'Um Domingo Qualquer',
            'nameOG' => 'Any Given Sunday',
            'slug' => 'any-given-sunday',
            'synopsis' => 'Há quatro anos, o Miami Sharks, do técnico Damato, estava no topo. Agora, o time enfrenta muitas dificuldades, o que deixa Damato em uma complicada situação, principalmente com Christina Pagniacci, a jovem presidente e coproprietária da equipe. Fora de campo, Damato sofre por ter um casamento falido e filhos alienados.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'Gladiador',
            'nameOG' => 'Gladiator',
            'slug' => 'gladiator',
            'synopsis' => 'Maximus é um poderoso general romano, amado pelo povo e pelo imperador Marcus Aurelius. Antes de sua morte, o Imperador desperta a ira de seu filho Commodus ao tornar pública a sua predileção em deixar o trono para Maximus. Sedento pelo poder, Commodus mata seu pai, assume a coroa e ordena a morte de Maximus, que consegue fugir antes de ser pego, e passa a se esconder como um escravo e gladiador enquanto vai atrás de vingança.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'Dia de Treinamento',
            'nameOG' => 'Training Day',
            'slug' => 'training-day',
            'synopsis' => 'Jake Hoyt, um jovem policial de Los Angeles, entra para a equipe de narcóticos e recebe como oficial de treinamento e parceiro Alonzo Harris, um policial veterano e desonesto. Ao longo do dia, o novato é exposto a todo tipo de corrupção e acusado de assassinato, acontecimentos que são orquestrados por Alonzo a fim de encobrir um engano cometido por ele junto à máfia russa.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'Breaking Bad',
            'nameOG' => 'Breaking Bad',
            'slug' => 'breaking-bad',
            'synopsis' => 'O professor de química Walter White não acredita que sua vida possa piorar ainda mais. Quando descobre que tem câncer terminal, Walter decide arriscar tudo para ganhar dinheiro enquanto pode, transformando sua van em um laboratório de metanfetamina.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'Game of Thrones',
            'nameOG' => 'Game of Thrones',
            'slug' => 'game-of-thrones',
            'synopsis' => 'Sucesso entre os livros mais vendidos, a série de obras "A Song of Ice and Fire", de George R.R. Martin, é levada à tela quando HBO decide navegar a fundo pelo gênero e recriar a fantasia medieval épica. Este é o retrato de duas famílias poderosas - reis e rainhas, cavaleiros e renegados, homens honestos e mentirosos - disputando um jogo mortal pelo controle dos Sete Reinos de Westeros para assumir o Trono de Ferro. A série foi filmada em Malta e no norte da Irlanda, tendo participação do escritor dos livros.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'O Homem do Castelo Alto',
            'nameOG' => 'The Man in the High Castle',
            'slug' => 'the-man-in-the-high-castle',
            'synopsis' => 'Veja o que teria acontecido com o mundo se as Forças Aliadas tivessem perdido a Segunda Guerra Mundial. À medida que a tensão entre o Império do Japão e a Alemanha Nazista cresce, há consequências drásticas nos Estados Unidos e nos opositores.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'One Punch Man',
            'nameOG' => 'One Punch Man',
            'slug' => 'one-punch-man',
            'synopsis' => 'One Punch-Man é uma série de webcomic criada pelo autor com o pseudónimo One, e é publicada desde 2009. A série rapidamente tornou-se um fenómeno viral, alcançando mais de 7,9 milhões de acessos, em junho de 2012.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'Bleach',
            'nameOG' => 'Bleach',
            'slug' => 'bleach',
            'synopsis' => 'Bleach é uma série de mangá escrita e ilustrada por Tite Kubo. Bleach segue as aventuras de Ichigo Kurosaki que após ganhar os poderes de um Ceifeiro de Almas, através de uma Ceifeira de Almas, Rukia Kuchiki.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'Jujutsu Kaisen',
            'nameOG' => 'Jujutsu Kaisen',
            'slug' => 'jujutsu-kaisen',
            'synopsis' => 'Jujutsu Kaisen é um mangá japonês escrito e ilustrado por Gege Akutami, serializado na Weekly Shōnen Jump desde 5 de março de 2018. Os capítulos individuais são compilados em volume tankōbon, e publicados pela Shueisha desde julho de 2018. A série é licenciada e publicada no Brasil pela editora Panini.'
        ]);
        ItemModel::firstOrCreate([
            'nameBR' => 'Vingadores: Era de Ultron',
            'nameOG' => 'Avengers: Age of Ultron',
            'slug' => 'avengers-age-of-ultron',
            'synopsis' => 'Ao tentar proteger o planeta de ameaças, Tony Stark constrói um sistema de inteligência artificial que cuidaria da paz mundial. O projeto acaba dando errado e gera o nascimento do Ultron. Com o destino da Terra em jogo, Capitão América, Homem de Ferro, Thor, Hulk, Viúva Negra e Gavião Arqueiro terão que se unir para mais uma vez salvar a raça humana da extinção.'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
