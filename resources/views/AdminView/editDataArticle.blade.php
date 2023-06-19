@extends('AdminView.layout')
@section('content')
<div class="container mt-4">
    <div class="container" style="text-transform: capitalize">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3>Form Edit Data Article</h3>
                <form method="post" enctype="multipart/form-data" action="{{ route('UpdateArticle', [$article->id]) }}"
                    id="myForm">
                    @csrf
                    <div class="form-group">
                        <div class="d-flex flex-column align-items-center" style="text-transform: none">
                            <img id="preview-image-before-upload" class="rounded-circle mt-5" width="150px"
                                src="/storage/{{ $article->article }}"">
                    </div>
                    <label for=" gambar">Gambar Article</label>
                            <input type="file" id="image" class="form-control @error('gambar') is-invalid @enderror"
                                name="gambar" value="/storage/{{ $article->gambar }}">
                            @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                                value="{{ old( 'judul', $article->judul) }}" required autofocus>
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis"
                                class="form-control @error('penulis') is-invalid @enderror"
                                value="{{ old( 'judul', $article->penulis) }}" required>
                            @error('penulis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror"
                                value="{{ old( 'judul', $article->tahun) }}" required>
                            @error('tahun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                rows="5" required>{{ old('deskripsi', $article->deskripsi) }}</textarea>
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
$(document).ready(function(e) {

    $('#image').change(function() {

        let reader = new FileReader();

        reader.onload = (e) => {

            $('#preview-image-before-upload').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

});
</script>

@endsection