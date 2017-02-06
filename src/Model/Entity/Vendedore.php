<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendedore Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $documento
 * @property string $documento_estadual
 * @property string $cep
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $telefone1
 * @property string $telefone2
 * @property string $telefone3
 * @property string $telefone4
 * @property string $ponto_referencia
 * @property string $foto
 * @property string $email1
 * @property string $email2
 * @property string $email3
 * @property string $site
 * @property string $estado_civil
 * @property int $casa_propria
 * @property int $veiculo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Vendedore extends Entity {

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

        if (!file_exists(WWW_ROOT . 'files' . DS . 'vendedores' . DS . $this->_properties['foto'])) {
            return \Cake\Routing\Router::url('/files/indisponivel.png', true);
        }

        return \Cake\Routing\Router::url(DS . 'files' . DS . 'vendedores' . DS . $this->_properties['foto'], true);
    }

    protected function _getPath() {
        if (empty($this->_properties['foto'])) {
            return null;
        }

        if (!file_exists(WWW_ROOT . 'files' . DS . 'vendedores' . DS . $this->_properties['foto'])) {
            return null;
        }

        return WWW_ROOT . 'files' . DS . 'vendedores' . DS . $this->_properties['foto'];
    }

}
