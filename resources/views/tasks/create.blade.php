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
        <label>Location:</label></br>
         <div class="location">
       
        <!-- Button to Open the Modal -->
        <button type="button" id="open" class="btn btn-success" data-toggle="modal" data-target="#myModal" data-lat="5.134515" data-long="97.151759">
          Select Location
        </button>
        </br>
        <label for="user_id">Emp id:</label></br>
        <select name="user_id" id="user_id" name="user_id"></br>
        @php
                    $count = 1;
                @endphp
                @foreach($user as $item)
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


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Select Location</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
           <!-- show map here -->
            <div id="map"></div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</div>

<script>
 // This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
let map, infoWindow;
//{ lat: -34.397, lng: 150.644 }
function initMap(myLoc) {
  var marker = new google.maps.Marker({
            position: myLoc
        });
      var opt = {
            center: myLoc,
            zoom: 6,
        };
  map = new google.maps.Map(document.getElementById("map"),opt), {
    position:myLoc,
    zoom: 6,
    zoomControl: true,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
      mapTypeIds: ["roadmap", "terrain"],
    },
    scaleControl: true,
    streetViewControl: true,
    streetViewControlOptions: {
      position: google.maps.ControlPosition.LEFT_TOP,
    },
    rotateControl: true,
    fullscreenControl: true,
   
  };
  marker.setMap(map);
  
  infoWindow = new google.maps.InfoWindow();

  

  const locationButton = document.createElement("button");

  locationButton.textContent = "Pan to Current Location";
  locationButton.classList.add("custom-map-control-button");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}


$("#open").click(function(){
// get latitude and longitude that pass from open modal button
    initMap(new google.maps.LatLng($(this).data('lat'), $(this).data('long')));
    });

</script>
@stop