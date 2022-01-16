<?php

use Illuminate\Database\Seeder;

class KlasifikasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('klasifikasi')->insert(array(
            ['nama' => 'Jaringan/Internet',
             'kode' => 'A'
            ],
            ['nama' => 'Zoom',
             'kode' => 'B'
            ],
            ['nama' => 'Aplikasi',
             'kode' => 'C'
            ],
            ['nama' => 'E-mail',
             'kode' => 'D'
            ],
            ['nama' => 'Pinjam Alat',
             'kode' => 'E'
            ],
            ['nama' => 'Pinjam Tempat',
             'kode' => 'F'
            ],
            ['nama' => 'Penawaran',
             'kode' => 'G'
            ],
            ['nama' => 'Website/Domain',
             'kode' => 'H'
            ],
            ['nama' => 'Smart City',
             'kode' => 'I'
            ],
            ['nama' => 'Survey PKL',
             'kode' => 'J'
            ],
            ['nama' => 'Persandian',
             'kode' => 'K'
            ],
            ['nama' => 'SPBE-LPSE',
             'kode' => 'L'
            ],
            ['nama' => 'Tagihan',
             'kode' => 'M'
            ],
            ['nama' => 'HUT',
             'kode' => 'N'
            ],
            ['nama' => 'Anggaran',
             'kode' => 'O'
            ]
        ));
    }
}
