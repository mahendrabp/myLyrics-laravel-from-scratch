<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Band::insert([
            [
                'id' => 1,
                'poster' => 'poster/armada.jpg',
                'name' => 'Armada',
                'slug' => 'armada',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 2,
                'poster' => 'poster/BBB.jpg',
                'name' => 'BBB',
                'slug' => 'bbb',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 3,
                'poster' => 'poster/cebe.jpg',
                'name' => 'Cherry Belle',
                'slug' => 'cherry-beller',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 4,
                'poster' => 'poster/dmasiv.jpg',
                'name' => "D'Masiv",
                'slug' => 'dmasiv',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 5,
                'poster' => 'poster/erk.jpg',
                'name' => 'Efek Rumah Kaca',
                'slug' => 'efek-rumah-kaca',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 6,
                'poster' => 'poster/five-minute.jpg',
                'name' => 'Five Minutes',
                'slug' => 'five-minutes',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 7,
                'poster' => 'poster/headers-geisha-new1-5c00b51b89821.png',
                'name' => 'Geisha',
                'slug' => 'geisha',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 8,
                'poster' => 'poster/b6fpNVB7n36HH5n1NROwL1tGLeeE9xzLJBLwOpvW.jpeg',
                'name' => 'HiVi!',
                'slug' => 'hivi',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 9,
                'poster' => 'poster/JKT48_Vector_Logo.png',
                'name' => 'JKT48',
                'slug' => 'jkt48',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 10,
                'poster' => 'poster/kangen-band.jpg',
                'name' => 'Kangen Band',
                'slug' => 'kangen-band',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 11,
                'poster' => 'poster/letto.jpg',
                'name' => 'Letto',
                'slug' => 'letto',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 12,
                'poster' => 'poster/mocca.jpg',
                'name' => 'Mocca',
                'slug' => 'mocca',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 13,
                'poster' => 'poster/nidji.jpg',
                'name' => 'Nidji',
                'slug' => 'nidji',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 14,
                'poster' => 'poster/projectpop.jpg',
                'name' => 'Project Pop',
                'slug' => 'project-pop',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 15,
                'poster' => 'poster/revublik.jpg',
                'name' => 'Revublik',
                'slug' => 'revublik',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 16,
                'poster' => 'poster/st12.jpg',
                'name' => 'ST12',
                'slug' => 'st12',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 17,
                'poster' => 'poster/ten2five.png',
                'name' => 'Ten 2 Five',
                'slug' => 't2f',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 18,
                'poster' => 'poster/Poster_20161027b10_ungu.jpg',
                'name' => 'Ungu',
                'slug' => 'ungu',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 19,
                'poster' => 'poster/vagetoz.jpg',
                'name' => 'Vagetoz',
                'slug' => 'vagetoz',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id' => 20,
                'poster' => 'poster/ynn.jpg',
                'name' => 'Yovie & Nuno',
                'slug' => 'ynn',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

        ]);
    }
}