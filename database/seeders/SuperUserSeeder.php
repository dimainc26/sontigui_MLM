<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class SuperUserSeeder extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'name'    => 'Zanre Mahamadi',
                'email'   => 'dimazanre@gmail.com',
                'password' => password_hash('mlmsontigui', PASSWORD_BCRYPT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Ajoutez d'autres utilisateurs ici
        ];

        $this->table('users')->insert($data)->save();
    }
}
