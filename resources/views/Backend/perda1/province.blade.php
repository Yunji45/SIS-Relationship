@if(session()->has('berhasil'))
                        <div class="alert alert-success alert-dismissible show fade">
                            {{ session('berhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session()->has('gagal'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            {{ session('gagal') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

<form action="{{route('perda1.province.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input type="text" class="form-control" id="kode" name="kode">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" id="name" name="name">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ibukota</label>
    <input type="text" class="form-control" id="ibukota" name="ibukota">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

