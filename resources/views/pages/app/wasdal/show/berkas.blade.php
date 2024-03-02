@if (Auth::check() && Auth::user()->role  == "superadmin")
<div class="pull-right mb-2 mt-2 float-end">
    <a class="btn btn-primary" href="{{ route('berkas.create', ['wasdal_id'=>$wasdal->id]) }}">
        <i class="bi bi-folder-plus"></i> Tambah Berkas
    </a>
</div>
@endif
<br>
<br>
<!-- Table with stripped rows -->
<table id="myTable" class="table">
    <thead>
        <tr sty>
            <th style="width:2%">No</th>
            <th>Jenis Berkas</th>
            <th>Keterangan</th>
            <th>File</th>
            @if (Auth::check() && Auth::user()->role  == "superadmin")
            <th style="width:4%">Aksi</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($berkas as $index => $item)
        <tr>
            <td style="text-align: center;">{{ $index+1 }}</td>
            <td>{{ $item->jenis }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>
                <a href="../file/berkaspenghuni/{{$item->file}}" class="btn btn-primary btn-sm">
                    <i class="bi bi-file-earmark-pdf-fill"></i>
                </a>
            </td>
            @if (Auth::check() && Auth::user()->role  == "superadmin")
            <td style="text-align: center;">
                <form action="{{route('berkas.destroy', $item->id)}}" method="Post">
                    <a class="btn btn-warning btn-sm" href="{{route('berkas.edit', $item->id)}}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                        <i class="bi bi-trash-fill" style="color:white"></i>
                    </button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<!-- End Table with stripped rows -->