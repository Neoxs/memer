@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <form class="form-group" action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add new meme</h1><br><br><br>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Meme Caption</label>


                    <textarea id="caption" name="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus rows="3"></textarea>
                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <input type="file" class="custom-file-input" id="image" name="image">
                        @if ($errors->has('image'))

                                <strong>{{ $errors->first('image') }}</strong>

                        @endif
                    </div>
                </div><br>

                <div class="row">
                    <button class="btn btn-primary" type="submit">Add new post</button>
                </div>

            </div>
        </div>


    </form>
</div>
@endsection
