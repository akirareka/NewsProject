@if (Session::has('message'))
 <h>{{ Session::get('message') }}</h>
@endif