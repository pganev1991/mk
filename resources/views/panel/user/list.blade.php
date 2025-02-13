@extends('panel.layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Потребители</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Списък с потребителите</h5>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a class="btn btn-primary" style="margin-top: 10px;" href="{{ url('panel/user/add') }}">Добави</a>
                            </div>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Потребителско име</th>
                                <th scope="col">Електронен адрес</th>
                                <th scope="col">Роля</th>
                                <th scope="col">Институция</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->role_name }}</td>
                                <td>{{ $value->institution }}</td>
                                <td>
                                    <a href="{{ url('panel/user/edit/' .$value->id) }}" class="btn btn-primary btn-sm">Редактирай</a>
                                    <a href="{{ url('panel/user/delete/' .$value->id) }}" class="btn btn-danger btn-sm">Изтрий</a>
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