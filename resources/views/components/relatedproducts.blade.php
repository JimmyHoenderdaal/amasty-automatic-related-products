@props(['relatedIds', 'title' => 'More choices to go with your product'])

@if($relatedIds)
    <x-rapidez::productlist :title="$title" field="id" :value="explode(',', $relatedIds)"/>
@endif
