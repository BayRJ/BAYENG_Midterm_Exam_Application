<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Application</title>
    <style>
        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
            font-family: Helvetica, Arial, sans-serif;
        }
        th, td {
            padding: 15px;
            border: 1px solid;
}
    </style>
</head>
<body>
<table style=' margin: 50px auto; padding:50px;'>
    @foreach($products as $index => $product)
    <tr>
        <td >
            <h1 class="text-3xl text-red-500">{{$index + 1}}.) {{ $product}}</h1>
        </td>

    </tr>
    @endforeach
</table>
</body>
</html>