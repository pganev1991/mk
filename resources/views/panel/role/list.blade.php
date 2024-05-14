@extends('panel.layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Роли</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Списък на ролите</h5>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                            @if(!empty($PermissionAdd))
                                <a class="btn btn-primary" style="margin-top: 10px;" href="{{ url('panel/role/add') }}">Добави</a>
                            @endif
                            </div>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Роля</th>
                                <th scope="col">Дата на създаване</th>
                                @if(!empty($PermissionEdit) || !empty($PermissionDelete))
                                <th scope="col">Действия</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                @if(!empty($PermissionEdit))
                                    <a href="{{ url('panel/role/edit/' .$value->id) }}" class="btn btn-primary btn-sm">Редактирай</a>
                                @endif
                                @if(!empty($PermissionDelete))
                                    <a href="{{ url('panel/role/delete/' .$value->id) }}" class="btn btn-danger btn-sm">Изтрий</a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection