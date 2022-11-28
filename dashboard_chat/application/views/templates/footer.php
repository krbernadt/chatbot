<style type="text/css">
  #btn {
    position: fixed;
    right: 0;
    bottom: 0;
    display: block;
    z-index: 1080;
    width: 3em;
    height: 3em;
    background: #B1B2FF;
    border-color: #B1B2FF;
  }

  #btn:hover {
    background-color: black;
    border: none;
  }

  #chatbot {
    position: fixed;
    right: 0;
    bottom: 0;
    z-index: 1080;
    display: none;
    overflow: auto;
  }


  .pop-up-wrapper {
    position: fixed;
    right: 0;
    bottom: 0;
    z-index: 1080;
    margin-right: 15px;
    margin-bottom: 70px;
    width: 370px;
    background-color: white;
    box-shadow: 3px 5px 10px darkgray;
  }

  .header {
    height: 50px;
    background-color: #B1B2FF;
    color: black;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .header-title {
    color: #400D51;
    font-size: 24pt;
  }

  .close {
    font-size: 40px;
    color: #400D51;
    position: absolute;
    right: 14px;
    top: 3px;
  }

  .close:hover {
    cursor: pointer;
    color: #400D51;
  }

  .isi {
    overflow-y: auto;
    width: 100%;
    height: 80%;
  }

  .pesan-bot {
    display: block;
    float: left;
    background-color: #EEF1FF;
    /* font-weight: bold; */
    color: #400D51;
    font-size: 14pt;
    width: fit-content;
    border-radius: 10px;
    padding: 10px;
    max-width: 20%;
    margin: 20px 20% 10px;
    word-wrap: break-word;
    overflow: auto;
  }

  .pesan-user {
    display: block;
    background-color: #D2DAFF;
    color: #400D51;
    font-size: 14pt;
    width: fit-content;
    border-radius: 10px !important;
    padding: 10px;
    max-width: 20%;
    margin: 20px 20% 10px;
    float: right;
    word-wrap: break-word;
    overflow: auto;
    /* font-weight: bold; */
  }

  .footer {
    display: flex;
    height: 55px;
    background-color: none;
    border-top: 2px solid #B1B2FF;
    padding-top: 0.3%;
    padding-left: 3%;
    padding-right: 3%;

  }

  .pesan {
    flex: 11;
    width: 90% !important;
    height: 95% !important;
    color: black;
    font-size: 14pt !important;
    border: 2px solid #B1B2FF;
    margin-top: 10px !important;
    padding-left: 10px !important;
    border-radius: 7px;
  }

  .btnsend {
    margin-left: 1%;
    flex: 1;
    border-style: none;
    border-radius: 5px;
    width: 70px;
    color: #400D51;
    background-color: #B1B2FF;
    height: 95%;
    font-size: 15pt;
    margin-top: 10px;
    font-weight: bold;
    align-items: center;
  }

  .btnsend:hover {
    background-color: #000;
    color: #fff;
  }

  #pop-up {
    width: 98%;
    height: 90%;
  }

  .pesan-master {
    flex: 6;
    background-color: #D2DAFF;
    color: #400D51;
    font-size: 14pt;
    width: fit-content;
    border-radius: 10px !important;
    padding: 10px;
    float: right;
    max-width: 20%;
    margin: 5px 5px 0px;
    word-wrap: break-word;
    overflow: auto;
  }

  .test-div {
    display: blocks;
    float: left;
    background-color: #fff;
    /* font-weight: bold; */
    width: 100%;
    padding: 1px;
    margin: 10px 0 10px;

  }

  .master-div {
    float: right;
    background-color: #fff;
    /* font-weight: bold; */
    width: 100%;
    padding-right: 20%;
    padding-left: 30%;
    margin: 10px 0 10px;
  }

  @media only screen and (max-width:850px) {
    .footer {
      align-items: center;
    }

    .pesan {
      width: 85% !important;
      height: 90% !important;
    }

    .btnsend {
      width: 60px;
      font-size: 12pt;
      height: 90%;
    }
  }
</style>
<!-- End styling -->

<!-- /.content-wrapper -->
<button type="button" onclick="document.getElementById('chatbot').style.display='block'" id="btn" class="btn btn-success rounded-circle p-0 m-3">
  <i class="fas fa-solid fa-comment-dots fa-lg"></i>
</button>
<div id="chatbot" class="rounded">
  <div class="pop-up-wrapper rounded" id="pop-up">
    <div class="header ">
      <p class="header-title">Chatbot</p>
      <span class="close" onclick="document.getElementById('chatbot').style.display='none'">&times;</span>
    </div>
    <div class="isi">
      <div class="chat-bot">
        <div class="test-div">
          <p class="pesan-bot">Halo, apa ada yang bisa dibantu ?</p>
        </div>
        <div class="master-div">
          <button class="pesan-master"> test test </button>
          <button class="pesan-master">test test test </button>
          <button class="pesan-master">test test </button>
          <button class="pesan-master">test test test </button>
          <button class="pesan-master">test test test </button>
          <button class="pesan-master">test </button>
          <button class="pesan-master">test test test test test </button>
          <button class="pesan-master">test test test </button>
          <button class="pesan-master">test test test </button>
        </div>
      </div>
    </div>
    <div class="footer">
      <form class="form-inline chatform"></form>
      <input type="text" class="pesan" id="pesan" name="chat-form" placeholder="Tulis pesan Anda...">
      <button type="button" class="btnsend">Kirim</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>
</div>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->3
</div>
<!-- ./wrapper -->

<!-- jQuery -->


<!-- Chatbot script -->

<div>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/template/backend/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('assets/template/backend/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/template/backend/') ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/template/backend/') ?>dist/js/demo.js"></script>
</div>

<!-- replies script -->
<script>
  $(document).ready(function() {
    $(".btnsend").on("click", function() {
      $pesan = $(".pesan").val();
      $msg = '<div class="test-div" ><p class="pesan-user">' + $pesan + '</p></div>';
      $(".isi").append($msg);
      $(".pesan").val("");

      // membuat balasan

      $.ajax({
        type: "POST",
        url: "<?= base_url('command/process') ?>",
        data: 'text=' + $pesan,
        success: function(result) {
          $replies = '<div class="chat-bot"><div class="test-div"><p class="pesan-bot">' + result + '</p></div></div>';
          $(".isi").append($replies);
          $(".isi").scrollTop($(".isi")[0].scrollHeight);
        }
      });
    });
  });
</script>

</body>

</html>