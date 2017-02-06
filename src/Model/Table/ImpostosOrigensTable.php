<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * ImpostosOrigens Model
 *
 * @method \App\Model\Entity\ImpostosOrigen get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImpostosOrigen newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ImpostosOrigen[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImpostosOrigen|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImpostosOrigen patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImpostosOrigen[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImpostosOrigen findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImpostosOrigensTable extends Table {

    use \App\Model\Traits\SearchTraits,
        \App\Model\Traits\FuncoesTraits;

    public $statusInativo = 0;
    public $statusAtivo = 1;
    public $statusExcluido = 9;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('impostos_origens');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Search.Search');
    }

    public function searchConfiguration() {
        return $this->searchConfigurationDynamic();
    }

    private function searchConfigurationDynamic() {
        $search = $this->_searchConfigurationDynamic(new Manager($this));
        return $search;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('imposto_origem', 'create')
                ->notEmpty('imposto_origem');

        return $validator;
    }

    public function find($type = 'all', $options = []) {
        $retorno = parent::find($type, $options);
        if ($type === 'list') {
            $retorno->order([$this->alias() . '.' . $this->displayField() => 'ASC']);
        }
        return $retorno;
    }

}
