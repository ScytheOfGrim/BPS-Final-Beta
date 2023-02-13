<?php

namespace App\constants;

class Permissions
{
    // Skema
    // const CREATE_
    // const READ_
    // const UPDATE_
    // const DELETE_
    const CREATE_USER = 'create_user';
    const READ_USER = 'read_user';
    const UPDATE_USER = 'update_user';
    const DELETE_USER = 'delete_user';
    const CREATE_MITIGASI = 'create_mitigasi';
    const READ_MITIGASI = 'read_mitigasi';
    const UPDATE_MITIGASI = 'update_mitigasi';
    const DELETE_MITIGASI = 'delete_mitigasi';
    const UPDATE_ANSWER = 'update_answer';
    const UPDATE_VERIFIKASI = 'update_verifikasi';
    const CREATE_ROLE = 'create_role';
    const READ_ROLE = 'read_role';
    const UPDATE_ROLE = 'update_role';
    const DELETE_ROLE = 'delete_role';

    public static function all()
    {
        return collect([
            self::CREATE_USER => 'Membuat user',
            self::READ_USER => 'Melihat data user',
            self::UPDATE_USER => 'Update data user',
            self::DELETE_USER => 'Menghapus user',
            self::CREATE_MITIGASI => 'Membuat Mitigasi',
            self::READ_MITIGASI => 'Membaca data mitigasi',
            self::UPDATE_MITIGASI => 'Update data mitigasi',
            self::DELETE_MITIGASI => 'Menghapus data mitigasi',
            self::UPDATE_ANSWER => 'Menjawab laporan masuk',
            self::UPDATE_VERIFIKASI => 'Verifikasi data mitigasi',
            self::CREATE_ROLE => 'Membuat role',
            self::READ_MITIGASI => 'Membaca data role',
            self::UPDATE_ROLE => 'Update role',
            self::DELETE_ROLE => 'Delete role',
        ]);
    }
}