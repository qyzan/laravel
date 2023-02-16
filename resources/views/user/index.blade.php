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
           <div class="container">
            <div class="mb-2">
                <a href="{{ route('user.create') }}"><button class="btn btn-dark">+ Add User</button>
                </a>
                <div class="mb-2 flex justify-end">
                    <input type="text" name="search" id="search" class="px-2 py-1 focus:ring-indigo-500 focus:border-black-500 rounded-none rounded-1-md sm:text-sm border-gray-300">
                    <button class="rounded-r-md border border-2-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 text-white-600 hover:text-black hover:bg-black-600">Search</button>
                </div>
                </div>
            <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Create At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($user as $item)
                  <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                        <td width='13%'>
                          <form action="{{ route('user.destroy',$item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('user.edit',$item->id) }}" class="btn btn-success p-2 btn-sm">Edit</a>
                            <button type='submit' class="btn btn-danger p-2 btn-sm">Delete</button>
                          </form>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach

                </tbody>
              </table>
          </div>             

</x-admin-layout>