<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show File Upload</title>

</head>
<body>

<table border="1px">

<tr>
<th>Name</th>
<th>Download</th>
</tr>

@foreach($dataUpload as $file)
<tr>
<td>{{$file -> file_name}}</td>
<td><a href="{{ url("/file/download/{$file->file_name}") }}" target="_blank">Downloads</a></td>
<td><a href="{!! url("/file/download/{$file->file_name}" ) !!}" target="_blank" class="btn btn-danger"><i class="fa fa-file-pdf-o m-right-xs"></i>  PDF</a></td>
</tr>

    @endforeach

    </table>
</body>
</html>
