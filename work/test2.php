<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id='show'></p>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		
		$.ajax({
			url:'https://newsapi.org/v2/top-headlines?q=property&qlnTitle=investment&sortBy=relevancy&apiKey=7238a1f3631d41b3bc5b7abc4328faf0',
			type:'get',
			dataType:'json',
			success:function(news){
				$('#show').html(news.articles[0].title)
				let image=news.articles[0].urlToImage;
				$('#show').append('<img src='+image+'>')
				$('#show').append(news.articles[0].description)
				$('#show').append(news.articles[0].content)

				console.log(news);
				//document.write(news.articles[10].title);
			},
			error:function(error){
				console.log(error);
			}
		})			
})
</script>
</body>
</html>