<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SliderHome Model
 *
 * @method \App\Model\Entity\SliderHome get($primaryKey, $options = [])
 * @method \App\Model\Entity\SliderHome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SliderHome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SliderHome|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SliderHome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SliderHome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SliderHome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SliderHome findOrCreate($search, callable $callback = null, $options = [])
 */
class SliderHomeTable extends Table
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

        $this->setTable('slider_home');
        $this->setDisplayField('idslider_home');
        $this->setPrimaryKey('idslider_home');
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
            ->integer('idslider_home')
            ->allowEmptyString('idslider_home', null, 'create');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->requirePresence('photo_dir', 'create')
            ->notEmptyString('photo_dir');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 75)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 150)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->boolean('is_show')
            ->notEmptyString('is_show');

        return $validator;
    }
}
