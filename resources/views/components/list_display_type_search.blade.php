@if ($search_type == '0')
    @include("components.list_display_publication")
@else
    @include("components.list_display_search")
@endif