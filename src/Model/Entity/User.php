<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenDate $birthday
 * @property int $gender
 * @property int $nationality_id
 * @property string $description
 * @property int $department_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $group_id
 *
 * @property \App\Model\Entity\Nationality $nationality
 * @property \App\Model\Entity\Department $department
 */
class User extends Entity
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
        'username' => true,
        'email' => true,
        'password' => true,
        'birthday' => true,
        'gender' => true,
        'nationality_id' => true,
        'description' => true,
        'department_id' => true,
        'created' => true,
        'modified' => true,
        'group_id' => true,
        'nationality' => true,
        'department' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
