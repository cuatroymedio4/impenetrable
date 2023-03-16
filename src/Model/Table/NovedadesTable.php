<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Novedades Model
 *
 * @method \App\Model\Entity\Novedade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Novedade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Novedade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Novedade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Novedade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Novedade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Novedade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Novedade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NovedadesTable extends Table
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

        $this->setTable('novedades');
        $this->setDisplayField('idnovedades');
        $this->setPrimaryKey('idnovedades');

        $this->addBehavior('Timestamp');
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
            ->integer('idnovedades')
            ->allowEmptyString('idnovedades', null, 'create');

        $validator
            ->scalar('tittle')
            ->maxLength('tittle', 250)
            ->requirePresence('tittle', 'create')
            ->notEmptyString('tittle');

        $validator
            ->scalar('content')
            ->allowEmptyString('content');

        $validator
            ->scalar('category')
            ->maxLength('category', 45)
            ->allowEmptyString('category');

        $validator
            ->scalar('folder')
            ->maxLength('folder', 255)
            ->allowEmptyString('folder');

        return $validator;
    }
}
