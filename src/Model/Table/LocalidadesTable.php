<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Localidades Model
 *
 * @method \App\Model\Entity\Localidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Localidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Localidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Localidade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Localidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Localidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Localidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Localidade findOrCreate($search, callable $callback = null, $options = [])
 */
class LocalidadesTable extends Table
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

        $this->setTable('localidades');
        $this->setDisplayField('idlocalidades');
        $this->setPrimaryKey('idlocalidades');
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
            ->integer('idlocalidades')
            ->allowEmptyString('idlocalidades', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 16777215)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('geom')
            ->allowEmptyString('geom');

        $validator
            ->integer('id_loc_icon')
            ->allowEmptyString('id_loc_icon');

        $validator
            ->scalar('path_img')
            ->maxLength('path_img', 255)
            ->allowEmptyString('path_img');

        return $validator;
    }
}
