<?php

return [
    'timezone' => 'Asia/Jakarta',

    'ramadan' => [
        'title' => 'Awal Puasa Ramadhan',
        'icon'  => '🌙',
        'default' => '2026-02-19',
        'presets' => [
            ['value' => '2026-02-18', 'text' => 'Preset: 18 Feb 2026'],
            ['value' => '2026-02-19', 'text' => 'Preset: 19 Feb 2026'],
        ],
        'note' => 'Catatan: tanggal Updated.',
        'noteClass' => 'text-amber-200/90',
    ],

    'eid' => [
        'title' => 'Hari Raya Idul Fitri',
        'icon'  => '🎉',
        'default' => '2026-03-20',
        'presets' => [
            ['value' => '2026-03-20', 'text' => 'Preset: 20 Mar 2026'],
            ['value' => '2026-03-21', 'text' => 'Preset: 21 Mar 2026'],
            ['value' => '2026-03-22', 'text' => 'Preset: 22 Mar 2026'],
        ],
        'note' => 'Info: tanggal Updated.',
        'noteClass' => 'text-emerald-200/90',
    ],
];