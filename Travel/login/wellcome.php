<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<h2>hello</h2>
	<table class="table" id="table1">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
			</tr>
		</thead>
		<tbody id="content">
		</tbody>
	</table>
	<script type="text/javascript">
		$(document).ready(         
                function() {
                    $.ajax({
                        url : "../login/data.php",
                        type : "Get",
                        DataType : 'json',
                        success : function(res) {
                        	console.log(res);
                            $( '#content' ).html(res);
                        },
                        error : function() {
                            alert("error occurred");
                        }
                    });
                });
	</script>
</body>
</html>