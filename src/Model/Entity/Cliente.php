<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $idclientes
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $direccion
 * @property string|null $edad
 */
class Cliente extends Entity
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
        'nombres' => true,
        'apellidos' => true,
        'direccion' => true,
        'edad' => true
    ];
}
