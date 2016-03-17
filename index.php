<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>




      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

	</style>
  </head>
  <body>
  <div class="row">
    <div class="col-md-6">
  <ol class="breadcrumb">
  <li><a href="/">Главная</a></li>
  <li><a href="http://www.parusvlg.ru/tury-po-rossii/">Россия</a></li>
  <li><a href="http://www.parusvlg.ru/priem-v-volgograde/">Волгоград</a></li>
  <li><a href="http://www.parusvlg.ru/tury-po-rossii/po-volgogradskoj-oblasti/">Экскурсии</a></li>
  <li class="active">Элиста</li>
</ol>
     <h1>Экскурсия в Элисту</h1>
      Элиста – город из волшебной сказки, город, достойный того, чтобы у каждого, побывавшего здесь хотя бы раз, возникало желание возвращаться сюда вновь и вновь. Вы убедитесь в этом сами, если решите провести свое свободное время, побывав на экскурсии в столице республики Калмыкия, которую местные называют степной жемчужиной, сверкающей среди бескрайних простор степей и полупустынь.
      <p>1 500 руб на чел. / Цены для групп от 10 человек.</p>
        <p>           
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Отправить заявку
        </button>
        </p>
        </div>
    <div class="col-md-6"><img src="http://parusvlg.ru/wp-content/themes/mBr/images/eks/2.jpg" class="img-responsive img-thumbnail" alt="Элиста"></div>
  </div>
  <div class="row">
      <div class="col-md-12">---</div>
  </div>
  <div class="row">
      <div class="col-md-6"><ul>
          <li>...</li>
      </ul></div>
      <div class="col-md-6">
      ***
      <ul>
          <li>...</li>
      </ul></div>
  </div>
  <div class="row">
      <div class="col-md-12">---</div>
  </div>
  <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"><!-- Button trigger modal -->
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Отправить заявку
          </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                          <h2 class="modal-title" id="myModalLabel">Заявка на экскурию</h2>
                      </div>
                      
            <!-- Сообщение, отображаемое в случае успешной отправки данных -->
            <div class="alert alert-success hidden" role="alert" id="msgSubmit">
              <strong>Внимание!</strong> Сообщение отправлено.
            </div>

         			 <!-- Форма заявки -->
                      <form  class="form-horizontal" action="http://parusvlg.ru/wp-content/themes/mBr/bootstrap/mailto.php" method="post" id="id_form" oninput="out.value=range.value">
                        <div class="form-group">
                        <label class="control-label col-xs-3" for="lastName">Ваши контакты:</label>
                        <div class="col-xs-9">
                          <input type="email" name="email" class="form-control" placeholder="Ваш e-mail" required>
                          <input type="tel" name="tel" class="form-control" placeholder="Ваш телефон">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-xs-3" for="lastName">Желаемый день:</label>
                        <div class="col-xs-9">
                          <input type="text" name="date" class="auto-kal" data-kal="months: 2, direction: 'future', mode: 'range'">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-xs-3" for="lastName">Количество человек:</label>
                        <div class="col-xs-6">
                              <input type="range" name="range" id="id_range" min=1 max=40 value="1" width="50px">
                        </div>
                         <div class="col-xs-3">
                              <output name="out" for="range">1</output>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-xs-3" for="lastName">Ваше имя:</label>
                        <div class="col-xs-9">
                          <input type="text" name="name" class="form-control" placeholder="Text input">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-xs-3" for="lastName">Ваше сообщение:</label>
                        <div class="col-xs-9">
                          <textarea class="form-control" name="text" rows="3"></textarea>
                        </div>
                      </div>
                          <input type="hidden" name="url" value="Экскурсия в Элисту">
  <div class="form-group">
    <div class="col-xs-3 col-xs-offset-3">
      <input type="submit" class="btn btn-primary" value="Отправить">
    </div>
    <div class="col-xs-3">
      <input type="reset" class="btn btn-default" value="Очистить форму">
    </div>
  </div>
</form>

<!--
<script type="text/javascript">
$(document).ready(function(){
    $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отпрвлено!");
            });
    });
});    
</script>
-->
                  </div>
              </div>
          </div></div>
  </div>


    <!-- Bootstrap -->
    <link href="http://parusvlg.ru/wp-content/themes/mBr/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- календарь -->
    <link href="http://parusvlg.ru/wp-content/themes/mBr/bootstrap/calendar/kalendae.css" rel="stylesheet">
    <link href="http://parusvlg.ru/wp-content/themes/mBr/bootstrap/calendar/metal.css" rel="stylesheet">
    <script src="http://parusvlg.ru/wp-content/themes/mBr/bootstrap/calendar/kalendae.js"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://parusvlg.ru/wp-content/themes/mBr/bootstrap/js/bootstrap.min.js"></script>
    <!-- Подключаем джава для формы обратной связи -->
        <script src="http://parusvlg.ru/wp-content/themes/mBr/bootstrap/js/scripts.js"></script>


    
  </body>
</html>