@foreach($brand_rankings as $brand_ranking)
{{ $brand_ranking->name }}{{ $brand_ranking->count }}
@endforeach
