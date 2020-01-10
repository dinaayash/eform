<?php
date_default_timezone_set("Asia/Bangkok");
?>

@extends('layout.main')

@section('title', 'TesDashboard')

@section('content')	  
<section class="content">
        <div class="small-box bg-primary">
                <div class="inner">
                  <h2 id="date_time"><b></b></h2>
                  <h2 id="jam" style="margin-top:-10px"></h2>
                </div>
                <div class="icon">
                    <img src="template/dist/img/logo-pgn-white.png" width="50px" style="float:right; margin-top:25px;">  
                </div>
              </div>
        <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>
            
                        <p><b>Form Hak Akses Organik</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document"></i>
                    </div>
                    <a href="/organik" class="small-box-footer">Lihat Tabel<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                    <div class="inner">
                        <h3></h3>
            
                        <p><b>Form Hak Akses Non Organik</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document"></i>
                    </div>
                    <a href="/non-organik" class="small-box-footer">Lihat Tabel<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3></h3>
            
                        <p><b>Form Preventive</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document"></i>
                    </div>
                    <a href="/preventive" class="small-box-footer">Lihat Tabel<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                    <div class="inner">
                        <h3></h3>
            
                        <p><b>Form Perubahan</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document"></i>
                    </div>
                    <a href="/perubahan" class="small-box-footer">Lihat Tabel<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            
          <div class="row">
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title"><b><i class="fa fa-bar-chart-o"></i> Grafik Permohonan Hak Akses Tahun 2019</b>
                        </h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-8">
                          <div class="chart">
                            <canvas id="myChart1"><img src="template/dist/img/chart.png" width="683"  height="341" style="display: block;"></canvas>    
                          </div>
                        </div>
                        <div class="col-md-4">
                            <table class="table table-bordered table-striped">
                            <thead style="background-color:#bbdefb; color:black;">
                                <tr>
                                    <th style="text-align:center">No</th>
                                    <th>Nama Layanan</th>
                                    <th style="text-align:center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center">1</td>
                                    <td>Office Automation</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">2</td>
                                    <td>Fileshare</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">3</td>
                                    <td>VPN</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">4</td>
                                    <td>Aplikasi Oracle</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">5</td>
                                    <td>Aplikasi Non Oracle</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">6</td>
                                    <td>New Account (O)</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">7</td>
                                    <td>New Account (NO)</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">8</td>
                                    <td>Communication</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">9</td>
                                    <td>Mail Group</td>
                                    <td style="text-align:center"></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">10</td>
                                    <td>Extend Account (NO)</td>
                                    <td style="text-align:center"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6" style="display:none">
                <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title"><b style="color:#007E33;"><i class="fa fa-pie-chart"></i> Grafik Preventive Per Area</b></h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="chart">
                          <canvas id="myChart2"></canvas>    
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
            </div>
        </div>
</section>
@endsection

@section('js')
    <script>

   function date_time(id)
{
date = new Date;
year = date.getFullYear();
month = date.getMonth();
months = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'October', 'November', 'December');
d = date.getDate();
day = date.getDay();
days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
h = date.getHours();
if(h<10)
{
h = "0"+h;
}
m = date.getMinutes();
if(m<10)
{
m = "0"+m;
}
s = date.getSeconds();
if(s<10)
{
s = "0"+s;
}
result = ''+days[day]+','+' '+d+' '+months[month]+' '+year;
document.getElementById(id).innerHTML = result;
document.getElementById('jam').innerHTML = h+':'+m+':'+s;
setTimeout('date_time("'+id+'");','1000');
return true;
}
</script>

<span id="date_time"></span><br>
<span id="jam"></span>
<script type="text/javascript">window.onload = date_time('date_time');
    //BAR CHART
            var ctx = document.getElementById("myChart1");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Office Automation", "Fileshare", "VPN", "Aplikasi Oracle", "Aplikasi None Oracle", "New Account (O)", "New Account (NO)", "Communication", "Mail Group", "Extend Account (NO)"],
                    datasets: [{
                            label: 'Permohonan Hak Akses',
                            data: [15, 357, 820, 352, 169, 41, 290, 35, 26, 766],
                            backgroundColor: [
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)',
                                'rgba(3, 169, 244, 0.3)'
                            ],
                            borderColor: [
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC',
                                '#0099CC'
                                
                            ],
                            borderWidth: 3
                            
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
            //PIE CHART
            var ctx = document.getElementById("myChart2");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["REPS 1", "REPS 2", "REPS 3", "KETAPANG", "MANHATTAN"],
                    datasets: [{
                            label: 'Data Preventive',
                            data: [70, 100, 115, 90, 40],
                            backgroundColor: [
                                '#ff4444',
                                '#ffbb33',
                                '#00C851',
                                '#33b5e5',
                                '#aa66cc'
                            ],
                            borderColor: [
                                'white',
                                'white',
                                'white',
                                'white',
                                'white'
                                
                            ],
                            borderWidth: 3
                            
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
 </script>
@endsection
    

  