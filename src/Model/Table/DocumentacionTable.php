<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentacion Model
 *
 * @method \App\Model\Entity\Documentacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Documentacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Documentacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentacion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Documentacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentacion findOrCreate($search, callable $callback = null, $options = [])
 */
class DocumentacionTable extends Table
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

        $this->setTable('documentacion');
        $this->setDisplayField('title');
        $this->setPrimaryKey('iddocumentacion');
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
            ->integer('iddocumentacion')
            ->allowEmptyString('iddocumentacion', null, 'create')
            ->add('iddocumentacion', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('title')
            ->maxLength('title', 150)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->maxLength('description', 300)
            ->allowEmptyString('description');

        $validator
            ->scalar('format')
            ->maxLength('format', 100)
            ->requirePresence('format', 'create')
            ->notEmptyString('format');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('folder')
            ->maxLength('folder', 255)
            ->allowEmptyString('folder');

        $validator
            ->integer('size')
            ->allowEmptyString('size');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['iddocumentacion']));

        return $rules;
    }
}
