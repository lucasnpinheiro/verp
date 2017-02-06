<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 *
 */
class ProdutosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'codigo' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nome' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'grupo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'unidades_carga_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'peso' => ['type' => 'float', 'length' => 11, 'precision' => 3, 'unsigned' => false, 'null' => true, 'default' => '0.000', 'comment' => ''],
        'icms_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'impostos_origem_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'varejo_valor_compra' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'varejo_valor_lucro' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'varejo_valor_venda' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'atacado_quantidade_minima' => ['type' => 'float', 'length' => 11, 'precision' => 3, 'unsigned' => false, 'null' => true, 'default' => '0.000', 'comment' => ''],
        'atacado_valor_lucro' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'atacado_valor_venda' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'pratica_desconto' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '0 - Não | 1 - Sim', 'precision' => null, 'autoIncrement' => null],
        'valor_desconto' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'media_venda_30_dias' => ['type' => 'float', 'length' => 11, 'precision' => 3, 'unsigned' => false, 'null' => true, 'default' => '0.000', 'comment' => ''],
        'estoque_atual' => ['type' => 'float', 'length' => 11, 'precision' => 3, 'unsigned' => false, 'null' => true, 'default' => '0.000', 'comment' => ''],
        'descricao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'status' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '0 - Inativo | 1 - Ativo', 'precision' => null, 'autoIncrement' => null],
        'foto' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'codigo' => 'Lorem ipsum dolor sit amet',
            'nome' => 'Lorem ipsum dolor sit amet',
            'grupo_id' => 1,
            'unidades_carga_id' => 1,
            'peso' => 1,
            'icms_id' => 1,
            'impostos_origem_id' => 1,
            'varejo_valor_compra' => 1,
            'varejo_valor_lucro' => 1,
            'varejo_valor_venda' => 1,
            'atacado_quantidade_minima' => 1,
            'atacado_valor_lucro' => 1,
            'atacado_valor_venda' => 1,
            'pratica_desconto' => 1,
            'valor_desconto' => 1,
            'media_venda_30_dias' => 1,
            'estoque_atual' => 1,
            'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'status' => 1,
            'foto' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-01-07 00:22:28',
            'modified' => '2017-01-07 00:22:28'
        ],
    ];
}
