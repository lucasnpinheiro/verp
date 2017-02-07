<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Produtos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Grupos
 * @property \Cake\ORM\Association\BelongsTo $UnidadesCargas
 * @property \Cake\ORM\Association\BelongsTo $Icms
 * @property \Cake\ORM\Association\BelongsTo $ImpostosOrigens
 * @property \Cake\ORM\Association\HasMany $Promocoes
 *
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProdutosTable extends Table {

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

        $this->table('produtos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id'
        ]);
        $this->belongsTo('UnidadesCargas', [
            'foreignKey' => 'unidades_carga_id'
        ]);
        $this->belongsTo('Icms', [
            'foreignKey' => 'icms_id'
        ]);
        $this->belongsTo('ImpostosOrigens', [
            'foreignKey' => 'impostos_origem_id'
        ]);
        $this->hasMany('Promocoes', [
            'foreignKey' => 'produto_id'
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
                ->allowEmpty('codigo');

        $validator
                ->notEmpty('nome');

        $validator
                ->numeric('peso')
                ->allowEmpty('peso');

        $validator
                ->numeric('varejo_valor_compra')
                ->allowEmpty('varejo_valor_compra');

        $validator
                ->numeric('varejo_valor_lucro')
                ->allowEmpty('varejo_valor_lucro');

        $validator
                ->numeric('varejo_valor_venda')
                ->allowEmpty('varejo_valor_venda');

        $validator
                ->numeric('atacado_quantidade_minima')
                ->allowEmpty('atacado_quantidade_minima');

        $validator
                ->numeric('atacado_valor_lucro')
                ->allowEmpty('atacado_valor_lucro');

        $validator
                ->numeric('atacado_valor_venda')
                ->allowEmpty('atacado_valor_venda');

        $validator
                ->integer('pratica_desconto')
                ->allowEmpty('pratica_desconto');

        $validator
                ->numeric('valor_desconto')
                ->allowEmpty('valor_desconto');

        $validator
                ->numeric('media_venda_30_dias')
                ->allowEmpty('media_venda_30_dias');

        $validator
                ->numeric('estoque_atual')
                ->allowEmpty('estoque_atual');

        $validator
                ->allowEmpty('descricao');

        $validator
                ->integer('status')
                ->allowEmpty('status');

        $validator
                ->allowEmpty('foto');

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
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));
        $rules->add($rules->existsIn(['unidades_carga_id'], 'UnidadesCargas'));
        $rules->add($rules->existsIn(['icms_id'], 'Icms'));
        $rules->add($rules->existsIn(['impostos_origem_id'], 'ImpostosOrigens'));

        return $rules;
    }

    public function patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = []) {
        if (!empty($data['foto'])) {
            $foto = $this->_fileUpload(WWW_ROOT . 'files' . DS . 'produtos' . DS, $data['foto'], $entity);
            if (!empty($foto)) {
                $data['foto'] = $foto;
            } else {
                unset($data['foto']);
            }
        }

        if (!empty($data['peso'])) {
            $data['peso'] = $this->replaceMoney($data['peso'], 3);
        }

        if (!empty($data['varejo_valor_compra'])) {
            $data['varejo_valor_compra'] = $this->replaceMoney($data['varejo_valor_compra']);
        }

        if (!empty($data['varejo_valor_lucro'])) {
            $data['varejo_valor_lucro'] = $this->replaceMoney($data['varejo_valor_lucro']);
        }

        if (!empty($data['varejo_valor_venda'])) {
            $data['varejo_valor_venda'] = $this->replaceMoney($data['varejo_valor_venda']);
        }

        if (!empty($data['atacado_quantidade_minima'])) {
            $data['atacado_quantidade_minima'] = $this->replaceMoney($data['atacado_quantidade_minima']);
        }

        if (!empty($data['atacado_valor_lucro'])) {
            $data['atacado_valor_lucro'] = $this->replaceMoney($data['atacado_valor_lucro']);
        }

        if (!empty($data['atacado_valor_venda'])) {
            $data['atacado_valor_venda'] = $this->replaceMoney($data['atacado_valor_venda']);
        }

        if (!empty($data['valor_desconto'])) {
            $data['valor_desconto'] = $this->replaceMoney($data['valor_desconto']);
        }

        if (!empty($data['media_venda_30_dias'])) {
            $data['media_venda_30_dias'] = $this->replaceMoney($data['media_venda_30_dias']);
        }

        if (!empty($data['estoque_atual'])) {
            $data['estoque_atual'] = $this->replaceMoney($data['estoque_atual'], 3);
        }

        if (!empty($data['pratica_desconto'])) {
            $data['pratica_desconto'] = $this->forceBoolean($data['pratica_desconto']);
        }
        return parent::patchEntity($entity, $data, $options);
    }

    public function find($type = 'all', $options = []) {
        $retorno = parent::find($type, $options);
        if ($type === 'list') {
            $retorno->order([$this->alias() . '.' . $this->displayField() => 'ASC']);
        }
        return $retorno;
    }

    public function beforeSave(\Cake\Event\Event $event, \Cake\ORM\Entity $entity) {
        $entity->varejo_valor_lucro = $this->calculaLucro($entity->varejo_valor_venda, $entity->varejo_valor_compra);
        $entity->atacado_valor_lucro = $this->calculaLucro($entity->atacado_valor_venda, $entity->varejo_valor_compra);
        return true;
    }

    public function afterSave(\Cake\Event\Event $event, \Cake\Datasource\EntityInterface $entity, \ArrayObject $options) {
        if (empty($entity->codigo)) {
            $entity->codigo = $entity->id;
            $this->save($entity);
        }
        return true;
    }

}
