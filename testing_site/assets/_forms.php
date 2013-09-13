<!-- forms -->
<span id="forms" class="anchor"></span>
<span class="hr-shadow-top"></span>
<h2 class="page-heading">Forms</h2>
<span class="hr-shadow-bottom"></span>
<br>
	<p class="lead"><i>Form testing</i></p>
<br>
<div class="row-fluid form-Row">
	<div class="span6">
		<form class="form-horizontal form">
			<div class="control-group">
				<label class="control-label" for="inputName">Name</label>
				<div class="controls">
					<input type="text" id="inputName" placeholder="name" name="inputName">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
					<input type="text" id="inputEmail" placeholder="Email" name="inputEmail">
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
						Option one
					</label>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Option two
					</label>					
				</div>
			</div>
		</form>
	</div>
	<div class="span6">
		<form class="form-horizontal form">
			<div class="control-group">
				<label class="control-label" for="inputname">Checkbox</label>
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox"> Don't click me!
					</label>
					<label class="checkbox inline">
						<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
					</label>
					<label class="checkbox inline">
						<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
					</label>
					<label class="checkbox inline">
						<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
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
						<option>Movies</option>
						<option>Beach</option>
						<option>shopping</option>
						<option>Bar</option>
						<option>Home</option>
					</select>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">					
					<button type="submit" class="btn"><span class="icon-envelope"></span>&nbsp;Send</button>
				</div>
			</div>
		</form>
	</div>
</div>