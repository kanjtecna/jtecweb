@extends('backend.layouts.master')

@section('title')
    @include('backend.pages.accessorys.partials.title')
@endsection

@section('admin-content')
    @include('backend.pages.accessorys.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
            <form action="{{ route('admin.accessorys.update') }}" method="POST" enctype="multipart/form-data" data-parsley-validate data-parsley-focus="first">
                @csrf
                <div class="form-body">
                  <div class="card-body">
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="code">Mã linh kiện<span class="required">*</span></label>
                                    <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}"
                                        placeholder="Mã linh kiện" required
                                        data-parsley-required-message="Trường mã lịnh kiện là bắt buộc"  readonly/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="location_c">Vi trí (location_c)<span class="required">*</span></label>
                                    <input type="number" class="form-control" id="location_c" name="location_c" value="{{ old('location_c') }}"
                                        required data-parsley-required-message="Trường vitri c là bắt buộc" readonly/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="location">Vi trí (location)<span class="required">*</span></label>
                                    <input type="number" class="form-control" id="location" name="location" value="{{ old('location') }}"
                                        required data-parsley-required-message="Trường vị trí là bắt buộc" readonly/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="unit">Đơn vị</label>
                                    <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" readonly />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="material_norms">Định mức</label>
                                    <input type="text" class="form-control" id="material_norms" name="material_norms"
                                        value="{{ old('material_norms') }}" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="image">Ảnh linh kiện</label>
                                <input type="file" class="form-control dropify" data-height="270"
                                    data-allowed-file-extensions="png jpg jpeg webp" id="image" name="image"
                                    data-default-file="{{  old('image') != null ? asset('public/assets/images/accessory/' . old('image')) : null }}" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="content">Ghi chú</label>
                                    <input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row fixed-bottom">
                        <div class="col-md-6 form-actions mx-auto">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                Save</button>
                            <a href="{{ route('admin.accessorys.index') }}" class="btn btn-dark">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    $(".categories_select").select2({
        placeholder: "Select a Category"
    });
    </script>
@endsection
