@foreach ($posts as $post)
<div class="card mb-2">
    <div class="card-body">{{ $post->id }}
        <h5 class="card-title">{{ $post->module }}</h5>
        {!! $post->user_name !!}
    </div>
</div>
@endforeach
