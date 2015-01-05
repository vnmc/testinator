<!-- forms -->
<?php writeHeading(FORMS); ?>

<!--<form method="POST" action="results.php" enctype="multipart/form-data">-->
<form method="POST">
	<div class="row-fluid form-Row">
		<div class="col-md-6">
			<div class="control-group">
				<label class="control-label" for="inputName">Name</label>
				<div class="controls">
					<input type="text" id="inputName" placeholder="name" name="inputDetails[]">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
					<input type="email" id="inputEmail" placeholder="Email" name="inputDetails[]">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" id="inputPassword" placeholder="Password" name="inputPassword">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputMessage">Message</label>
				<div class="controls">
					<textarea rows="3" placeholder="Message" id="inputMessage" name="inputMessage"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="optionsRadios">Option</label>
				<div class="controls">
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Blue Lady
					</label>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Joe Bush
					</label>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Minnie Quay
					</label>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
						Ridgeway Ghost
					</label>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="control-group">
				<label class="control-label" for="inputname">Checkbox</label>
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox" name="check0"> Don't click me!
					</label>
					<label class="checkbox inline">
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
			<div class="control-group">
				<label class="control-label" for="selectSingle">Select</label>
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
			<div class="control-group">
				<label class="control-label" for="selectBox">Select Multi</label>
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

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-default"><span class="icon-envelope"></span>&nbsp;Send</button>
				</div>
			</div>

			<!--<input type="file" name="myfile"/>-->
		</div>
	</div>
</form>
