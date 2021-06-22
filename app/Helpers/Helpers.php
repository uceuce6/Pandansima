<?php
    use Illuminate\Support\Facades\DB;
    // find data to other tables
    function data_table($table,$data,$field,$id){
        

        if($id=='0' || $id=='') {
            return '-';
        } else {
            $show = DB::table($table)
            // ->select($data)
            ->where($field, '=' ,$id)
            ->first()->$data;

            return $show;
        }
        
    }
?>