<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserSearch extends Component
{
    public $search, $isEmpty = '';

    public $selected_user = null;

    public function render()
    {
        if (trim($this->search))
        {
            $users = User::search(trim($this->search))
                ->take(5)
                ->get();

            $this->isEmpty = '';
        }
        else
        {
            $users = [];
            $this->isEmpty = '';
        }

        return view('livewire.user-search', [
            'users' => $users,
        ]);
    }

    /**
     * function clearSearchInput
     *
     * @return void
     */
    public function clearSearchInput()
    {
        $this->search   = '';
        $this->isEmpty  = '';
    }

    /**
     * function actionTest
     */
    public function actionTest($v = null)
    {
        dd($v);
    }

    /**
     * function selectUser
     */
    public function selectUser($user = null)
    {
        if(!$user || !is_array($user))
        {
            return;
        }

        $this->selected_user = $user;
    }
}
