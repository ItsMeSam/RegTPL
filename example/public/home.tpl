<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ title }}</title>
	<link href="public/css/global.css" type="text/css" rel="stylesheet">
</head>
<body>
	Are constants working? {{# ARECONSTANTSWORKING #}}
	
	<table border="1">
		<thead>
			<tr>
				<th> Title </th>
				<th> Content </th>
			</tr>
		</thead>
		<tbody>
		{{- array -}}
			<tr>
				<td>{{ -value['title']- }}</td>
				<td>{{ -value['content']- }}</td>
			</tr>
		{{-end-}}
		</tbody>
	</table>	
	{{* A comment. This will be deleted by the parser, so you can't see it in the source of a document, like in HTML: <!-- comment --> *}}                                                   
</body>
</html>