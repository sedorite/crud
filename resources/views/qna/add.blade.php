@extends('content')
@section('card_title','Data Table')
@section('title','Data Table')
@section('footer','Copyright')
@section('content')
<form action="{{url('pertanyaan/'.$id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group @error('judul') has-error @enderror">
      <label for="judul">Judul Pertanyaan <span class="required">*</span></label>
      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Pertanyaan" required="required" value="@if(isset($qe->judul)){{$qe->judul}}@else{{old('judul')}}@endif">
    </div>
    <div class="mb-3 @error('isi') has-error @enderror">
        <label for="isi">Textarea <span class="required">*</span></label>
        <textarea class="form-control" id="isi" name="isi" placeholder="Isi Pertanyaan" required>@if(isset($qe->isi)){{$qe->isi}}@else{{old('isi')}}@endif</textarea>
        {{-- <div class="invalid-feedback">
          Please enter a message in the textarea.
        </div> --}}
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection