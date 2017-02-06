<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $codigo
 * @property string $nome
 * @property int $grupo_id
 * @property int $unidades_carga_id
 * @property float $peso
 * @property int $icms_id
 * @property int $impostos_origem_id
 * @property float $varejo_valor_compra
 * @property float $varejo_valor_lucro
 * @property float $varejo_valor_venda
 * @property float $atacado_quantidade_minima
 * @property float $atacado_valor_lucro
 * @property float $atacado_valor_venda
 * @property int $pratica_desconto
 * @property float $valor_desconto
 * @property float $media_venda_30_dias
 * @property float $estoque_atual
 * @property string $descricao
 * @property int $status
 * @property string $foto
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\UnidadesCarga $unidades_carga
 * @property \App\Model\Entity\Icm $icm
 * @property \App\Model\Entity\ImpostosOrigem $impostos_origem
 * @property \App\Model\Entity\Promoco[] $promocoes
 */
class Produto extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'url' => true,
        'path' => true,
    ];
    protected $_virtual = ['url', 'path'];

    protected function _getUrl() {
        if (empty($this->_properties['foto'])) {
            return \Cake\Routing\Router::url('/files/indisponivel.png', true);
        }

        if (!file_exists(WWW_ROOT . 'files' . DS . 'produtos' . DS . $this->_properties['foto'])) {
            return \Cake\Routing\Router::url('/files/indisponivel.png', true);
        }

        return \Cake\Routing\Router::url(DS . 'files' . DS . 'produtos' . DS . $this->_properties['foto'], true);
    }

    protected function _getPath() {
        if (empty($this->_properties['foto'])) {
            return null;
        }

        if (!file_exists(WWW_ROOT . 'files' . DS . 'produtos' . DS . $this->_properties['foto'])) {
            return null;
        }

        return WWW_ROOT . 'files' . DS . 'produtos' . DS . $this->_properties['foto'];
    }

}
