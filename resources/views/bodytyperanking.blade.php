@foreach($bodytype_rankings as $bodytype_ranking)
{{ $bodytype_ranking->name }}{{ $bodytype_ranking->count }}
@endforeach
