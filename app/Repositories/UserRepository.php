<?php

namespace App\Repositories;

use App\Core\BaseRepository;
use App\Models\User;
use Nette\Schema\Helpers;

class UserRepository extends BaseRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * list all users
     *
     * @param array $params
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]|mixed[]
     */
    public function listUsers($params)
    {
        return $this->get($params, ['groups'], function ($q) use ($params) {
            $q->ofGroups(Helpers::commasToArray($params['group_id'] ?? ''));
            $q->ofName($params['name'] ?? '');
            $q->ofEmail($params['email'] ?? '');

            return $q;
        });
    }

    /**
     * delete a user by id
     *
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id)
    {
        $ids = explode(',', $id);

        foreach ($ids as $id) {
            /** @var User $User */
            $User = $this->model->find($id);

            if (!$User) {
                return false;
            };

            $User->groups()->detach();
            $User->delete();
        }

        return true;
    }
}