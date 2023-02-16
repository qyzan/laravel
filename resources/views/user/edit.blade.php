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
            </div>
          </section>
  <div class="nav flex-column">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              <div class="max-w-xl">
                  @include('user.update-profile-information-form')
              </div>
          </div>

          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              <div class="max-w-xl">
                  @include('user.update-password-form')
              </div>
          </div>
      </div>
  </div>
</x-admin-layout>
