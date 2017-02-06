<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Promoco Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property int $tipo_promocao
 * @property float $valor_original
 * @property float $valor_venda
 * @property \Cake\I18n\Time $data_inicio
 * @property \Cake\I18n\Time $data_fim
 * @property int $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Produto $produto
 */
class Promoco extends Entity
{

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
        
    ];
}
