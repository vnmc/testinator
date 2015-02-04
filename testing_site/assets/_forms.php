<!-- forms -->
<?php writeHeading(FORMS); ?>

<!--<form method="POST" action="results.php" enctype="multipart/form-data">-->
<form method="POST">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputName">Name</label>
				<div class="controls">
					<input type="text" id="inputName" placeholder="Casper The Ghost" name="inputDetails[]">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail">E-Mail</label>
				<div class="controls">
					<input type="email" id="inputEmail" placeholder="casper@ghostlab.org" name="inputDetails[]">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" id="inputPassword" placeholder="secret" name="inputPassword">
				</div>
			</div>
			<div class="form-group">
				<label for="inputMessage">Message</label>
				<div class="controls">
					<textarea rows="5" id="inputMessage" name="inputMessage"></textarea>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="optionsRadios">Select your favorite Ghost</label>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Blue Lady
					</label>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Joe Bush
					</label>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Minnie Quay
					</label>
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
						Ridgeway Ghost
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="inputname">Tick some checkboxes</label>
				<div class="checkbox">
					<label class="checkbox">
						<input type="checkbox" name="check0"> Don't click me!
					</label>
					<label class="checkbox">
						<input type="checkbox" id="inlineCheckbox1" name="check1" value="option1"> 1
					</label>
					<label class="checkbox inline">
						<input type="checkbox" id="inlineCheckbox2" name="check2" value="option2"> 2
					</label>
					<label class="checkbox inline">
						<input type="checkbox" id="inlineCheckbox3" name="check3" value="option3"> 3
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="selectSingle">Select one option</label>
				<div class="controls">
					<select id="selectSingle" name="selectSingle">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="selectBox">Where would you like to meet?</label>
				<div class="controls">
					<select multiple="multiple" name="selectBox" id="selectBox">
						<option>Castle</option>
						<option>Graveyard</option>
						<option>Alley</option>
						<option>Bridge</option>
						<option>At Home</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="controls">
					<button type="submit" class="btn btn-default"><span class="icon-envelope"></span>&nbsp;Send&nbsp;</button>
				</div>
			</div>

			<!--<input type="file" name="myfile"/>-->
		</div>
	</div>
</form>
