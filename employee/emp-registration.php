<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" charset="utf-8">
  <title>従業員｜ホテル宿泊管理システム</title>
<?php
include "../header_css.php"
?>
  <link rel="stylesheet" type="text/css" href="../css/emp-registration.css">
  <link rel="shortcut icon" href="../assets/ico/img.png">
  <meta name=viewport content="width=device-width, initial-scale=1">


    <script>
        $( function() {
            $('#reg_conf').click( function () {
                $('#reg_pop').modal();

                var getId = $("#emp_id").val();
                $('#Id_out').text(getId);
                var getName = $("#emp_name").val();
                $('#Name_out').text(getName);
                var getKana = $("#emp_kana").val();
                $('#Kana_out').text(getKana);
                var getSex = $("#sex").val();
                $('#Gender_out').text(getSex);
                var getMgr = $("#mgr").val();
                $('#Mgr_out').text(getMgr);

            });
        });
    </script>
    <script type="text/javascript">
    $(function () {
      $('#reg_conf').click( function() {
        var i_id = document.qwe.e_id.value;
        console.log(i_id);
        document.getElementById('f_id').value=i_id;
        var i_name = document.qwe.e_name.value;
        document.getElementById('f_name').value=i_name;
        var i_kana = document.qwe.e_kana.value;
        document.getElementById('f_kana').value=i_kana;
        var i_sex = document.qwe.sex.value;
        document.getElementById('f_sex').value=i_sex;
        var i_mgr = document.qwe.mgr.value;
        document.getElementById('f_mgr').value=i_mgr;
      });
    });

    </script>
</head>

<body>
<?php
include "../header.php"
?>

<div class="box">
    <div class="container">
        <div class="form-horizontal">
            <form action="emp-form.php" method="post" name="qwe">
              <div class="form-group">
                 <label class="col-xs-2 label-control">従業員番号：</label>
                 <div class="col-xs-2">
                     <input type="text" name="e_id" class="form-control" size="7" id="emp_id" readonly="readonly">
                 </div>
                  <script>
                      <?php
                      $micro = microtime();
                      list($msec, $sec) = explode(" ", microtime());
                      $Time = $sec.floor($msec*1000);
                      $Time = strrev($Time);

                      ?>
                      $( function() {
                              var micro = <?php echo $Time;?>;
                              console.log(micro);
                              $('#emp_id').val(micro);
                          });

                  </script>
             </div>

             <div class="form-group">
                 <label class="col-xs-2 label-control">名前：</label>
                 <div class="col-xs-2">
                     <input type="text" name="e_name" class="form-control" size="21" id="emp_name" required>
                 </div>
                 <label class="col-xs-2 label-control">カナ ：</label>
                 <div class="col-xs-2">
                     <input type="text" name="e_kana" class="form-control" size="21" id="emp_kana" required>
                 </div>
             </div>

             <div class="form-group">
                 <label class="col-xs-2 label-control">性別：</label>
                 <div class="col-xs-2">
                     <select name="sex" id="sex">
                         <option value="男性">男性</option>
                         <option value="女性">女性</option>
                         <option value="その他">その他</option>
                     </select>
                 </div>
                 <label class="col-xs-2 label-control">責任者権限：</label>
                 <div class="col-xs-2">
                     <select name="mgr" id="mgr">
                         <option value="true">あり</option>
                         <option value="false" selected>なし</option>
                     </select>
                 </div>
             </div>
                <button type="button" class="btn btn-default btn-lg" id="reg_conf">登録確認</button>
                <input type="button" class="btn btn-default btn-lg" value="キャンセル" onclick="history.back();">
            </form>
        </div>
    </div>
</div>

<!-- モーダル・ダイアログ -->
<div class="modal fade" id="reg_pop" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
          <form action="emp-form.php" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                <h4 class="modal-title">以下で登録しますか？</h4>
            </div>
            <div class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-xs-2 label-control">従業員番号：</label><p id="Id_out" class="col-xs-3"></p>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 label-control">名前：</label><p id="Name_out" class="col-xs-9"></p>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 label-control">カナ：</label><p id="Kana_out" class="col-xs-9"></p><br>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 label-control">性別：</label><p id="Gender_out" class="col-xs-3"></p>
                        <label class="col-xs-2 label-control">責任者権限：</label><p id="Mgr_out" class="col-xs-3"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                <input type="hidden" name="id" id="f_id">
                <input type="hidden" name="name" id="f_name">
                <input type="hidden" name="kana" id="f_kana">
                <input type="hidden" name="sex" id="f_sex">
                <input type="hidden" name="mgr" id="f_mgr">
                <button type="submit" class="btn btn-default">登録</button>
            </div>
          </form>
        </div>
    </div>
</div>

<br>
<div class="copyright">
<div align="center"><p>COPYRIGHT &copy; ビジネスホテルOIC ALL RIGHTS RESERVED.</p>
</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
