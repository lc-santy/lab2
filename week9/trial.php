<!DOCTYPE html>
<html>
<head>
<title>WEBPROG Webpage</title>
<link rel="icon" type="image/png" href="img/favicon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
h2 {
	color: red;
}
.neonText {
  color: #fff;
  text-shadow:
    0 0 7px #fff,
    0 0 10px #fff,
    0 0 21px #fff,
    0 0 42px #0fa,
    0 0 82px #0fa,
    0 0 92px #0fa,
    0 0 102px #0fa,
    0 0 151px #0fa;
}
.bordersample{
  border: solid;
  border-color: red;
  border-radius: 40px;
  float: left;
  padding: 50px;
}
.bordersample2{
  background-color: black;
  border: solid;
  border-radius: 40px;
  float: left;
  padding: 50px;
}
.sample {
	background-color: cyan;
	color: black;
	border: 4px solid black;
	margin: 25px;
	padding: 10px;
}
#sampleid {
	background-color: orange;
	color: blue;
	padding: 40px;
	text-align: center;
}
</style>
</head>
<body>

<h1 style="font-size:100px; color:blue;">This is a heading font size 100px and color blue(CSS)</h1>
<p style="background-color:yellow;">Paragraph(p) with style attribute (background-color:yellow) </p>

<hr>

<p> Paragraph<br><b>paaragraph after a line break(br) with bold formatting</b></p>

<hr>

<p>hr was used to show thematic change (horizontal line)</p>
<p>this is a sentence with <span style="border: 1px solid black">inline</span> element.</p>

<hr>

<p>This is an example of abbr for Asia Pacific College <abbr title="Asia Pacific College">APC</abbr>.</p>
<img src="nilou.jpg" alt="image of a girl" width="450" height="250">
<p style="color:red;"> A red paragraph</p>
<p title="A title"> Title example</p>
<a href="https://www.youtube.com/">Hyperlink to Youtube</a>
<!-- this is a comment -->
<div class="sample">
<h3>Classes</h2>
<p>These texts are inside the class attribute</p>
</div>
<h1 id="sampleid">Example of using id attribute</h1>
<img src="../hutao.jpg" alt="image of a girl" width="450" height="250">
<p>This image is located in the folder one level up from the current folder</p>
<p> The html file has good readability thanks to style guide</p>
<p> Showing the less than sign: &lt; </p>
<p>Another example: 70 &lt; 100 </p>
<p>Examples of symbols that can be used: &forall;, &part;, &exist; </p>
<p>Lesson 2.20 - URL Encode </p>
<p>Lesson 2.21 - HTML vs XHTML</p>
<div class="bordersample">
  <h2 align="center">Sample red text in a red, curved border</h1>
</div>
<div class="bordersample2">
  <h1 class="neonText" align="center">Sample with neon colors using text shadow trick</h1>
</div>
</body>
</html>