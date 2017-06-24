<option value="0">{{__('tour.destination')}}</option>
@foreach($locations as $location)
    <option value="{{$location->id}}">{{$location->translation()->first()->name}}</option>
@endforeach