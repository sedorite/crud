@extends('content')
@section('card_title','FORM JAWAB')
@section('title','FORM JAWAB')
@section('footer','Copyright')
@section('content')
<form action="{{url('answer/')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group @error('judul') has-error @enderror">
      <label for="id_pertanyaan">ID Pertanyaan <span class="required">*</span></label>
      <input type="text" class="form-control" id="id_q" name="id_q" placeholder="ID Pertanyaan" required="required" value="@if(isset($qe->id)){{$qe->id}}@else{{old('id')}}@endif" readonly>
    </div>
    <div class="mb-3 @error('isi') has-error @enderror">
        <label for="isi">Jawaban <span class="required">*</span></label>
        <textarea class="form-control" id="isi" name="isi" placeholder="Isi Jawaban" required></textarea>
        {{-- <div class="invalid-feedback">
          Please enter a message in the textarea.
        </div> --}}
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection