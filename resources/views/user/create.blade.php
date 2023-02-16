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
                <form class="row g-4 needs-validation" novalidate action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name='name' value="{{ old('name') }}" class="form-control @error('email') border border-danger @enderror" aria-describedby="nama" placeholder="Name">
                    <div class="text-xs text-red-600">@error('name') {{ $message }} @enderror</div>
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') border border-danger @enderror" id="email" placeholder="Email" required>
                    <div class="text-xs text-red-600">@error('email') {{ $message }} @enderror</div>
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') border border-danger @enderror" id="password" placeholder="Password" required>
                    <div class="text-xs text-red-600">@error('password') {{ $message }} @enderror</div>
                  </div>
                  <div class="col-md-6">
                    <label for="password_confirmation" class="form-label">Email</label>
                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control @error('password_confirmation') border border-danger @enderror" id="password_confirmation" placeholder="password_confirmation" required>
                    <div class="text-xs text-red-600">@error('password_confirmation') {{ $message }} @enderror</div>
                  </div>
                  <select name='role' class="form-select" aria-label="Default select example">
                    <option selected>Role</option>
                    <option value="admin">Administrator</option>
                    <option value="user">User</option>
                  </select>
                  <div class="card-body text-left"><button type="submit" class="btn btn-dark">Submit</button> 
                    <a href="{{ route('user.index') }}" class="btn btn-dark">Back</a></div>
                  </div>
                </form>        
              </div>
            </section>  

</x-admin-layout>