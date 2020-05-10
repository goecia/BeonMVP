@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="left" class="col-sm-2 text-left">
        <h2>Users</h2>

        <select id="users" name="users" onchange="getUserInfo()">
            @foreach ($data as $datas)
                @if ($datas == reset($data))
                    <option id="{{ $datas->id }}" selected>{{ $datas->name }}</option>
                @else
                    <option id="{{ $datas->id }}">{{ $datas->name }}</option>
                @endif
            @endforeach
        </select>

        <table class="table table-bordered table-striped">
            <thead data-field="snum" data-formatter="LinkFormatter">
                <tr>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Administrador</th>
                </tr>
            </thead>
            <tbody id="user-table-body">
                <tr>
                    <td>{{ $data[0]->name }}</td>
                    <td>{{ $data[0]->email }}</td>
                    <td>{{ $data[0]->admin ? "SI" : "NO" }}</td>
                </tr>
            </tbody>
        </table>
        <input type="button" id="toggle" name="toggle" value="Toggle Admin" class="btn btn-info" onclick="toggleAdmin();">
    </div>

    <div id="middle" class="col-sm-8 text-center">
        <h2>ADMIN PAGE!</h2>
        <P><a href="/admin/lab" target="_blank">LAB</a></p>
        <P><a href="/demo" target="_blank">DEMO</a></p>
        <P><a href="/news" target="_blank">NOTICIAS</a></p>
        <P><a href="/" target="_blank">LANDING</a></p>
        <P><a href="/admin/blog" target="_blank">BLOG</a></p>
    </div>

    <div id="right" class="col-sm-2 text-left">
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/admin/admin.js') }}"></script>
@endsection
