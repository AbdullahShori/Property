<?php
namespace Users\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Property Model
 *
 * @method \Users\Model\Entity\Property get($primaryKey, $options = [])
 * @method \Users\Model\Entity\Property newEntity($data = null, array $options = [])
 * @method \Users\Model\Entity\Property[] newEntities(array $data, array $options = [])
 * @method \Users\Model\Entity\Property|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\Property saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Users\Model\Entity\Property patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Users\Model\Entity\Property[] patchEntities($entities, array $data, array $options = [])
 * @method \Users\Model\Entity\Property findOrCreate($search, callable $callback = null, $options = [])
 */
class PropertyTable extends Table
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

        $this->setTable('property');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('room')
            ->maxLength('room', 255)
            ->requirePresence('room', 'create')
            ->notEmptyString('room');

        $validator
            ->scalar('bath')
            ->maxLength('bath', 255)
            ->requirePresence('bath', 'create')
            ->notEmptyString('bath');

        $validator
            ->scalar('land_area')
            ->maxLength('land_area', 255)
            ->requirePresence('land_area', 'create')
            ->notEmptyString('land_area');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        return $validator;
    }
}
