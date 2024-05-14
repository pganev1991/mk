@extends('panel.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Добави роля</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Добави нова роля</h5> <!-- Може също да бъде преведено, ако е нужно -->

                    <!-- General Form Elements -->
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label"><b>Наименование</b></label>
                            <div class="col-sm-10">
                                <input type="text" name="name" required class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label"><b>Ниво на достъп</b></label>
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        @foreach($getPermission as $permission)
                                        <tr>
                                            <td style="font-weight: bold;">{{ $permission['name'] }}</td>
                                            @foreach($permission['group'] as $group)
                                            <td>
                                                <div class="form-check">
                                                  <label>
                                                    <input class="form-check-input" type="checkbox" name="permission_id[]" value="{{ $group['id'] }}">
                                                        {{ $group['name'] }}
                                                  </label>
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Добавяне</button>
                            </div>
                        </div>
                    </form>
                    <!-- End General Form Elements -->

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
