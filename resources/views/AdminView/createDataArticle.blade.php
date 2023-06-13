@extends('AdminView.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Tambah Data Article</h3>

                <div class="card-body" style="margin-bottom: 145px;">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                <form method="post" action="{{ route('PostCreateArticle') }}" enctype="multipart/form-data" id="myForm">
            @csrf
                <div class="form-group">
                    <div class="d-flex flex-column align-items-center" style="text-transform: none">
                        <img id="preview-image-before-upload" class="rounded-circle mt-5" width="150px">
                    </div>
                    <label for="article">Gambar Article</label>
                    <input type="file" id="image" class="form-control @error('article') is-invalid @enderror" name="article" accept="image/*">
                    @error('article')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Article" required autofocus>
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi" required >
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
        
    $(document).ready(function (e) {
    
    $('#image').change(function(){
                
        let reader = new FileReader();
    
        reader.onload = (e) => { 
    
        $('#preview-image-before-upload').attr('src', e.target.result); 
        }
    
        reader.readAsDataURL(this.files[0]); 
    
    });
    
    });
    
</script>

@endsection
