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
            <div class="mr-3"><strong>25</strong> publications</div>
            <div class="mr-3"><strong>951</strong> abonnés</div>
            <div class="mr-3"><strong>3</strong> abonnements</div>
        </div>
        <div class='mt-3'>
            <div class="font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url}}
            </a></div>
        </div>
      </div>

    </div>
    <div class="row mt-5">
        <div class="col-4">
            <img src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c195.0.734.734a/s640x640/102630911_1764511050355342_5607511770354271020_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=110&_nc_ohc=0afd1uQr5WkAX9SQya9&oh=b022742ffafc8fc97bbc06981d3d15e5&oe=5F4C6FAF" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/e35/c140.0.360.360a/s240x240/101487561_570130620549562_7215180394631365178_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=110&_nc_ohc=H3_iXQ2MJLQAX_gSMvj&oh=faf8b3b2db652d0c1bf4eef91695321f&oe=5F4ACF77" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/e35/c125.0.500.500a/s320x320/92834302_699713354174221_7602085697416445888_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=101&_nc_ohc=fAqdu522jkUAX80TveF&oh=bfb40a0ad5cc9005378df11e0b4ce776&oe=5F4E5CC4" class="w-100">
        </div>
    </div>
</div>
@endsection
