<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administradore Entity
 *
 * @property int $id
 * @property string $foto
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property int $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Administradore extends Entity {

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

        if (!file_exists(WWW_ROOT . 'files' . DS . 'administradores' . DS . $this->_properties['foto'])) {
            return \Cake\Routing\Router::url('/files/indisponivel.png', true);
        }

        return \Cake\Routing\Router::url(DS . 'files' . DS . 'administradores' . DS . $this->_properties['foto'], true);
    }

    protected function _getPath() {
        if (empty($this->_properties['foto'])) {
            return null;
        }

        if (!file_exists(WWW_ROOT . 'files' . DS . 'administradores' . DS . $this->_properties['foto'])) {
            return null;
        }

        return WWW_ROOT . 'files' . DS . 'administradores' . DS . $this->_properties['foto'];
    }

}
