<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<style>
.page-break {
    page-break-after: always;
}
</style>
<table class="table">
    <thead>
        <tr>
            <th>NIP</th>
            <th>NAMA</th>
        </tr>
    </thead>
    <tbody>
    @foreach($guru as $g)
        <tr>
            <td>{{$g->nip}}</td>
            <td>{{$g->nama_tendik}}</td>
        </tr>
    <div class="page-break"></div>
    @endforeach
    </tbody>
</table>
</body>
</html>