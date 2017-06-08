<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chatbot</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<header>
  	<h1>ICI Fabien</h1>
  </header>
  <div class="row">
    <div class="col-md-5 bot">
      <div class="avatar">
        <img src="assets/img/Logo_ICI_avatar.png" alt="">
      </div>
      <div class="bulle_chat">
        <div>
          <img src="assets/img/Robot_start.png">
          <p><?= $question->getContent(); ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-7"></div>
  </div>

  <div class="row">
    <div class="col-md-4 bulle_rep">
		<ul id="list">
			<?php foreach($subQuestions as $sq): ?>
				<li class="question" id="<?= $sq->getId() ?>"><a><?= $sq->getQuestion() ?></a></li>
			<?php endforeach; ?>
		</ul>
    </div>
  </div>
  <div class="clearfix"></div>

  <div>
    <div class="col-md-8"></div>
    <div class=" bulle_user">
      <p></p>
    </div>
  </div>
  
  <div class="clearfix"></div>

	<script type="text/javascript">
		$(document).ready(function () {
			var questionClick = $('.question').on('click', function () {
				$.ajax({
					method: 'POST',
					url: "getQuestion.php",
					data: {idq: $(this).attr('id')},
					success: function (result) {
						var result = $.parseJSON(result); 
						$('#bot-question').html(result.question.content);
						$('#list').html('');

						if (result.subQuestions[0]) {
							result.subQuestions.forEach(function(sq) {
								$('#list').append('<li class="question" id="' + sq.id + '">' + sq.question + '</li>');
							});
						}
					}
				});
			});
		});
	</script>
</body>
</html>