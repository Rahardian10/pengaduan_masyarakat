<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Judul</th>
            <th>Isi laporan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($pengaduan as $user)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $user->tgl_pengaduan }}</td>
            <td>{{ $user->nik }}</td>
            <td>{{ $user->judul }}</td>
            <td>{!! $user->isi_laporan !!}</td>
            <td>{{ $user->level }}</td>
        </tr>
    @endforeach
    </tbody>
</table>