<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description', 'guard_name'];

    /**
     * the rules of the Group for validation before persisting
     *
     * @var array
     */
    public static function getRules($id = null)
    {
        $rules = [
            'name' => 'required|string|min:4|max:255|unique:permissions,name,' . $id,
            'display_name' => 'required|string|min:4|max:255|unique:permissions,display_name,' . $id,
            'description' => 'required|string|min:4',
            'guard_name' => 'required|string|min:4|max:255|unique:permissions,guard_name,' . $id,
        ];
        return $rules;
    }
}
