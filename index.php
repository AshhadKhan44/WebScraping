<?php include('headerr.php');?>
<body>
	<h1 class="text-center">Task 1</h1>
		<section style="margin-top:40px;">
			<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form class="well" method="post" action="scrape.php" name="scrape.php" id="scrape_form">
						<div class="form-group">
						<label>URL1:</label>	
						<input type="input" class="form-control" onkeyup="wordCount(), alphabetPosition(this.value)" name="website_url1" id="website_url1">
						<label>URL2:</label>	
						<input type="input" onkeyup="wordCount()" class="form-control" name="website_url2" id="website_url2"><br>
						<input type="submit" class="btn btn-primary" name="submit" value="submit">
						</div>	
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<label>Num of Characters typed</label>	
					<p id="count"></p>
					<label>Positions of the alphabets:</label>	
					<p id="pos"></p>	
				</div>	
			</div>	
			</div>
		</section>

<script type="text/javascript">
	var text = document.getElementById('website_url1').value;
		function wordCount(){
		var text1 = document.getElementById('website_url1').value;
		var text2 = document.getElementById('website_url2').value;
		var ftxt = text1+text2;
		console.log(ftxt);
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('count').innerHTML = req.responseText;
			}
		}
		req.open('GET', 'headerr.php?char='+ftxt, true);
		req.send();
	}
	function alphabetPosition(text) {
		  var result = "";
		  for (var i = 0; i < text.length; i++) {
			var code = text.toUpperCase().charCodeAt(i)
			if (code > 64 && code < 91){
				result += (code - 64) + " ";	
			} 
		  }
		  document.getElementById('pos').innerHTML = result;
		
		}
</script>
<?php include('footer.php');?>	