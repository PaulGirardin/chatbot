<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chatbot</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="lol">
		<p id="bot-question"><?= $question->getContent(); ?></p>
		<ul id="list">
			<?php foreach($subQuestions as $sq): ?>
				<li class="question" id="<?= $sq->getId() ?>"><?= $sq->getQuestion() ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

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