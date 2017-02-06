<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Promocoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Produtos
 *
 * @method \App\Model\Entity\Promoco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Promoco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Promoco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Promoco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Promoco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Promoco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Promoco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PromocoesTable extends Table {

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

        $this->table('promocoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Produtos', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER'
        ]);

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
                ->integer('tipo_promocao')
                ->requirePresence('tipo_promocao', 'create')
                ->notEmpty('tipo_promocao');

        $validator
                ->numeric('valor_original')
                ->requirePresence('valor_original', 'create')
                ->notEmpty('valor_original');

        $validator
                ->numeric('valor_venda')
                ->requirePresence('valor_venda', 'create')
                ->notEmpty('valor_venda');

        $validator
                ->date('data_inicio')
                ->allowEmpty('data_inicio');

        $validator
                ->date('data_fim')
                ->allowEmpty('data_fim');

        $validator
                ->integer('status')
                ->allowEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['produto_id'], 'Produtos'));

        return $rules;
    }

    public function find($type = 'all', $options = []) {
        $retorno = parent::find($type, $options);
        if ($type === 'list') {
            $retorno->order([$this->alias() . '.' . $this->displayField() => 'ASC']);
        }
        return $retorno;
    }

}
