<div class="submenu">

   <div class="jarak">
      <div class="container">
         <div class="jarak2">
            <!-- <div class="anotif1">
               <a href="#" id="showHideHeader" title="Header show/hide..."><i class="fa fa-angle-double-up"></i></a>
            </div> -->
            <div class="anotif1">
               <div class="anotif2"> <a href="https://latihan-lpse.lkpp.go.id/inaproclat/unduh?q=Petunjuk%20Penggunaan" target="_blank" class="notif-info"><span style="font-size:px;"> <i class="fa fa-book"></i> Petunjuk Penggunaan</span></a>
               </div>
               <div class="anotif2"> <a href="/spse4dev/eproc-lainnya" class="notif-info" target="_blank"><span style="font-size:px;">Aplikasi e-Procurement Lainnya</span></a></div>
            </div>
            <div class="float-right"><span title="[PPK301] - 00200301"><a href="/spse4dev/user/viewuser?userid=PPK301" class="dialog" title="Detail Infomasi Pengguna" onhide-refresh="true">PPK KINTEK 2021</a> - Pejabat Pembuat Komitmen</span></a></div>
         </div>
      </div>
   </div>
</div>

<!-- end nav -->
<div class="container" style="margin-top: 10px;">
   <ul class="nav nav-tabs faq-cat-tabs" role="tablist">
      <li class="active">
         <a href="#">Tender</a>
      </li>
      <li>
         <a href="#" data-toggle="tab">Non E-Tendering</a>
      </li>
      <li>
         <a href="#" data-toggle="tab">Non Transactional</a>
      </li>
      <li>
         <a href="#" data-toggle="tab">Swaloka</a>
      </li>
   </ul>
   <section class="card-besar">
      <div class="content tab-content">
         <div class="tab-pane active" id="non-etendering">
            <div class="btn-group" style="padding:10px;">
               <ul class="breadcrumb">
                  <li><a href="/spse4dev/paket">Daftar Paket</a></li>
                  <li class="active">Daftar Rencana Pengadaan</li>
               </ul>
            </div>

            <table class="table-kintek">
               <tr>
                  <th>K/L/PD <span style="color:red;"> *</span></th>
                  <td><select id=" instansi" name="instansiId" class="form-control">
                        <option value="" selected>Pilih K/L/PD</option>
                        <option value="I106">Universitas Sumatera Utara</option>
                        <option value="I97">Universitas Warmadewa</option>

                     </select>

                     <a id="updateSatker" href="javascript:void(0)" class="btn btn-primary"><span class="glyphicon glyphicon-refresh
"></span></a>

                     <div class="has-error">
                        <span id="alertInstansi" class="form-text" style="display: none">Pilih K/L/PD terlebih
                           dahulu.</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <th class="bgwarning">Tahun Anggaran<span style="color:red;"> *</span></th>
                  <td><select id="tahun" name="tahun" class="form-control  selectpicker" data-live-search="true">
                        <option value="2018" selected="selected">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                     </select>
                     <a id=" updateSatker" href="javascript:void(0)" class="btn btn-primary"><span class="glyphicon glyphicon-refresh
"></span></a>
                  </td>
               </tr>
               <tr class="form-group">
                  <th class="bgwarning">Satuan Kerja <span style="color:red;"> *</span></th>
                  <td><select id="satker" name="satkerId" class="form-control  selectpicker" data-live-search="true">
                        <option value="" selected>Pilih Satuan Kerja</option>
                     </select>
                     <a id=" updateSatker" href="javascript:void(0)" class="btn btn-primary"><span class="glyphicon glyphicon-refresh
"></span></a>
                     <div class="has-error">
                        <span id="alertSatker" class="form-text" style="display: none">Pilih Satuan Kerja terlebih
                           dahulu.</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <th>Metode Pemilihan<span style="color:red;"> *</span></th>
                  <td><select id="metodepemilihan" name="metodepemilihan" class="form-control " data-live-search="true">
                        <option value="0">Semua Metode Pemilihan</option>
                        <option value="13">Tender</option>
                        <option value="14" selected="selected">Tender Cepat</option>
                        <option value="15">Seleksi</option>
                     </select>
                  </td>
               </tr>
               <tr></tr>
               <th></th>
               <td><a id="updatePaket" href="javascript:void(0)" class="btn btn-primary">Update RUP</a></td>
               </tr>
            </table>

            <div class="bs-callout bs-callout-warning mt-5">
               Pembuatan paket tender dimulai dengan memilih dari paket RUP. <b>Paket yang tidak terdaftar pada RUP
                  tidak dapat ditender</b>.
            </div>
            <div style="overflow-x:auto;">
               <table id="example" class="table">
                  <thead>
                     <tr>
                        <th>Kode RUP</th>
                        <th>Nama Paket</th>
                        <th>Sumber Dana</th>
                        <th>Metode Pemilihan Penyedia</th>
                        <th>Pagu</th>
                        <th>Tahun Anggaran</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1123123123</td>
                        <td><a href="#">paket/pengadaan barang</a>
                           <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Pengadaan Langsung</td>
                        <td>Rp.400 Jt</td>
                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang </a>
                           <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Tender Umum</td>
                        <td>Rp.300 Jt</td>
                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Tender Umum</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Tender Umum</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Tender Umum</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Tender Umum</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Tender Umum</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Tender Umum</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Pengadaan Langsung</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>

                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Pengadaan Langsung</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Pengadaan Langsung</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>

                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Pengadaan Langsung</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Pengadaan Langsung
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                     <tr>
                        <td>1234434</td>
                        <td><a href="#">paket/penjualan barang barang</a> <span class="label label-primary">e-tender</span>
                           <span class="label label-danger">spse 4</span>
                        </td>
                        <td>APBN</td>
                        <td>Pengadaan Langsung</td>
                        <td>Rp.300 Jt

                        <td>2018</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </section>
</div>