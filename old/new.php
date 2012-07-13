<html>
<head>
<title>Fair Use Analysis Tool</title>
<link rel="stylesheet" href="fair.css" />
<script type="text/javascript" src="new.js"></script>
</head>
<body>

<div id="goback"><a href="index.php">go back</a></div>

<div id="quarantine">
<div id="header">
<h1>Fair Use Analysis Tool</h1>
</div>
<div id="content">

<p>Introductory paragraph here...</p>

<p>Disclaimer about what this tool is and how it's not legal advice...</p>

<form action="process_new.php" name="new_analysis" method="post" onclick="return formValidate();">

<fieldset>
<legend>Media Info</legend>
<table>
<!-- import these fields from median if posssssible... -->
<tr><td width="150">Name of the work:</td><td><input type="text" name="title" class="text" /></td></tr>
<tr><td>Year of release:</td><td><input type="text" name="release_year" class="text" /></td></tr>
<tr><td>Copyright holder:</td><td><input type="text" name="copyright_holder" class="text" /></td></tr>
</table>
</fieldset>

<?php 
$col_width = 75; 
?>

<fieldset>
<legend>Nature of the Work</legend>
<p>Explain nature</p>
<p>Example or two</p>
<hr />
<table class="measure">
<tr><td width="<?php echo $col_width; ?>">creative<br />(movies, art)</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">documentary</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">nonfiction<br />(news, facts)</td></tr>
<tr><td><input type="radio" name="nature" value="-1" /></td><td><input type="radio" name="nature" value="-0.5" /></td><td><input type="radio" name="nature" value="0" /></td><td><input type="radio" name="nature" value="0.5" /></td><td><input type="radio" name="nature" value="1" /></td></tr>
</table>
</fieldset>

<fieldset>
<legend>Your Usage</legend>
<p>Explain purpose (being YOUR purpose)</p>
<p>Example or two</p>
<hr />
<table class="measure">
<tr><td width="<?php echo $col_width; ?>">commercial, entertainment, and/or profit</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">???</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">transformative, critique, parody, and/or educational</td></tr>
<tr><td><input type="radio" name="usage" value="-1" /></td><td><input type="radio" name="usage" value="-0.5" /></td><td><input type="radio" name="usage" value="0" /></td><td><input type="radio" name="usage" value="0.5" /></td><td><input type="radio" name="usage" value="1" /></td></tr>
</table>
</fieldset>

<fieldset>
<legend>Portion of Usage</legend>
<p>Explain duration</p>
<p>Example or two</p>
<hr />
<table class="measure">
<tr><td width="<?php echo $col_width; ?>">uses entire work</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">uses less than half the work</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">uses a very small portion of the work</td></tr>
<tr><td><input type="radio" name="portion" value="-1" /></td><td><input type="radio" name="portion" value="-0.5" /></td><td><input type="radio" name="portion" value="0" /></td><td><input type="radio" name="portion" value="0.5" /></td><td><input type="radio" name="portion" value="1" /></td></tr>
</table>
</fieldset>

<fieldset>
<legend>Effect on Market</legend>
<p>Explain what the effect on the market means</p>
<p>Example or two</p>
<hr />
<table class="measure">
<tr><td width="<?php echo $col_width; ?>">substitutes purchasing, long-term use, numerous copies made</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">restricted to class-only use, limited copies made</td><td width="<?php echo $col_width; ?>">-</td><td width="<?php echo $col_width; ?>">no effect on market, no longer in print, and/or unavailable</td></tr>
<tr><td><input type="radio" name="market" value="-1" /></td><td><input type="radio" name="market" value="-0.5" /></td><td><input type="radio" name="market" value="0" /></td><td><input type="radio" name="market" value="0.5" /></td><td><input type="radio" name="market" value="1" /></td></tr>
</table>
</fieldset>

<fieldset>
<legend>Assessment</legend>
<p>Explanation of assessment...</p>
<p><input type="button" value="assess!" onclick="assessForm()" /></p>
<p id="assessment_total"></p>
</fieldset>

<fieldset>
<legend>Comments/Notes</legend>
<textarea style="width:100%;height:200px;"></textarea>
</fieldset>

<fieldset>
<legend>Almost done</legend>
<table>
<tr><td>Are you confident that the use of this media falls under Fair Use?</td><td><select><option>Please select</option><option>Yes</option><option>No</option></select></td></tr>
<tr><td>If no, would you like a dean/chair to review this?</td><td><select><option>Please select</option><option>Yes</option><option>No</option></select></td></tr>
<tr><td>What department do you work for?</td><td><select><option>Please select</option><option>Journalism</option><option>Visual Media Arts</option><option>Performing Arts</option></select></td></tr>
<tr><td>&nbsp;</td><td><input class="submitbtn" type="submit" value="Submit Analysis" /></td></tr>
</table>
</fieldset>

</form>
</div>
</div>
</body>
</html>