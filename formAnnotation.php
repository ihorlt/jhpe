<?php include_once("header.php"); ?>

<?php
	$varAnno1 = "";
	$varAnno2 = "";
	$varAnno3 = "";
	$varAnno4 = "";
	$varAnno5 = "";
	$word1 = 0;
	$word2 = 0;
	$word3 = 0;
	$word4 = 0;
	$word5 = 0;
	$wordAll = 0;
	$emptyText = "<span class=\"help-block alert alert-error\">Блок не може бути порожнім!</span>";
	$smallText = "<span class=\"help-block alert alert-error\">Блок має мати більше слів!</span>";
	$smallTotalWords = "<p class=\"alert alert-error\">Слів менше 200!</p>";
	$bigTotalWords = "<p class=\"alert alert-error\">Слів більше 400!</p>";

	function str_word_count_utf8($str) {
	   return count(preg_split('~[^\p{L}\p{N}\']+~u',$str));
	 }

	if (isset($_POST['annoSubmit'])) {
		$varAnno1 = $_POST['annotation1'];
		$varAnno2 = $_POST['annotation2'];
		$varAnno3 = $_POST['annotation3'];
		$varAnno4 = $_POST['annotation4'];
		$varAnno5 = $_POST['annotation5'];

		$word2 = str_word_count_utf8($varAnno2);
		$word3 = str_word_count_utf8($varAnno3);
		$word4 = str_word_count_utf8($varAnno4);
		$word5 = str_word_count_utf8($varAnno5);
		$word1 = str_word_count_utf8($varAnno1);
		$wordAll = $word1 + $word2 + $word3 + $word4 + $word5;

	}
 ?>

<div class="container">
	<div class="span3 pull-left">
		<p> <br/></p>
		<div class="thumbnails">
			<div class="thumbnail elemFillsquare"><h4 class="text-center"><b>Предмет, тема, мета</b></h4></div>
				<div class="thumbnail elemBordersquare">
					<p></p>
					<h5><b>Кількість слів:</b>  <?php echo $word1; ?></h5> 
					<p> </p>
				</div>
		</div>

		<p> <br/></p>
		<div class="thumbnails">
			<div class="thumbnail elemFillsquare"><h4 class="text-center"><b>Метод чи методологія</b></h4></div>
				<div class="thumbnail elemBordersquare">
					<p></p>
					<h5><b>Кількість слів:</b>  <?php echo $word2; ?></h5> 
					<p></p>
				</div>
		</div>

		<p> <br/></p>
		<div class="thumbnails">
			<div class="thumbnail elemFillsquare"><h4 class="text-center"><b>Результати роботи</b></h4></div>
				<div class="thumbnail elemBordersquare">
					<p></p>
					<h5><b>Кількість слів:</b>  <?php echo $word3; ?></h5> 
					<p></p>
				</div>
		</div>

		<p> <br/></p>
		<div class="thumbnails">
			<div class="thumbnail elemFillsquare"><h4 class="text-center"><b>Область застосування</b></h4></div>
				<div class="thumbnail elemBordersquare">
					<p></p>
					<h5><b>Кількість слів:</b>  <?php echo $word4; ?></h5> 
					<p></p>
				</div>
		</div>

		<p> <br/></p>
		<div class="thumbnails">
			<div class="thumbnail elemFillsquare"><h4 class="text-center"><b>Висновки</b></h4></div>
				<div class="thumbnail elemBordersquare">
					<p></p>
					<h5><b>Кількість слів:</b>  <?php echo $word5; ?></h5>  
					<p></p>
				</div>
		</div>

		<p> <br/></p>
		<div class="thumbnails">
			<div class="thumbnail elemFillsquare"><h4 class="text-center"><b>Всього слів</b></h4></div>
				<div class="thumbnail elemBordersquare">
					<p></p>
					<h5><b>Кількість слів:</b>  <?php echo $wordAll; ?></h5>
					<?php 
						if ($wordAll < 201)
							echo $smallTotalWords;
						elseif ($wordAll > 401) 
							echo $bigTotalWords;
						?>
					<p></p>
				</div>
		</div>

	</div>
	<div class="span8 pull-right">
		<section>
		<h3>Форма перевірки заповнення реферату</h3>
		<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="control-group">
				<label class="control-label" for="anno1">Предмет, тема, мета </label>
				<div class="controls">
					<textarea rows="6" class="input-block-level" id="anno1" name="annotation1"><? echo $varAnno1; ?></textarea>
					<?php 
						if ($varAnno1 == "")
							echo $emptyText;
							elseif ($word1 < 11) {
												echo $smallText;
											}				
					 ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="anno2">Метод чи методологію проведення роботи </label>
				<div class="controls">
					<textarea rows="5" class="input-block-level" id="anno2" name="annotation2"><? echo $varAnno2; ?></textarea>
					<?php 
						if ($varAnno2 == "")
							echo $emptyText;
							elseif ($word2 < 31) {
												echo $smallText;
											}					
					 ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="anno3">Результати роботи</label>
				<div class="controls">
					<textarea rows="5" class="input-block-level" id="anno3" name="annotation3"><? echo $varAnno3; ?></textarea>
					<?php 
						if ($varAnno3 == "")
							echo $emptyText;
							elseif ($word3 < 21) {
												echo $smallText;
											}					
					 ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="anno4">Область застосування результатіва</label>
				<div class="controls">
					<textarea rows="4" class="input-block-level" id="anno4" name="annotation4"><? echo $varAnno4; ?></textarea>
					<?php 
						if ($varAnno4 == "")
							echo $emptyText;
							elseif ($word4 < 11) {
												echo $smallText;
											}					
					 ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="anno5">Висновки</label>
				<div class="controls">
					<textarea rows="4" class="input-block-level" id="anno5" name="annotation5"><? echo $varAnno5; ?></textarea>
					<?php 
						if ($varAnno5 == "")
							echo $emptyText;
							elseif ($word5 < 11) {
												echo $smallText;
											}					
					 ?>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn" name="annoSubmit" value="Submit">Перевірити</button>
				</div>
			</div>
		</form>

		<section>
			<p> <br/></p>
			<h4>Реферат</h4>
			<?php 
				echo "<p>$varAnno1</p> <p>$varAnno2</p> <p>$varAnno3</p> <p>$varAnno4</p> <p>$varAnno5</p>";
			 ?>
		</section>

	</div>
</div> <!-- /container -->

<?php include_once("footer.php"); ?>