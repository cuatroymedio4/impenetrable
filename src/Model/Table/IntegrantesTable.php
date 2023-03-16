<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Integrantes Model
 *
 * @method \App\Model\Entity\Integrante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Integrante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Integrante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Integrante|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Integrante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Integrante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Integrante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Integrante findOrCreate($search, callable $callback = null, $options = [])
 */
class IntegrantesTable extends Table
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

        $this->setTable('integrantes');
        $this->setDisplayField('idintegrantes');
        $this->setPrimaryKey('idintegrantes');
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
            ->integer('idintegrantes')
            ->allowEmptyString('idintegrantes', null, 'create');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 100)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 45)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname');

        $validator
            ->scalar('role')
            ->maxLength('role', 45)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->scalar('formacion')
            ->maxLength('formacion', 150)
            ->requirePresence('formacion', 'create')
            ->notEmptyString('formacion');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 100)
            ->allowEmptyString('cargo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->allowEmptyString('photo_dir');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        return $validator;
    }
}
