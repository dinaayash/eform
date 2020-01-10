@extends('layout.main')


@section('title', 'Tipe Perubahan')

@section('content') 
@section('subtitle', 'Data Tipe Perubahan')

<section class="content">
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">
                    <div class="box box-primary bayangan">
                    <div class="box-body">
                        
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="label-control col-md-2">Tipe Perubahan</label>			
                            <div class="col-md-4"> <input required type="text" class="form-control"  name="tipe" value="" placeholder=""></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">PIC Perubahan</label>			
                            <div class="col-md-4">
                                <table width="100%">
                                    <tr>
                                        <td width="100%">
                                            <input name="namapelaksana" id="namapelaksana" value="" type="text" class="form-control" readonly>
                                            <input type="email" class="form-control" id="emailpelaksana" name="emailpelaksana" style="display:none">
                                        </td>
                                        <td><button class="btn btn-default" type="button" data-toggle="modal" data-target="#modalpelaksana" style="background-color:#4B515D; color:white"><i class="fa fa-search">  </i>&nbsp; Cari</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                         <div class="form-group">
                                                         <label class="label-control col-md-2"></label>
                            <div class="col-md-4"> <button type="submit" class="btn btn-primary" name="simpan"><b>Simpan</b></button></div>
                                                     </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
      </section>
  <!-- /.content-wrapper -->

<!-- Modal -->
  <div class="modal fade" id="modalpelaksana" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#0099CC; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Data Pegawai</b></h4>
        </div>
        <div class="modal-body">
                <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover table-striped">
                    <thead style="background-color:#bbdefb; color:black;">
                        <tr>
                          <th width="5px" style="text-align:center;">No</th>
                          <th width="100px" style="text-align:center;">NIPG</th>
                          <th width="200px">Nama</th>
                          <th width="400px">Jabatan</th>
                          <th width="10px" style="text-align:center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                                                  
                        <tr>
                          <td style="text-align:center;">1</td>
                          <td style="text-align:center;">0010832546</td>
                          <td>Agus Cucu</td>
                          <td>Jr. Analyst, ICT Planning and Strategy</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Agus Cucu" data-emailpelaksana="Agus.Cucu@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">2</td>
                          <td style="text-align:center;">0005832160</td>
                          <td>Asri Mumpuni</td>
                          <td>Sr. Analyst, ICT Planning and Strategy</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Asri Mumpuni" data-emailpelaksana="Asri.Mumpuni@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">3</td>
                          <td style="text-align:center;">0005802083</td>
                          <td>Cecep Yudi Subiantoro</td>
                          <td>Department Head, Infrastructure Management</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Cecep Yudi Subiantoro" data-emailpelaksana="Cecep.Subiantoro@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">4</td>
                          <td style="text-align:center;">Secretary</td>
                          <td>Dela Aprillya</td>
                          <td>Secretary to Information Communication Technology</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Dela Aprillya" data-emailpelaksana="Dela.Aprillya@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">5</td>
                          <td style="text-align:center;">0088631149</td>
                          <td>Djoko Suripto</td>
                          <td>Sr. Advisor, ICT Planning and Strategy</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Djoko Suripto" data-emailpelaksana="djoko.suripto@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">6</td>
                          <td style="text-align:center;">0003821916</td>
                          <td>Elfan Triawan</td>
                          <td>Advisor, ICT Planning and Strategy</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Elfan Triawan" data-emailpelaksana="elfan.triawan@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">7</td>
                          <td style="text-align:center;">0010852569</td>
                          <td>Firdah Tia Yuliana</td>
                          <td>Jr. Analyst, Management Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Firdah Tia Yuliana" data-emailpelaksana="Firdah.Yuliana@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">8</td>
                          <td style="text-align:center;">0005812091</td>
                          <td>Hendi Novianto</td>
                          <td>Analyst, Data Center</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Hendi Novianto" data-emailpelaksana="Hendi.Novianto@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">9</td>
                          <td style="text-align:center;">0001761827</td>
                          <td>Irpan</td>
                          <td>Department Head, Management Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Irpan" data-emailpelaksana="irpan@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">10</td>
                          <td style="text-align:center;">0001761828</td>
                          <td>M. Andi Irawan</td>
                          <td>Sr. Advisor, ICT Planning and Strategy</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="M. Andi Irawan" data-emailpelaksana="andi.irawan@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">11</td>
                          <td style="text-align:center;">0010852420</td>
                          <td>Miftakh Arkhan Zein Taptozani</td>
                          <td>Jr. Analyst, Management Information System</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Miftakh Arkhan Zein Taptozani" data-emailpelaksana="Miftakh.Zein@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">12</td>
                          <td style="text-align:center;">0005812088</td>
                          <td>Moh. Nur Alim</td>
                          <td>Analyst, Data Communication</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Moh. Nur Alim" data-emailpelaksana="Nur.Alim@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">13</td>
                          <td style="text-align:center;">-</td>
                          <td>Mohammad Iqbal</td>
                          <td>Tenaga Jasa Profesi Datamart MIS</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Mohammad Iqbal" data-emailpelaksana="mohamad.iqbal@pgascom.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">14</td>
                          <td style="text-align:center;">0008752376</td>
                          <td>Muhammad Irwan Santoso</td>
                          <td>Group Head, Information Communication Technology</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Muhammad Irwan Santoso" data-emailpelaksana="irwan.santoso@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">15</td>
                          <td style="text-align:center;">Outsource</td>
                          <td>Muhammad Ramdhani</td>
                          <td>EOS WAN</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Muhammad Ramdhani" data-emailpelaksana="Muhamad.Ramdhani@pgascom.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">16</td>
                          <td style="text-align:center;">Outsource</td>
                          <td>NOC Data Center</td>
                          <td>NOC Data Center</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="NOC Data Center" data-emailpelaksana="noc.dc@pgascom.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">17</td>
                          <td style="text-align:center;">0010882614</td>
                          <td>Parlin Simatupang</td>
                          <td>Jr. Analyst, ICT Representatives Medan</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Parlin Simatupang" data-emailpelaksana="Parlin.Simatupang@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">18</td>
                          <td style="text-align:center;">0010862583</td>
                          <td>Rahmi Nuzuliyah</td>
                          <td>Jr. Analyst, Business Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Rahmi Nuzuliyah" data-emailpelaksana="Rahmi.Nuzuliyah@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">19</td>
                          <td style="text-align:center;">0006792171</td>
                          <td>Retnoningsih</td>
                          <td>Sr. Analyst, Management Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Retnoningsih" data-emailpelaksana="Retnoningsih@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">20</td>
                          <td style="text-align:center;">0005832109</td>
                          <td>Reza Yusandi</td>
                          <td>Sr. Analyst, Business Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Reza Yusandi" data-emailpelaksana="reza.yusandi@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">21</td>
                          <td style="text-align:center;">0010862446</td>
                          <td>Riandy Arizon</td>
                          <td>Jr. Analyst, Data Communication</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Riandy Arizon" data-emailpelaksana="riandy.arizon@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">22</td>
                          <td style="text-align:center;">0003771888</td>
                          <td>Riko Teguh Setio Wibisono</td>
                          <td>Analyst, ICT Representatives Surabaya</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Riko Teguh Setio Wibisono" data-emailpelaksana="riko.wibisono@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">23</td>
                          <td style="text-align:center;">0007852328</td>
                          <td>Rini Sukmana</td>
                          <td>Jr. Analyst, Management Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Rini Sukmana" data-emailpelaksana="Rini.Sukmana@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">24</td>
                          <td style="text-align:center;">PGASCOM2</td>
                          <td>Sigit Sutrisno</td>
                          <td>Staff Profesional Developer</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Sigit Sutrisno" data-emailpelaksana="sigit.sutrisno@pgascom.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">25</td>
                          <td style="text-align:center;">0004781928</td>
                          <td>Subandi</td>
                          <td>Sr. Analyst, Data Center</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Subandi" data-emailpelaksana="Subandi@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">26</td>
                          <td style="text-align:center;">0089701354</td>
                          <td>Tety Aryanti</td>
                          <td>Sr. Analyst, Business Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Tety Aryanti" data-emailpelaksana="tety.aryanti@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">27</td>
                          <td style="text-align:center;">0005822096</td>
                          <td>Yatmoko Nugroho</td>
                          <td>Department Head, Management Information System</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Yatmoko Nugroho" data-emailpelaksana="yatmoko.nugroho@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                                                  
                        <tr>
                          <td style="text-align:center;">28</td>
                          <td style="text-align:center;">0005792065</td>
                          <td>Zulfikar Ali Imran</td>
                          <td>Department Head, Business Solutions Development</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih28" data-namapelaksana="Zulfikar Ali Imran" data-emailpelaksana="zulfikar.imran@pgn.co.id">Pilih</button>
                          </td>
                        </tr>
                        </tbody>
                </table>
                </div>    
        </div>
      </div>
    </div>
  </div>  </div>

@endsection