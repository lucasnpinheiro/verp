<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Vendedores Model
 *
 * @method \App\Model\Entity\Vendedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vendedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VendedoresTable extends Table {

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

        $this->table('vendedores');
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
                ->notBlank('nome');

        $validator
                ->allowEmpty('documento');

        $validator
                ->allowEmpty('documento_estadual');

        $validator
                ->allowEmpty('cep');

        $validator
                ->allowEmpty('logradouro');

        $validator
                ->allowEmpty('numero');

        $validator
                ->allowEmpty('complemento');

        $validator
                ->allowEmpty('bairro');

        $validator
                ->allowEmpty('cidade');

        $validator
                ->allowEmpty('estado');

        $validator
                ->allowEmpty('telefone1');

        $validator
                ->allowEmpty('telefone2');

        $validator
                ->allowEmpty('telefone3');

        $validator
                ->allowEmpty('telefone4');

        $validator
                ->allowEmpty('ponto_referencia');

        $validator
                ->allowEmpty('foto');

        $validator
                ->allowEmpty('email1')
                ->email('email1');

        $validator
                ->allowEmpty('email2')
                ->email('email2');

        $validator
                ->allowEmpty('email3')
                ->email('email3');

        $validator
                ->allowEmpty('site');


        return $validator;
    }

    public function patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = []) {
        if (!empty($data['foto'])) {
            $foto = $this->_fileUpload(WWW_ROOT . 'files' . DS . 'vendedores' . DS, $data['foto'], $entity);
            if (!empty($foto)) {
                $data['foto'] = $foto;
            } else {
                unset($data['foto']);
            }
        }

        if (!empty($data['documento'])) {
            $data['documento'] = $this->removeMask(['documento']);
        }

        if (!empty($data['documento_estadual'])) {
            $data['documento_estadual'] = $this->removeMask(['documento_estadual']);
        }

        if (!empty($data['cep'])) {
            $data['cep'] = $this->removeMask(['cep']);
        }

        if (!empty($data['telefone1'])) {
            $data['telefone1'] = $this->removeMask(['telefone1']);
        }

        if (!empty($data['telefone2'])) {
            $data['telefone2'] = $this->removeMask(['telefone2']);
        }

        if (!empty($data['telefone3'])) {
            $data['telefone3'] = $this->removeMask(['telefone3']);
        }

        if (!empty($data['telefone4'])) {
            $data['telefone4'] = $this->removeMask(['telefone4']);
        }

        return parent::patchEntity($entity, $data, $options);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['documento']));
        $rules->add($rules->isUnique(['documento_estadual']));

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
