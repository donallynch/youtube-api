@foreach($results as $key => $item)
    <div class="media youtube-item">
        <img src="https://img.youtube.com/vi/{!! $item['id']->videoId !!}/3.jpg" class="mr-3">
        <div class="media-body">
            <h6 class="mb-0">{!! $item['snippet']->title !!}</h6>
            <small>{!! __('messages.published-by', ['name' => $item['snippet']->channelTitle]) !!} &middot; {!! __('messages.published-on', ['date' => date('Y-m-d', strtotime($item['snippet']->publishedAt))]) !!}</small>
            <br>
            <div class="item-body">
                {!! $item['snippet']->description !!}
            </div>
        </div>
    </div>
    <hr>
@endforeach