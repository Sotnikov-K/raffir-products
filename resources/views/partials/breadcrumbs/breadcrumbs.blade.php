@unless ($breadcrumbs->isEmpty())
    <nav class="breadcrumbs-wrapper" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && !$loop->last)
                    <a href="{{ $breadcrumb->url }}">
                        <li class="breadcrumb-item breadcrumb-item-first">
                            <img class="breadcrumb-icon" src="/images/icons/{{$breadcrumb->icon}}">
                            {{ $breadcrumb->title }}
                        </li>
                    </a>
                @else
                    <li class="breadcrumb-item active" aria-current="page">
                        <img class="breadcrumb-icon" src="/images/icons/{{$breadcrumb->icon}}">
                        {{ $breadcrumb->title }}
                    </li>
                @endif

            @endforeach
        </ol>
    </nav>
@endunless

