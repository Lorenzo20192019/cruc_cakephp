<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Meses Model
 *
 * @method \App\Model\Entity\Mese get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mese newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mese[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mese|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mese saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mese patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mese[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mese findOrCreate($search, callable $callback = null, $options = [])
 */
class MesesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('meses');
        $this->setDisplayField('idmeses');
        $this->setPrimaryKey('idmeses');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idmeses')
            ->allowEmptyString('idmeses', null, 'create');

        $validator
            ->scalar('meses')
            ->maxLength('meses', 45)
            ->allowEmptyString('meses');

        $validator
            ->integer('cuota')
            ->allowEmptyString('cuota');

        return $validator;
    }
}
