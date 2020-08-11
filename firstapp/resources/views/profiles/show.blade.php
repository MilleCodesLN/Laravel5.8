@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
      <div class="col-4 text-center">
          <img src="https://scontent-cdg2-1.cdninstagram.com/v/t51.2885-15/e35/s150x150/100091395_613567476177619_1184006016704636123_n.jpg?_nc_ht=scontent-cdg2-1.cdninstagram.com&_nc_cat=107&_nc_ohc=9SM7RPOS0P0AX99Y--k&oh=9667a741f3a7d27fa66b67da64b27b63&oe=5F4E1EF2" alt="" class="rounded-circle">
      </div>
      <div class="col-8">
        <div class="d-flex align-items-baseline">

            <div class=' h4 mr-3 pt-2'>{{$user->username}}</div>
            <button class='btn btn-sm btn-primary'>S'abonner</button>
        </div>
        <div class="d-flex mt-3">
            <div class="mr-3"><strong>{{ $user->posts->count()}}</strong> publication(s)</div>
            <div class="mr-3"><strong>951</strong> abonnés</div>
            <div class="mr-3"><strong>3</strong> abonnements</div>
        </div>
        @can('update', $user->profile)
            <a href="{{route('profiles.edit', $user->username) }}" class="btn btn-outline-secondary mt-3">Modifier mes informations</a>
        @endcan
        <div class='mt-3'>
            <div class="font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url}}
            </a></div>
        </div>
      </div>

    </div>
    <div class="row mt-5">
        @foreach ($user->posts as $post)
        <div class="col-4">
        <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                <img src="{{ asset('storage') .'/'. $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
