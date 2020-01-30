@foreach($results as $key => $item)
    <div class="media youtube-item">
        <img src="https://img.youtube.com/vi/{!! $item['id']->videoId !!}/3.jpg" class="mr-3">
        <div class="media-body">
            <h5 class="mt-0">{!! $item['snippet']->title !!}</h5>
            by {!! $item['snippet']->channelTitle !!} &middot; {!! $item['snippet']->publishedAt !!}
            <br>
            {!! $item['snippet']->description !!}<br>
        </div>
    </div>
    <hr>
@endforeach