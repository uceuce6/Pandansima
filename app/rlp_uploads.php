<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rlp_uploads extends Model
{
    protected $table = "rlp_uploads";

    protected $fillable = ['rlp_surat_tugas_id', 'file_name','file_path','file_data'];
}
