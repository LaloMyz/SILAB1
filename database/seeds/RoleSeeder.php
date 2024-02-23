<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role1 = Role::create(['name'=> 'Admin']);
        $role2 = Role::create(['name'=> 'Alumno']);
        $role3 = Role::create(['name'=> 'Personal']);
        $role4 = Role::create(['name'=> 'Invitado']);

        //Para tener coherencia, al NOMBRE del permiso le podemos llamar igual que la ruta que va proteger.
        Permission::create(['name'=> 'Prestamos'])->syncRoles($role1); //Permiso para acceder al panel prestamo
        Permission::create(['name'=> 'Prestamos.create'])->syncRoles($role1); //Permiso para acceder al panel prestamo
        Permission::create(['name'=> 'Prestamos.edit'])->syncRoles($role1); 

        Permission::create(['name'=> 'Tramite'])->syncRoles($role2); //Permiso para acceder al panel tramite
        Permission::create(['name'=> 'Tramite.create'])->syncRoles($role2); //Permiso para acceder al panel tramite
        Permission::create(['name'=> 'prestamosTerminados'])->syncRoles($role2); //Permiso para acceder al panel tramite
        Permission::create(['name'=> 'tramitesTerminados'])->syncRoles($role2); //Permiso para acceder al panel tramite


        Permission::create(['name'=> 'Liberacion'])->syncRoles($role3,$role1); // permiso para acceder al panel liberacion
        Permission::create(['name'=> 'Liberacion.create'])->syncRoles($role3,$role1); // permiso para acceder al panel liberacion
        Permission::create(['name'=> 'comprobantesCancelados'])->syncRoles($role3,$role1); // permiso para acceder al panel liberacion


        Permission::create(['name'=> 'Articulos_mayores'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_mayores.create'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_mayores.edit'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_mayores.store'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_mayores.destroy'])->syncRoles($role1);


        Permission::create(['name'=> 'Articulos_menores'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_menores.create'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_menores.edit'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_menores.store'])->syncRoles($role1);
        Permission::create(['name'=> 'Articulos_menores.destroy'])->syncRoles($role1);


    }
}
