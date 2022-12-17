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
            'unidade' => 'Porto Alegre',
        ],
        [
            'name'    => 'Roberto Firmino',
            'email'   => 'roberto.firmino@magazineaziul.com.br',
            'unidade' => 'Florianopolis',
        ],
        [
            'name'    => 'Alex de Souza',
            'email'   => 'alex.de.souza@magazineaziul.com.br',
            'unidade' => 'Curitiba',
        ],
        [
            'name'    => 'Françoaldo Souza',
            'email'   => 'françoaldo.souza@magazineaziul.com.br',
            'unidade' => 'Sao Paulo',
        ],
        [
            'name'    => 'Romário Faria',
            'email'   => 'romario.faria@magazineaziul.com.br',
            'unidade' => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Ricardo Goulart',
            'email'   => 'ricardo.goulart@magazineaziul.com.br',
            'unidade' => 'Belo Horizonte',
        ],
        [
            'name'    => 'Dejan Petkovic',
            'email'   => 'dejan.petkovic@magazineaziul.com.br',
            'unidade' => 'Vitória',
        ],
        [
            'name'    => 'Deyverson Acosta',
            'email'   => 'deyverson.acosta@magazineaziul.com.br',
            'unidade' => 'Campo Grande',
        ],
        [
            'name'    => 'Harlei Silva',
            'email'   => 'harlei.silva@magazineaziul.com.br',
            'unidade' => 'Goiania',
        ],
        [
            'name'    => 'Walter Henrique',
            'email'   => 'walter.henrique@magazineaziul.com.br',
            'unidade' => 'Cuiaba',
        ],
    ];

    public const SELLERS = [
        [
            'name'    => 'Afonso Afancar',
            'email'   => 'afonso.afancar@magazineaziul.com.br',
            'unidade' => 'Belo Horizonte',
        ],
        [
            'name'    => 'Alceu Andreoli',
            'email'   => 'alceu.andreoli@magazineaziul.com.br',
            'unidade' => 'Belo Horizonte',
        ],
        [
            'name'    => 'Amalia Zago',
            'email'   => 'amalia.zago@magazineaziul.com.br',
            'unidade' => 'Belo Horizonte',
        ],
        [
            'name'    => 'Carlos Eduardo',
            'email'   => 'carlos.eduardo@magazineaziul.com.br',
            'unidade' => 'Belo Horizonte',
        ],
        [
            'name'    => 'Luiz Felipe',
            'email'   => 'luiz.felipe@magazineaziul.com.br',
            'unidade' => 'Belo Horizonte',
        ],
        [
            'name'    => 'Breno',
            'email'   => 'breno@magazineaziul.com.br',
            'unidade' => 'Campo Grande',
        ],
        [
            'name'    => 'Emanuel',
            'email'   => 'emanuel@magazineaziul.com.br',
            'unidade' => 'Campo Grande',
        ],
        [
            'name'    => 'Ryan',
            'email'   => 'ryan@magazineaziul.com.br',
            'unidade' => 'Campo Grande',
        ],
        [
            'name'    => 'Vitor Hugo',
            'email'   => 'vitor.hugo@magazineaziul.com.br',
            'unidade' => 'Campo Grande',
        ],
        [
            'name'    => 'Yuri',
            'email'   => 'yuri@magazineaziul.com.br',
            'unidade' => 'Campo Grande',
        ],
        [
            'name'    => 'Benjamin',
            'email'   => 'benjamin@magazineaziul.com.br',
            'unidade' => 'Cuiaba',
        ],
        [
            'name'    => 'Erick',
            'email'   => 'erick@magazineaziul.com.br',
            'unidade' => 'Cuiaba',
        ],
        [
            'name'    => 'Enzo Gabriel',
            'email'   => 'enzo.gabriel@magazineaziul.com.br',
            'unidade' => 'Cuiaba',
        ],
        [
            'name'    => 'Fernando',
            'email'   => 'fernando@magazineaziul.com.br',
            'unidade' => 'Cuiaba',
        ],
        [
            'name'    => 'Joaquim',
            'email'   => 'joaquim@magazineaziul.com.br',
            'unidade' => 'Cuiaba',
        ],
        [
            'name'    => 'André',
            'email'   => 'andré@magazineaziul.com.br',
            'unidade' => 'Curitiba',
        ],
        [
            'name'    => 'Raul',
            'email'   => 'raul@magazineaziul.com.br',
            'unidade' => 'Curitiba',
        ],
        [
            'name'    => 'Marcelo',
            'email'   => 'marcelo@magazineaziul.com.br',
            'unidade' => 'Curitiba',
        ],
        [
            'name'    => 'Julio César',
            'email'   => 'julio.césar@magazineaziul.com.br',
            'unidade' => 'Curitiba',
        ],
        [
            'name'    => 'Cauê',
            'email'   => 'cauê@magazineaziul.com.br',
            'unidade' => 'Curitiba',
        ],
        [
            'name'    => 'Benício',
            'email'   => 'benício@magazineaziul.com.br',
            'unidade' => 'Florianopolis',
        ],
        [
            'name'    => 'Vitor Gabriel',
            'email'   => 'vitor.gabriel@magazineaziul.com.br',
            'unidade' => 'Florianopolis',
        ],
        [
            'name'    => 'Augusto',
            'email'   => 'augusto@magazineaziul.com.br',
            'unidade' => 'Florianopolis',
        ],
        [
            'name'    => 'Pedro Lucas',
            'email'   => 'pedro.lucas@magazineaziul.com.br',
            'unidade' => 'Florianopolis',
        ],
        [
            'name'    => 'Luiz Gustavo',
            'email'   => 'luiz.gustavo@magazineaziul.com.br',
            'unidade' => 'Florianopolis',
        ],
        [
            'name'    => 'Giovanni',
            'email'   => 'giovanni@magazineaziul.com.br',
            'unidade' => 'Goiania',
        ],
        [
            'name'    => 'Renato',
            'email'   => 'renato@magazineaziul.com.br',
            'unidade' => 'Goiania',
        ],
        [
            'name'    => 'Diego',
            'email'   => 'diego@magazineaziul.com.br',
            'unidade' => 'Goiania',
        ],
        [
            'name'    => 'João Paulo',
            'email'   => 'joão.paulo@magazineaziul.com.br',
            'unidade' => 'Goiania',
        ],
        [
            'name'    => 'Renan',
            'email'   => 'renan@magazineaziul.com.br',
            'unidade' => 'Goiania',
        ],
        [
            'name'    => 'Luiz Fernando',
            'email'   => 'luiz.fernando@magazineaziul.com.br',
            'unidade' => 'Porto Alegre',
        ],
        [
            'name'    => 'Anthony',
            'email'   => 'anthony@magazineaziul.com.br',
            'unidade' => 'Porto Alegre',
        ],
        [
            'name'    => 'Lucas Gabriel',
            'email'   => 'lucas.gabriel@magazineaziul.com.br',
            'unidade' => 'Porto Alegre',
        ],
        [
            'name'    => 'Thales',
            'email'   => 'thales@magazineaziul.com.br',
            'unidade' => 'Porto Alegre',
        ],
        [
            'name'    => 'Luiz Miguel',
            'email'   => 'luiz.miguel@magazineaziul.com.br',
            'unidade' => 'Porto Alegre',
        ],
        [
            'name'    => 'Henry',
            'email'   => 'henry@magazineaziul.com.br',
            'unidade' => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Marcos Vinicius',
            'email'   => 'marcos.vinicius@magazineaziul.com.br',
            'unidade' => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Kevin',
            'email'   => 'kevin@magazineaziul.com.br',
            'unidade' => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Levi',
            'email'   => 'levi@magazineaziul.com.br',
            'unidade' => 'Rio de Janeiro',
        ],
        [
            'name'    => 'Enrico',
            'email'   => 'enrico@magazineaziul.com.br',
            'unidade' => 'Rio de Janeiro',
        ],
        [
            'name'    => 'João Lucas',
            'email'   => 'joão.lucas@magazineaziul.com.br',
            'unidade' => 'Sao Paulo',
        ],
        [
            'name'    => 'Hugo',
            'email'   => 'hugo@magazineaziul.com.br',
            'unidade' => 'Sao Paulo',
        ],
        [
            'name'    => 'Luiz Guilherme',
            'email'   => 'luiz.guilherme@magazineaziul.com.br',
            'unidade' => 'Sao Paulo',
        ],
        [
            'name'    => 'Matheus Henrique',
            'email'   => 'matheus.henrique@magazineaziul.com.br',
            'unidade' => 'Sao Paulo',
        ],
        [
            'name'    => 'Miguel',
            'email'   => 'miguel@magazineaziul.com.br',
            'unidade' => 'Sao Paulo',
        ],
        [
            'name'    => 'Davi',
            'email'   => 'davi@magazineaziul.com.br',
            'unidade' => 'Vitória',
        ],
        [
            'name'    => 'Gabriel',
            'email'   => 'gabriel@magazineaziul.com.br',
            'unidade' => 'Vitória',
        ],
        [
            'name'    => 'Arthur',
            'email'   => 'arthur@magazineaziul.com.br',
            'unidade' => 'Vitória',
        ],
        [
            'name'    => 'Lucas',
            'email'   => 'lucas@magazineaziul.com.br',
            'unidade' => 'Vitória',
        ],
        [
            'name'    => 'Matheus',
            'email'   => 'matheus@magazineaziul.com.br',
            'unidade' => 'Vitória',
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
