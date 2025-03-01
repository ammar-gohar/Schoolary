<?php

namespace Modules\Roles\Livewire\Pages;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RolesIndex extends Component
{

    use WithPagination;

    public function deleteRole(int $id)
    {
        $role = Role::findOrFail($id);
        if($role->undeleteble){
            return;
        } else {
            $role->delete();
        }
    }

    public function render()
    {
        return view('roles::livewire.pages.roles-index',[
            'roles' => Role::with(['permissions', 'users'])->paginate(15),
        ]);
    }
}
