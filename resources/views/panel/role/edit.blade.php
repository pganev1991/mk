@extends('panel.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Редактирай роля</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Редактиране на ролята</h5>

                    <!-- General Form Elements -->
                    <form action="" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label"><b>Наименование</b></label>
                            <div class="col-sm-10">
                              <input type="text" name="name" value="{{ $getRecord->name }}" required class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label"><b>Ниво на достъп</b></label>
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        @foreach($getPermission as $value)
                                        <tr>
                                            <td style="font-weight: bold;">{{ $value['name'] }}</td>
                                            @foreach($value['group'] as $group)
                                              @php
                                                $checked = '';
                                              @endphp
                                              @foreach($getRolePermission as $role)
                                                @if($role->permission_id == $group['id'])
                                                  @php
                                                    $checked = 'checked';
                                                  @endphp
                                                @endif
                                              @endforeach
                                            <td>
                                                <div class="form-check">
                                                  <label>
                                                    <input class="form-check-input" type="checkbox" {{ $checked }} name="permission_id[]" value="{{ $group['id'] }}">
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
                                <button type="submit" class="btn btn-primary">Промени</button>
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
