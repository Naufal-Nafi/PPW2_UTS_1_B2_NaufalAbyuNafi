@extends('layout.layout')
@section('content')
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>

        </tr>
    <tbody>
        @foreach ($data_pemain as $index => $pemain)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
    </thead>
</table>
@endsection