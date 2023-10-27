<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Challenge 1</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    Nama: @yield('nama') <br>
    Kelas: @yield('kelas') <br>
    Jurusan: @yield('jurusan') <br>
    <br>
    <table>
        <tr>
            <th>Motor</th>

        </tr>
        @yield('motor')
    </table>




</body>

</html>