@extends('layout.main')


@section('title', 'Organik')

@section('content') 
@section('subtitle', 'Informasi')

<style>
.link{
    text-decoration: none;
}
.link:hover{
    text-decoration: none;
}
.dark{
    background-color: #37474F;
    color: white;
}
.dark:hover{
    background-color: #263238;
    color: white;
}
</style>

 <section class="content">
     
                        <form role="form">
                              <div class="alert alert-primary alert-dismissible bayangan" role="alert">
                                      <label>Pernyataan Tanggung Jawab Pengamanan Internal :</label>
                                        <ol style="text-align: justify;">
                                            <li>
                                                Saya akan menggunakan hak akses layanan TI tersebut secara terbatas hanya untuk tujuan dan kepentingan bisnis Perusahaan serta patuh pada kebijakan dan prosedur pengamanan TI Perusahaan.
                                            </li>
                                            <li>
                                                Saya menyatakan setuju untuk bertanggung jawab dalam penggunaan hak akses layanan TI dan menjaga kerahasiaan dan pengamanannya, dengan tidak akan melakukan tindakan, baik dengan sengaja atau tidak sengaja, langsung atau tidak langsung, sebagian atau seluruhnya, melakukan atau membiarkan terjadinya penyalahgunaan hak akses.
                                            </li>
                                            <li>
                                                Dengan memperhatikan ketentuan perundang-undangan yang berlaku dan peraturan Perusahaan, saya menyadari bahwa setiap pelanggaran hak akses layanan TI yang saya lakukan dapat mengakibatkan diberikannya sanksi disiplin kepada saya dan/atau pemutusan hubungan kerja.
                                            </li> 
                                        </ol>
                              </div>
                                    
                                    <div class="alert alert-primary alert-dismissible bayangan" role="alert" style="margin-bottom:-70px;">
                                        <label>Pernyataan Tanggung Jawab Pengamanan Eksternal :</label>
                                        <ol style="text-align: justify;">
                                            <li >
                                                Kami setuju dan mengikatkan diri untuk menggunakan aset TI Perusahaan secara terbatas hanya untuk tujuan pelaksanaan pekerjaan/tugas.
                                            </li>
                                            <li>
                                                Kami setuju untuk tidak akan, baik dengan sengaja atau tidak sengaja, langsung atau tidak langsung, sebagian atau seluruhnya, menjual, memperdagangkan, mengalihkan, mentransfer, mempublikasikan, menyebarluaskan, menggandakan atau memperbanyak, menterjemahkan, memproduksi ulang, mengirim atau menyampaikan dan/atau membiarkan terjadinya pengalihan aset teknologi informasi (beserta seluruh bagian-bagiannya) baik secara tertulis, lisan, elektronik (hardcopy, softcopy ataupun software) maupun dengan cara apapun juga kepada perusahaan, institusi, lembaga, agen, orang atau atau pihak lain manapun, dan dalam bentuk apapun juga, termasuk tetapi tidak terbatas pada fotokopi, salinan, hasil penggandaan, hasil terjemahan, hasil produksi ulang, komunikasi elektronik dan alat teknologi lainnya, tanpa ijin tertulis terlebih dahulu dari Perusahaan.
                                            </li>
                                            <li>
                                                Kami setuju untuk dari waktu ke waktu menjaga dan melindungi aset TI Perusahaan (beserta seluruh bagian-bagiannya) selama masa pelaksanaan pekerjaan dan setelah berakhirnya pekerjaan, untuk waktu yang tidak terbatas, kecuali apabila informasi, keterangan dan dokumen-dokumen dimaksud sudah dipublikasikan oleh Perusahaan.
                                            </li>
                                            <li>
                                                Dengan memperhatikan ketentuan perundang-undangan yang berlaku dan peraturan Perusahaan, kami menyadari bahwa setiap pelanggaran atas pernyataan kerahasiaan ini oleh kami, akan menimbulkan sanksi sesuai dengan peraturan perundang-undangan dan/atau peraturan Perusahaan.
                                            </li> 
                                        </ol>
                                    </div>
<a href="{{ route('create-data') }}" class="link"><button type="button" name="setuju2" class="btn btn-info btn-rounded" style="float:right; margin-top:80px; width:100px">Agree&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></button></a>
<a href="{{ route('dashboard-ku') }}" class="link"><button type="button" name="setuju3" class="btn btn-primary" style="margin-top:80px; width:100px"><i class="fa fa-arrow-circle-left"></i>&nbsp;Disagree</button></a>
                              
</form>
                   
@endsection



