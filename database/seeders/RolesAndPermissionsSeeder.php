use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

public function run()
{
    // Seed users table FIRST (if not already present)
    DB::table('users')->insert([
        [
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Default password
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 2,
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ],
    ]);

    // Now seed user_roles table
    DB::table('user_roles')->insert([
        ['UserID' => 1, 'RoleName' => 'admin', 'Description' => 'Administrator'],
        ['UserID' => 2, 'RoleName' => 'user', 'Description' => 'Regular User'],
    ]);

    // Now seed role_permissions table
    DB::table('role_permissions')->insert([
        ['RoleID' => 1, 'Description' => 'Create'],
        ['RoleID' => 1, 'Description' => 'Retrieve'],
        ['RoleID' => 1, 'Description' => 'Update'],
        ['RoleID' => 1, 'Description' => 'Delete'],
        ['RoleID' => 2, 'Description' => 'Create'],
        ['RoleID' => 2, 'Description' => 'Retrieve'],
    ]);
}
