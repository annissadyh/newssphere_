@extends('landingpage.layouts.landingpage')
@section('content')
<div class="row">
    @forelse ($article as $row)
        <div class="col-md-4 mt-3">
          <div class="card" >
              <img src="{{ asset('uploads/'. $row->media) }}" width="100px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="{{ route('detail-article', $row->slug) }}" style="text-decoration: none;">
                    {{ $row->title }} 
                  </a>
                </h5>
                {{-- <p class="card-text">{!! $row->content !!}</p> --}}
              </div>
              {{-- <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
              </ul> --}}
              <div class="card-body">
                <a href="#" class="card-link">{{ $row->users->name }}</a>
                <a href="#" class="card-link">{{ $row->category->name_category }}</a>
              </div>
          </div>
        </div>
    @empty
        <p>Data Masih Kosong</p>
    @endforelse
    
    {{-- <div class="col-md-4 mt-3">
        <div class="card">
            <img src="{{ asset('uploads/sepakbola.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="card">
            <img src="{{ asset('uploads/sepakbola.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 mt-5">
        <div class="card">
            <img src="{{ asset('uploads/sepakbola.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 mt-5">
        <div class="card">
            <img src="{{ asset('uploads/sepakbola.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 mt-5">
        <div class="card">
            <img src="{{ asset('uploads/sepakbola.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div> --}}
</div>   
@endsection
