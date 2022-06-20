
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
	$("#statelist").keyup(function(){
		$.ajax({
		type: "POST",
		url: "autocomplete-search.php",
		data:'keyword='+$(this).val(),
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
		}
		});
	});
});
function selectState(val) {
$("#statelist").val(val);
$("#suggesstion-box").hide();
}
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
	$("#statelist").keyup(function(){
		$.ajax({
		type: "POST",
		url: "autocomplete-search.php",
		data:'keyword='+$(this).val(),
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
		}
		});
	});
});
function selectState(val) {
$("#statelist").val(val);
$("#suggesstion-box").hide();
}
    </script>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <input type="text" class="form-control input-lg" id="statelist" name="statelist" placeholder="Search State Name" value="">
        <br/>
        <div id="suggesstion-box">         
        </div>
    </body>
</html>
