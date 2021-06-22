<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ANGGARAN DAN PENGAWASAN</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>UNIT KERJA</th>
                                <th>RENCANA</th>
                                <th>RENCANA DANA</th>
                                <th>RENCANA HP</th>
                                <th>REALISASI</th>
                                <th>REALISASI DANA</th>
                                <th>REALISASI HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $pkpt=0; $pkpt_dana=0; $pkpt_hp=0;
                                $st=0; $st_dana=0; $st_hp=0;
                            @endphp
                            @foreach ($daftar as $number => $b)
                            <tr>
                                <td>{{ (++$number) }}</td>
                                <td><a href='{{ url("kf1_pwk/{$b->md_unit_kerja_id}") }}'>{{ $b->md_unit_kerja }}</a></td>
                                <td align="right">{{ $b->pkpt }}</td>
                                <td align="right">{{ number_format($b->dana,0) }}</td>
                                <td align="right">{{ number_format($b->hp,0) }}</td>
                                <td align="right">{{ number_format($b->st,0) }}</td>
                                <td align="right">{{ number_format($b->r_dana,0) }}</td>
                                <td align="right">{{ number_format($b->r_hp) }}</td>
                            </tr>
                            @php
                              $pkpt = $pkpt + $b->pkpt;   
                              $pkpt_dana = $pkpt_dana + $b->dana;   
                              $pkpt_hp = $pkpt_hp + $b->hp;   
                              $st = $st + $b->st;   
                              $st_dana = $st_dana + $b->r_dana;   
                              $st_hp = $st_hp + $b->r_hp;   
                            @endphp                                    
                            @endforeach                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th style="text-align:center">Total</th>
                                <th style="text-align:right">{{ number_format($pkpt,0) }}</th>
                                <th style="text-align:right">{{ number_format($pkpt_dana,0) }}</th>
                                <th style="text-align:right">{{ number_format($pkpt_hp,0) }}</th>
                                <th style="text-align:right">{{ number_format($st,0) }}</th>
                                <th style="text-align:right">{{ number_format($st_dana,0) }}</th>
                                <th style="text-align:right">{{ number_format($st_hp,0) }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->