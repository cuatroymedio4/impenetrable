<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Integrante Entity
 *
 * @property int $idintegrantes
 * @property string $firstname
 * @property string $lastname
 * @property string $role
 * @property string $formacion
 * @property string|null $cargo
 * @property string|null $photo_dir
 * @property string|null $photo
 */
class Integrante extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'role' => true,
        'formacion' => true,
        'cargo' => true,
        'photo_dir' => true,
        'photo' => true,
    ];
}
