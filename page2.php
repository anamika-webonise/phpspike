<html>
<head>

</head>
<body>
<h1>YOU are on Page 2</h1>

17. Usage and examples of Headers in PHP:


<br><br>

// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

//to download pdf
header("Content-type:application/pdf");
// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename='downloaded.pdf'");// The PDF source is in original.pdf
readfile("original.pdf");
//to download jpg
header("Content-type:image/jpg");
header("Content-Disposition:attachment;filename='downloaded.jpg'");// The PDF source is in original.jpg
readfile("original.jpg")
</body>

</html>