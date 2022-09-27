
    @if ($paginator->hasPages())
        <nav class="pagination-nav">
            <div class="pagination-statistic flex-sm-fill d-sm-flex">     
                    <p class="small text-muted">
                        {!! __('Showing') !!}
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                        {!! __('of') !!}
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        {!! __('results') !!}
                    </p>
            </div>
        </nav>
    @endif
