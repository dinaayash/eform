@extends('layout.main')


@section('title', 'PAA')

@section('content') 
@section('subtitle', 'Form Pemilik dan Admin Aplikasi')

<style>
            .lobster { 
                font-family: Lobster; 
            }
            
            .fontsaya{   
                font-family: 'Fredoka One', cursive;
            }
            .bayangan{
                box-shadow: 0 0 10px #aaa;
            }
            .bayanganbiru{
                box-shadow: 0 0 10px #33b5e5;
            }
            .link{
                text-decoration: none;
            }
        </style>

<section class="content">
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">
                    <div class="box box-primary bayangan">
                    <div class="box-body">
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="label-control col-md-2">Nama Aplikasi</label>	
                            <div class="col-md-4">
                                <select name="idaplikasi" class="form-control">
                                    <option value="" ></option>
                                    <option value="1" >Hyperion</option>
                                    <option value="2" >GASPEX</option>
                                    <option value="3" >Oracle HRMS</option>
                                    <option value="4" >Oracle - General Ledger</option>
                                    <option value="5" >Oracle - Fixed Asset</option>
                                    <option value="6" >Business Intelligence App</option>
                                    <option value="7" >Oracle - Purchasing</option>
                                    <option value="8" >Oracle - Inventory</option>
                                    <option value="9" >E-Auction</option>
                                    <option value="10" >Oracle - Account Payables</option>
                                    <option value="11" >Oracle - Account Receivables</option>
                                    <option value="12" >Popay</option>
                                    <option value="13" >Oracle - Cash Management</option>
                                    <option value="14" >Oracle - AR EBS</option>
                                    <option value="16" >Oracle - PJC</option>
                                    <option value="17" >Enterprise Asset Management</option>
                                    <option value="18" >CRM Siebel</option>
                                    <option value="20" >Oracle - Arus Kas</option>
                                    <option value="21" >Oracle - Cash Management  EBS</option>
                                    <option value="22" >Oracle - General Ledger Budget</option>
                                    <option value="23" >AMI / Payment Engine</option>
                                    <option value="24" >Simari</option>
                                    <option value="25" >On SPEED</option>
                                    <option value="26" >E-SMS</option>
                                    <option value="27" >Eprocurement </option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">pemilik</label>			
                            <div class="col-md-4"> <input type="text" class="form-control"  name="pemilik" value="" placeholder="Divisi pemilik Aplikasi"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Penanggung Jawab</label>			
                            <div class="col-md-4"> 
                                <input type="text" class="form-control"  name="PenanggungJawab" value="" placeholder="Nama Penanggung Jawab">
                                <input style="margin-top:5px;" type="email" class="form-control" name="EmailPenanggungJawab" value="" placeholder="Email Penanggung Jawab">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Admin Aplikasi</label>			
                            <div class="col-md-4"> 
                                <input ype="text" class="form-control"  name="adminaplikasi" value="" placeholder="Nama Admin Aplikasi">
                                <input style="margin-top:5px;" type="email" class="form-control"  name="emailadminaplikasi" value="" placeholder="Email Admin Aplikasi">
                            </div>
                        </div>
                        
                         <div class="form-group">
                                                          <label class="label-control col-md-2"></label>
                            <div class="col-md-4"> <button type="submit" class="btn btn-primary" name="simpan"><b>Save</b></button></div>
                                                     </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
      </section>
  <!-- /.content-wrapper -->  </div>

@endsection