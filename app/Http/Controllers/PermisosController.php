<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermisosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            ]);

            $Permission = new Permission;
            $Permission->name = $request->name;

            $Permission->save();
            return redirect()->route('roles.create')
            ->with('success','Permission has been created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        ]);

        $Permission = Permission::find($id);
        $Permission->name = $request->name;
        $Permission->save();
        return redirect()->route('roles.create')
        ->with('success','Permission Has Been updated successfully');
    }

    public function destroy(Permission $Permission)
    {
        $Permission->delete();
        return redirect()->route('roles.create')
        ->with('success','Permission has been deleted successfully');
    }

}
