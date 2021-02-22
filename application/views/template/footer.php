<div id="footer">
   <div class="container">
      <ul class="list-inline">
         <li><a href="/eproc4/publik/tentangkami">Tentang Kami</a></li>
         <li><a href="http://inaproc.id/pakta-integritas" target="_blank">Pakta Integritas</a></li>
         <li><a href="http://inaproc.id/syarat-ketentuan" target="_blank">Persyaratan dan Ketentuan</a></li>
      </ul>
      <div id="footerInfo">
         <div id="infoLeft">
            <p>Total Pengunjung: 2.321.268</p><span id="realtime"></span> <span>WIB</span>
         </div>
         <div id="infoRight">
            <p>&copy; 2006-2021 Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (<a href="http://www.lkpp.go.id" target="_blank">LKPP</a>)</p>
            <p>SPSE v4.3u20191009</p>
         </div>
      </div>
   </div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="/eproc4/public/javascripts/jquery-1.12.4.min.js"></script> -->
<script type="text/javascript" src="<?= base_url('assets/') ?>public/boostrap/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>public/boostrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>public/boostrap/js/jquery.dataTables.min.js"></script>

<!-- custom js -->
<!-- dattable -->

<script type="text/javascript">
   $(document).on('click', 'ul li', function() {
      $(this).addClass('active').siblings().removeClass('active')
   })
</script>
<script>
   $(document).ready(function() {
      $('#example').DataTable();
   });
</script>
<!-- waktu data di ambil dari json time -->
<!-- <script type="text/javascript">
      $(document).ready(function() {
         $.ajax({
            url: "/eproc4/json/getservertime",
            cache: false,
            success: function(data) {
               $('#realtime').jclock({
                  format: '%d %B %Y %H:%M',
                  seedTime: parseInt(data),
                  utc: true,
                  utc_offset: 7
               });
            }
         });
      });
   </script> -->
</body>

</html>