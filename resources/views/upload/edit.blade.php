<x-admin-layout>
    <div class="main-pages">
        <div class="container-fluid">
          <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
              <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                  <h2>{{ $title }}</h2>
                </div>
                <form class="row g-4 needs-validation" novalidate action="{{ route('upload.update',$edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-6">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" name='nama' value="{{(isset($edit))?$edit->nama:old('nama') }}" class="form-control @error('nama') border border-danger @enderror" aria-describedby="nama" placeholder="Name" autofocus>
                    <div class="text-xs text-red-600">@error('nama') {{ $message }} @enderror</div>
                  </div>
                  <div class="col-md-6">
                    <label for="tag" class="form-label">Tag</label>
                    <input type="text" name="tag" value="{{(isset($edit))?$edit->tag:old('tag') }}" class="form-control @error('tag') border border-danger @enderror" id="tag" placeholder="Tag" required>
                    <div class="text-xs text-red-600">@error('tag') {{ $message }} @enderror</div>
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">Description</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') border border-danger @enderror" id="deskripsi" rows="3" placeholder="Your Document Description....">{{(isset($edit))?$edit->deskripsi:old('deskripsi') }}</textarea>
                    <div id="deskripsi" class="form-text">We'll never share your information with anyone else.</div>
                    <div class="text-xs text-red-600">@error('deskripsi') {{ $message }} @enderror</div>
                  </div>
                  <div class="col-mb-3">
                    <label for="file" class="form-label" name="file">Input File</label>
                    <input name="file" class="form-control @error('file')@enderror" type="file" id="file" name="file">
                    <div id="deskripsi" class="form-text">File extension : pdf,docx</div>
                    <div class="text-xs text-red-600">@error('file') {{ $message }} @enderror</div>
                  </div>
                  <button type="submit" class="btn btn-dark col-mb-3 flex justify-end">Submit</button>
                </form>        
              </div>
            </section>  

</x-admin-layout>