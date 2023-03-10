<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public const DEFAULT_PASSWORD = '123mudar';

    public const MAIN_DIRECTOR = [
        'name'  => 'Edson A. do Nascimento',
        'email' => 'pele@magazineaziul.com.br',
    ];

    public const SUB_DIRECTORS  = [
        [
            'name'   => 'Vagner Mancini',
            'email'  => 'vagner.mancini@magazineaziul.com.br',
            'region' => 'south',
        ],
        [
            'name'   => 'Abel Ferreira',
            'email'  => 'abel.ferreira@magazineaziul.com.br',
            'region' => 'southeast',
        ],
        [
            'name'   => 'Rogerio Ceni',
            'email'  => 'rogerio.ceni@magazineaziul.com.br',
            'region' => 'midwest',
        ],
    ];

    public const UNITIES = [
        [
            'name'      => 'Porto Alegre',
            'latitude'  => '-30.048750057541955',
            'longitude' => '-51.228587422990806',
            'region'    => 'south',
        ],
        [
            'name'      => 'Florianopolis',
            'latitude'  => '-27.55393525017396',
            'longitude' => '-48.49841515885026',
            'region'    => 'south',
        ],
        [
            'name'      => 'Curitiba',
            'latitude'  => '-25.473704465731746',
            'longitude' => '-49.24787198992874',
            'region'    => 'south',
        ],
        [
            'name'      => 'Sao Paulo',
            'latitude'  => '-23.544259437612844',
            'longitude' => '-46.64370714029131',
            'region'    => 'southeast',
        ],
        [
            'name'      => 'Rio de Janeiro',
            'latitude'  => '-22.923447510604802',
            'longitude' => '-43.23208495438858',
            'region'    => 'southeast',
        ],
        [
            'name'      => 'Belo Horizonte',
            'latitude'  => '-19.917854829716372',
            'longitude' => '-43.94089385954766',
            'region'    => 'southeast',
        ],
        [
            'name'      => 'Vitoria',
            'latitude'  => '-20.340992420772206',
            'longitude' => '-40.38332271475097',
            'region'    => 'southeast',
        ],
        [
            'name'      => 'Campo Grande',
            'latitude'  => '-20.462652006300377',
            'longitude' => '54.615658937666645',
            'region'    => 'midwest',
        ],
        [
            'name'      => 'Goiania',
            'latitude'  => '-16.673126240814387',
            'longitude' => '-49.25248826354209',
            'region'    => 'midwest',
        ],
        [
            'name'      => 'Cuiaba',
            'latitude'  => '-15.601754458320842',
            'longitude' => '-56.09832706558089',
            'region'    => 'midwest',
        ],
    ];

    public const MANAGERS = [
        [
            'name'    => 'Ronaldinho Gaucho',
            'email'   => 'ronaldinho.gaucho@magazineaziul.com.br',
            'unity'   => 'Porto Alegre',
        ],
        [
            'name'    => 'Roberto Firmino',
            'email'   => 'roberto.firmino@magazineaziul.com.br',
            'unity'   => 'Florianopolis',
        ],
        [
            'name'    => 'Alex de Souza',
            'email'   => 'alex.de.souza@magazineaziul.com.br',
            'unity'   => 'Curitiba',
        ],
        [
            'name'    => 'Fran??oaldo Souza',
            'email'   => 'fran??oaldo.souza@magazineaziul.com.br',
            'unity'   => 'Sao Paulo',
        ],
        [
            'name'    => 'Rom??rio Faria',
            'email'   => 'romario.faria@magazineaziul.com.br',
            'unity'   => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Ricardo Goulart',
            'email'   => 'ricardo.goulart@magazineaziul.com.br',
            'unity'   => 'Belo Horizonte',
        ],
        [
            'name'    => 'Dejan Petkovic',
            'email'   => 'dejan.petkovic@magazineaziul.com.br',
            'unity'   => 'Vitoria',
        ],
        [
            'name'    => 'Deyverson Acosta',
            'email'   => 'deyverson.acosta@magazineaziul.com.br',
            'unity'   => 'Campo Grande',
        ],
        [
            'name'    => 'Harlei Silva',
            'email'   => 'harlei.silva@magazineaziul.com.br',
            'unity'   => 'Goiania',
        ],
        [
            'name'    => 'Walter Henrique',
            'email'   => 'walter.henrique@magazineaziul.com.br',
            'unity'   => 'Cuiaba',
        ],
    ];

    public const SELLERS = [
        [
            'name'    => 'Afonso Afancar',
            'email'   => 'afonso.afancar@magazineaziul.com.br',
            'unity'   => 'Belo Horizonte',
        ],
        [
            'name'    => 'Alceu Andreoli',
            'email'   => 'alceu.andreoli@magazineaziul.com.br',
            'unity'   => 'Belo Horizonte',
        ],
        [
            'name'    => 'Amalia Zago',
            'email'   => 'amalia.zago@magazineaziul.com.br',
            'unity'   => 'Belo Horizonte',
        ],
        [
            'name'    => 'Carlos Eduardo',
            'email'   => 'carlos.eduardo@magazineaziul.com.br',
            'unity'   => 'Belo Horizonte',
        ],
        [
            'name'    => 'Luiz Felipe',
            'email'   => 'luiz.felipe@magazineaziul.com.br',
            'unity'   => 'Belo Horizonte',
        ],
        [
            'name'    => 'Breno',
            'email'   => 'breno@magazineaziul.com.br',
            'unity'   => 'Campo Grande',
        ],
        [
            'name'    => 'Emanuel',
            'email'   => 'emanuel@magazineaziul.com.br',
            'unity'   => 'Campo Grande',
        ],
        [
            'name'    => 'Ryan',
            'email'   => 'ryan@magazineaziul.com.br',
            'unity'   => 'Campo Grande',
        ],
        [
            'name'    => 'Vitor Hugo',
            'email'   => 'vitor.hugo@magazineaziul.com.br',
            'unity'   => 'Campo Grande',
        ],
        [
            'name'    => 'Yuri',
            'email'   => 'yuri@magazineaziul.com.br',
            'unity'   => 'Campo Grande',
        ],
        [
            'name'    => 'Benjamin',
            'email'   => 'benjamin@magazineaziul.com.br',
            'unity'   => 'Cuiaba',
        ],
        [
            'name'    => 'Erick',
            'email'   => 'erick@magazineaziul.com.br',
            'unity'   => 'Cuiaba',
        ],
        [
            'name'    => 'Enzo Gabriel',
            'email'   => 'enzo.gabriel@magazineaziul.com.br',
            'unity'   => 'Cuiaba',
        ],
        [
            'name'    => 'Fernando',
            'email'   => 'fernando@magazineaziul.com.br',
            'unity'   => 'Cuiaba',
        ],
        [
            'name'    => 'Joaquim',
            'email'   => 'joaquim@magazineaziul.com.br',
            'unity'   => 'Cuiaba',
        ],
        [
            'name'    => 'Andr??',
            'email'   => 'andr??@magazineaziul.com.br',
            'unity'   => 'Curitiba',
        ],
        [
            'name'    => 'Raul',
            'email'   => 'raul@magazineaziul.com.br',
            'unity'   => 'Curitiba',
        ],
        [
            'name'    => 'Marcelo',
            'email'   => 'marcelo@magazineaziul.com.br',
            'unity'   => 'Curitiba',
        ],
        [
            'name'    => 'Julio C??sar',
            'email'   => 'julio.c??sar@magazineaziul.com.br',
            'unity'   => 'Curitiba',
        ],
        [
            'name'    => 'Cau??',
            'email'   => 'cau??@magazineaziul.com.br',
            'unity'   => 'Curitiba',
        ],
        [
            'name'    => 'Ben??cio',
            'email'   => 'ben??cio@magazineaziul.com.br',
            'unity'   => 'Florianopolis',
        ],
        [
            'name'    => 'Vitor Gabriel',
            'email'   => 'vitor.gabriel@magazineaziul.com.br',
            'unity'   => 'Florianopolis',
        ],
        [
            'name'    => 'Augusto',
            'email'   => 'augusto@magazineaziul.com.br',
            'unity'   => 'Florianopolis',
        ],
        [
            'name'    => 'Pedro Lucas',
            'email'   => 'pedro.lucas@magazineaziul.com.br',
            'unity'   => 'Florianopolis',
        ],
        [
            'name'    => 'Luiz Gustavo',
            'email'   => 'luiz.gustavo@magazineaziul.com.br',
            'unity'   => 'Florianopolis',
        ],
        [
            'name'    => 'Giovanni',
            'email'   => 'giovanni@magazineaziul.com.br',
            'unity'   => 'Goiania',
        ],
        [
            'name'    => 'Renato',
            'email'   => 'renato@magazineaziul.com.br',
            'unity'   => 'Goiania',
        ],
        [
            'name'    => 'Diego',
            'email'   => 'diego@magazineaziul.com.br',
            'unity'   => 'Goiania',
        ],
        [
            'name'    => 'Jo??o Paulo',
            'email'   => 'jo??o.paulo@magazineaziul.com.br',
            'unity'   => 'Goiania',
        ],
        [
            'name'    => 'Renan',
            'email'   => 'renan@magazineaziul.com.br',
            'unity'   => 'Goiania',
        ],
        [
            'name'    => 'Luiz Fernando',
            'email'   => 'luiz.fernando@magazineaziul.com.br',
            'unity'   => 'Porto Alegre',
        ],
        [
            'name'    => 'Anthony',
            'email'   => 'anthony@magazineaziul.com.br',
            'unity'   => 'Porto Alegre',
        ],
        [
            'name'    => 'Lucas Gabriel',
            'email'   => 'lucas.gabriel@magazineaziul.com.br',
            'unity'   => 'Porto Alegre',
        ],
        [
            'name'    => 'Thales',
            'email'   => 'thales@magazineaziul.com.br',
            'unity'   => 'Porto Alegre',
        ],
        [
            'name'    => 'Luiz Miguel',
            'email'   => 'luiz.miguel@magazineaziul.com.br',
            'unity'   => 'Porto Alegre',
        ],
        [
            'name'    => 'Henry',
            'email'   => 'henry@magazineaziul.com.br',
            'unity'   => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Marcos Vinicius',
            'email'   => 'marcos.vinicius@magazineaziul.com.br',
            'unity'   => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Kevin',
            'email'   => 'kevin@magazineaziul.com.br',
            'unity'   => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Levi',
            'email'   => 'levi@magazineaziul.com.br',
            'unity'   => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Enrico',
            'email'   => 'enrico@magazineaziul.com.br',
            'unity'   => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Jo??o Lucas',
            'email'   => 'jo??o.lucas@magazineaziul.com.br',
            'unity'   => 'Sao Paulo',
        ],
        [
            'name'    => 'Hugo',
            'email'   => 'hugo@magazineaziul.com.br',
            'unity'   => 'Sao Paulo',
        ],
        [
            'name'    => 'Luiz Guilherme',
            'email'   => 'luiz.guilherme@magazineaziul.com.br',
            'unity'   => 'Sao Paulo',
        ],
        [
            'name'    => 'Matheus Henrique',
            'email'   => 'matheus.henrique@magazineaziul.com.br',
            'unity'   => 'Sao Paulo',
        ],
        [
            'name'    => 'Miguel',
            'email'   => 'miguel@magazineaziul.com.br',
            'unity'   => 'Sao Paulo',
        ],
        [
            'name'    => 'Davi',
            'email'   => 'davi@magazineaziul.com.br',
            'unity'   => 'Vitoria',
        ],
        [
            'name'    => 'Gabriel',
            'email'   => 'gabriel@magazineaziul.com.br',
            'unity'   => 'Vitoria',
        ],
        [
            'name'    => 'Arthur',
            'email'   => 'arthur@magazineaziul.com.br',
            'unity'   => 'Vitoria',
        ],
        [
            'name'    => 'Lucas',
            'email'   => 'lucas@magazineaziul.com.br',
            'unity'   => 'Vitoria',
        ],
        [
            'name'    => 'Matheus',
            'email'   => 'matheus@magazineaziul.com.br',
            'unity'   => 'Vitoria',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UnitiesSeeder::class,
            RolesSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
