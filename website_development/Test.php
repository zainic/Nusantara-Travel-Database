<?php
    date_default_timezone_set('Asia/Jakarta');
    $real = date('Y-m-d h:i:s');
    echo $real;
?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
    $.fn.serializeObject = function(){
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
    };
    
    $(function() {
        $('form').submit(function() {
            $('#result').text(JSON.stringify($('form').serializeObject()));
            return false;
        });
    });
    </script>
</head>
<body>
<div style="height:500px"></div>
<form action="" method="post" style="height:1000px">
	First Name: <input placeholder="First Name" type="text" name="firstname" maxlength="12" size="12"/> <br/><br/>
	Gender:<br/>
	Male:<input type="radio" name="gender" value="Male"/><br/>
	Female:<input type="radio" name="gender" value="Female"/><br/><br/>

	Favorite Food:<br/>
	Steak:<input type="checkbox" name="food[]" value="Steak"/><br/>
	Pizza:<input type="checkbox" name="food[]" value="Pizza"/><br/>
	Chicken:<input type="checkbox" name="food[]" value="Chicken"/><br/><br/>

	<textarea wrap="physical" cols="20" name="quote" rows="5" placeholder="message"></textarea><br/><br>

	Select a Level of Education:<br/>
	<select name="education">
	<option value="Jr.High">Jr.High</option>
	<option value="HighSchool">HighSchool</option>
	<option value="College">College</option></select><br/>
	<p><input type="submit" /></p>
</form>

<h2>JSON</h2>
<pre id="result"></pre>
</body>
</html>-->