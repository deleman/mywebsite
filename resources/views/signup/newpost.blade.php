@extends('layouts.app')

@push('css')

 * {
     color: blue !important;
 }
@endpush


@section('content')

<div class="container bg-secondary pt-3 pb-5" style="border-radius:10px; margin-top:-20px;">
    <div class="row">
        <div class="card col-8 m-auto" style="margin-top:-40px;">
            <div class="card-body">
                <h3 class="card-title text-center">New Post</h3>
                <h6 class="card-subtitle mb-2 text-center text-muted">Card subtitle</h6>

                <form class=" m-auto">

                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control  @error('fname') is-invalid @enderror" value="{{ old('fname') }}"  name="fname"  id="colFormLabel" placeholder="Your Name ...">
                        </div>

                        @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  name="email" id="colFormLabel" placeholder="your Email ...">
                        </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="validationTextarea">Summerry Content</label>
                        <textarea class="form-control   @error('contentsmall') is-invalid @enderror" value="{{ old('contentsmall') }}"  id="validationTextarea" name="contentsmall" placeholder="Small Content ..." required></textarea>

                        @error('contentsmall')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="validationTextarea">Full Content</label>
                        <textarea class="form-control @error('contentfull') is-invalid @enderror" value="{{ old('contentfull') }}"  id="validationTextarea" name="contentfull" rows="10" placeholder="Full Content ..." required></textarea>

                        @error('contentfull')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="form-group">
                        <select class="custom-select  @error('category') is-invalid @enderror" value="{{ old('category') }}" name="category" required>
                            <option value="">Choose type of post</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input  @error('file') is-invalid @enderror" value="{{ old('file') }}"  id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose image...</label>

                        @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>



                    <div class="form-group text-center mt-3">
                        <input type="submit" class="btn btn-primary w-50" value="Create">
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

@endsection


@push('navbar')

@endpush

@push('js')

@endpush
