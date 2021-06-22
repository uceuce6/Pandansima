<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = "rlp_upload";

    protected $fillable = ['rlp_surat_tugas_id', 'file_name'];
}

?>
