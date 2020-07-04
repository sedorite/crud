@extends('content')
@section('card_title','ANSWER')
@section('title','ANSWER')
@section('footer','Copyright')
@section('content')

    <!-- /.card-header -->
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Judul Pertanyaan</th>
          <th>ISI</th>
          <th>Dibuat</th>
          <th>Diubah</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($data as $qe)
          <tr>
            <td>{{$qe->id}}</td>
            <td>{{$qe->judul}}</td>
            <td>{{$qe->isi}}</td>
            <td>{{$qe->created_at}}</td>
            <td>{{$qe->updated_at}}</td>
            <td>
              <a href="{{url('answer/create/'.$qe->id)}}" class="btn btn-xs btn-flat btn-primary">Jawab</a>
              <button type="button" id="{{$qe->id}}" class="btn btn-xs btn-flat btn-primary view_data" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-align-justify"></i>
              </button>              
            </td>
          </tr>    
          @endforeach
        
        </tbody>
      </table>
    <!-- /.card-body -->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detail_q">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  @push('datatable')
  <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script>
   $(document).ready(function(){  
      $('.view_data').click(function(){  
        console.log('cek');
           var q_id = $(this).attr("id");  
           $.ajax({  
                url:"{{url('/modal')}}",  
                method:"get",  
                data:{q_id:q_id},  
                success:function(data){  
                  console.log(data);
                     $('#detail_q').html(data);  
                     $('#exampleModal').modal("show");  
                }, error: function(err){
                  console.log(err);
                }
           });  
      });  
 });
  $(function () {
      $("#example1").DataTable();
  });
  </script>
  @endpush
@endsection