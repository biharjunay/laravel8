<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                'nama'        => 'WisataGrobogan.id',
                'alamat'      => 'Jalan Gajah Mada Purwodadi',
                'website'     => 'www.wisatagrobogan.id',
                'wa'          => '08111',
                'keterangan'  => null
            ]
        );
        DB::table('kategoris')->insert(
            array(
                [
                    'nama'          => 'Wisata Pendidikan',
                    'keterangan'    => null
                ],
                [
                    'nama'          => 'Wisata Alam',
                    'keterangan'    => null
                ],
                [
                    'nama'          => 'Wisata Religi',
                    'keterangan'    => null
                ],
                [
                    'nama'          => 'Wisata Kuliner',
                    'keterangan'    => null
                ],
            )
        );
        DB::table('wisatas')->insert(
            array(
                [
                    'kategori_id' => 1,
                    'nama'        => 'Wisata Pendidikan di Purwodadi 1',
                    'gambar'      => 'gambar1.jpg',
                    'deskripsi'   => 'deskripsi wisata 11'
                ],
                [
                    'kategori_id' => 1,
                    'nama'        => 'Wisata Pendidikan di Purwodadi 2',
                    'gambar'      => 'gambar1.jpg',
                    'deskripsi'   => 'deskripsi wisata 11 2'
                ],
                [
                    'kategori_id' => 2,
                    'nama'        => 'Wisata Pendidikan di Purwodadi 2',
                    'gambar'      => 'gambar1.jpg',
                    'deskripsi'   => 'deskripsi wisata 11 2'
                ],
                [
                    'kategori_id' => 2,
                    'nama'        => 'Wisata Pendidikan di Purwodadi 23',
                    'gambar'      => 'gambar1.jpg',
                    'deskripsi'   => 'deskripsi wisata 11 23'
                ]
            )
        );
        DB::table('users')->insert(
            array(
                [
                    'name' => 'Administrator Wisgroid',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt(12345678),
                    'email_verified_at'=> date('Y-m-d H:m:s'),
                    'updated_at'=> date('Y-m-d H:m:s')
                ]
            )
        );
    }
}
