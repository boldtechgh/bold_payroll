<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manage User</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class='table' id="table1">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Contact</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->contact }}</td>
                                    <td>{{ $user->user_type }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td class="d-flex">
                                        <a type="button" class="btn btn-info me-1 mb-1"
                                            href="/users/{{ $user->id }}/edit"><i class="fa fa-pen"></i></a>
                                        <form action="/users/{{ $user->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            &nbsp;
                                            <button type="submit" class="btn btn-danger me-1 mb-1"
                                                onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</x-layout>
