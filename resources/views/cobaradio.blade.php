@extends('layout.templateuser')z
@section('content')
<form action="{{route('buat')}}"  method="post">
{{csrf_field()}}
<div class="form-check">
  <label class="form-check-label">
    Radio
  </label>
  <input class="form-check-input" type="radio" name="radio" id="radio1" value="Radio1">
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radio" id="radio2" value="Radio2">
</div>
 <br>
<button type="submit">Submit</button>
</form>
@endsection
