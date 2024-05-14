@extends('panel.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Редактирай потребител</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Редактиране на потребител</h5>

                    <!-- General Form Elements -->
                    <form action="" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="select" class="col-sm-3 col-form-label"><b>Роля:</b></label>
                            <div class="col-sm-4">
                              <select class="form-control" name="role_id">
                                <option value="">Избери роля</option>
                                @foreach($getRole as $value)
                                  <option value="{{ $value->id }}" {{ ($getRecord->role_id == $value->id) ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="selectInstitution" class="col-sm-3 col-form-label"><b>Институция:</b></label>
                            <div class="col-sm-4">
                              <select class="form-control" name="institution_id">
                                <option value="">Избери институция</option>

                              </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label"><b>Потребителско име:</b></label>
                            <div class="col-sm-4">
                                <input type="text" name="name" value="{{ old('name', $getRecord->name) }}" required class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-3 col-form-label"><b>Електронна поща:</b></label>
                            <div class="col-sm-4">
                                <input type="email" name="email" value="{{ old('email', $getRecord->email) }}" required class="form-control">
                                <div style="color: red">{{ $errors->first('email') }}</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputMobile" class="col-sm-3 col-form-label"><b>Мобилен телефон:</b></label>
                            <div class="col-sm-4">
                                <input type="tel" name="gsm" value="{{ old('gsm', $getRecord->gsm) }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPhone" class="col-sm-3 col-form-label"><b>Служебен телефон:</b></label>
                            <div class="col-sm-4">
                                <input type="tel" name="phone" value="{{ old('phone', $getRecord->phone) }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label"><b>Парола:</b></label>
                            <div class="col-sm-4">
                                <input type="password" name="password" class="form-control">
                                (Ако не искате да промените данните си, оставете полетата празни!)
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Промяна</button>
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
