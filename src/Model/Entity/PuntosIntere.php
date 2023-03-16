<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PuntosIntere Entity
 *
 * @property int $idpuntos_interes
 * @property int $localidad
 * @property int $id_punto
 * @property string|null $description
 * @property string|null $resumen
 * @property string|null $path
 * @property string $name
 */
class PuntosIntere extends Entity
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
        'localidad' => true,
        'id_punto' => true,
        'description' => true,
        'resumen' => true,
        'path' => true,
        'name' => true,
    ];
}
