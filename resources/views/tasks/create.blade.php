@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">tasks Page</div>
  <div class="card-body">
  <a href="{{ url('/task/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>

    
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Task ID:</label></br>
        <input type="text" name="task_id" id="task_id" class="form-control"></br>
        <label>Task Title:</label></br>
        <input type="text" name="task_title" id="task_title" class="form-control"></br>
        <label>Task Description:</label></br>
        <input type="text" name="task_desc" id="task_desc" class="form-control"></br>
        <label>Points:</label></br>
        <input type="text" name="points" id="points" class="form-control"></br>
        <label>Address:</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <div id="map" style="height:400px; width: 800px;" class="my-3"></div>

        <div class="col-5">
                        <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
                    </div>
                </div>

<script>
    let map;

    
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8,
            scrollwheel: true,
        });
        const uluru = { lat: -34.397, lng: 150.644 };
        let marker = new google.maps.Marker({
            position: uluru,
            map: map,
            draggable: true
        });
        google.maps.event.addListener(marker,'position_changed',
            function (){
                let lat = marker.position.lat()
                let lng = marker.position.lng()
                $('#lat').val(lat)
                $('#lng').val(lng)
            })
        
        google.maps.event.addListener(map,'click',
        function (event){
            pos = event.latLng
            marker.setPosition(pos)
        })
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUxlxBL-MdWP03LiKws3eP997Ka93m04Y&callback=initMap"
        type="text/javascript"></script>
       

        
        <label>Deadline:</label></br>
        <input type="date" name="deadline" id="deadline" class="form-control"></br>
       
        
        <label for="user_id">Emp id:</label></br>
        <select name="user_id" id="user_id" name="user_id"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($employee as $item)
                    @if(($count == 1) and (old('user_id') <> $item['user_id']))
                        <option value="{{ $item['user_id'] }}" selected>{{ $item['user_id'] }}</option>  
                    @elseif(old('user_id') === $item['user_id'])
                        <option value="{{ $item['user_id'] }}" selected>{{ $item['user_id'] }}</option>     
                    @else
                        <option value="{{ $item['user_id'] }}">{{ $item['user_id']}}</option>
                    @endif
                    @php
                       $count++;
                    @endphp
                @endforeach
        </select></br>


        


        
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <a href="dashboard">Home</a>
                            <a href="loginAdmin">Logout</a>
  </div>
</div>


