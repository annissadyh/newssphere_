@extends('layouts.default')

@section('content')
    
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Artikel</div>
                        <a href="{{ route('article.create') }}" class="btn btn-primary btn-sm ml-auto">+ Tambah</a>
					</div>
				</div>
				<div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-primary">
                            {{ Session('success') }}
                        </div>
                    @endif
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Artikel</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Author</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($article as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>
                                    @if ($row->category)
                                        {{ $row->category->name_category }}
                                    @else
                                        No Category
                                    @endif
                                </td>
                                <td>{{ $row->users->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/'. $row->media) }}" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('article.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('article.destroy', $row->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i>
                                    </form>


                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
