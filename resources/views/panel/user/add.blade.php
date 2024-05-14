@extends('panel.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Добави потребител</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Добави нов потребител</h5>

                    <!-- General Form Elements -->
                    <form action="" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="select" class="col-sm-3 col-form-label"><b>Роля:*</b></label>
                            <div class="col-sm-4">
                              <select class="form-control" name="role_id" required>
                                <option value="">Избери роля</option>
                                @foreach($getRole as $value)
                                  <option value="{{ $value->id }}" {{ (old('role_id') == $value->id) ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="select" class="col-sm-3 col-form-label"><b>Институция:*</b></label>
                            <div class="col-sm-4">
                              <select class="form-control" name="role_id" required>
                                <option value="">Избери институция</option>
                                @foreach($getRole as $value)
                                  <option value="{{ $value->id }}" {{ (old('role_id') == $value->id) ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label"><b>Потребителско име:*</b></label>
                            <div class="col-sm-4">
                                <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label"><b>Електронна поща:*</b></label>
                            <div class="col-sm-4">
                                <input type="email" name="email" value="{{ old('email') }}" required class="form-control">
                                <div style="color: red">{{ $errors->first('email') }}</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label"><b>Мобилен телефон:</b></label>
                            <div class="col-sm-4">
                                <input type="tel" name="gsm" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label"><b>Служебен телефон:</b></label>
                            <div class="col-sm-4">
                                <input type="tel" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label"><b>Парола:*</b></label>
                            <div class="col-sm-4">
                                <input type="password" name="password" required class="form-control">
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
