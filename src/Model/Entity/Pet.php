<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pet Entity
 *
 * @property int $id
 * @property int $id_client
 * @property int $id_species
 * @property string $name
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $gender
 * @property int $weight
 * @property string $comment
 * @property bool $aggressive
 * @property bool $deceased
 * @property string $cause_deceased
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Vaccine[] $vaccines
 */
class Pet extends Entity
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
        'id_client' => true,
        'id_species' => true,
        'name' => true,
        'birthdate' => true,
        'gender' => true,
        'weight' => true,
        'comment' => true,
        'aggressive' => true,
        'deceased' => true,
        'cause_deceased' => true,
        'created' => true,
        'modified' => true,
        'vaccines' => true
    ];
}