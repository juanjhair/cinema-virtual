
<div class="container">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Insert</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" >Show</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Edit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="remove-tab" data-toggle="tab" href="#remove" role="tab" aria-controls="remove" aria-selected="false">Remove</a>
                </li>
            </ul>
        </div>
        <div class="card-body text-dark ">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="movie_name" class="font-weight-bold">Name</label>
                                    <input type="text" class="form-control" id="movie_name" placeholder="name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 mt-4" >
                                <div class="form-group">
                                    <input type="file" class="form-control-file">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-1">
                                <div class="form-group">
                                    <label for="movie_cost" class="font-weight-bold">Cost</label>
                                    <input type="number" step="0.01" class="form-control" id="movie_cost" placeholder="cost">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-1">
                                <div class="form-group">
                                    <label for="movie_age" class="font-weight-bold">Age</label>
                                    <input type="number" step="1" class="form-control" id="movie_age"  placeholder="age">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-1">
                                <div class="form-group">
                                    <label class="font-weight-bold">Gender</label>
                                    <select class="form-control">
                                        <option>genero</option>
                                        <option>Action</option>
                                        <option>Adventura</option>
                                        <option>Comedy</option>
                                        <option>Crime</option>
                                        <option>Drama</option>
                                        <option>Historical</option>
                                        <option>Horror</option>
                                        <option>Musicals</option>
                                        <option>Science fiction</option>
                                        <option>War</option>
                                        <option>Westerns</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-1">
                                <div class="form-group ">
                                    <label class="font-weight-bold">State</label>
                                    <select class="form-control">
                                        <option>estado</option>
                                        <option>Premiere</option>
                                        <option>Coming soon</option>
                                        <option>Estreno</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <label class="mt-2 font-weight-bold">Schedule</label>
                        
                        <div class="row mt-1">
                            <div class="col-12 col-lg-6">
                                <div class="row text-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                        <label class="">Spanish</label>
                                        <img src="images/icons/plus-circle-solid.svg" class="icons" id="spanish"></img>
                                    </div>
                                </div>
                                <div class="row bg-light">
                                    <div class="col-4">
                                        <label for="hour-start-spa-1">Start</label>
                                        <input type="text" class="form-control ui-menu-item timepicker mb-3" id="hour-start-spa-1" name="hour-start-spa-1">
                                    </div>
                                    <div class="col-4">
                                        <label for="hour-final-spa-1">End</label>
                                        <input type="text" class="form-control timepicker mb-3" id="hour-final-spa-1" name="hour-final-spa-1"> 
                                    </div>
                                    <div class="col-4 col-sm-3">
                                        <div class="form-group ">
                                            <label class="font-weight-bold" for="room-spa-1">Room</label>
                                            <select class="form-control mb-3" id="room-spa-1" name="room-spa-1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                                <div id="spanish-content"></div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row text-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                        <label class="">Subtitle</label>
                                        <img src="images/icons/plus-circle-solid.svg" class="icons" id="sub"></img>
                                    </div>
                                </div>
                                <div class="row bg-light">
                                    <div class="col-4">
                                        <label for="hour-start-sub-1">Start</label>
                                        <input type="text" class="form-control timepicker mb-3" id="hour-start-sub-1" name="hour-start-sub-1">
                                    </div>
                                    <div class="col-4">
                                        <label for="hour-final-sub-1">End</label>
                                        <input type="text" class="form-control timepicker mb-3" id="hour-final-sub-1" name="hour-final-sub-1"> 
                                    </div>
                                    <div class="col-4 col-sm-3" >
                                        <div class="form-group ">
                                            <label class="font-weight-bold" for="room-sub-1">Room</label>
                                            <select class="form-control mb-3" id="room-sub-1" name="room-sub-1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="sub-content"></div>
                            </div>
                        </div>
                    </form>     
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Show</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Edit</div>
                <div class="tab-pane fade" id="remove" role="tabpanel" aria-labelledby="contact-tab">Remove</div>
            </div>
        </div>
    </div>
</div>
<script>

var num_spa=1; //numero de inputs en español
var num_sub=1; //numero de inputs en sub
var num_spa_room=1; //number of input room
var num_sub_room=1;
$("#spanish").click(function(){
    num_spa++;
    num_spa_room++;
    var form_sche="<div class='col-4'><label for='hour-start-sub-"+num_sub+"'>Start</label><input type='text' class='form-control mb-3 timepicker' id='hour-start-sub-"+num_sub+"' name='hour-start-sub-"+num_sub+"'></div><div class='col-4'> <label for='hour-final-sub-"+num_sub+"'>End</label><input type='text' class='form-control mb-3 timepicker' id='hour-final-sub-"+num_sub+"' name='hour-final-sub-"+num_sub+"'></div><div class='col-4 col-sm-3'><label for='room-spa-"+num_spa_room+"'>Room</label><input type='text' class='form-control mb-3' id='room-spa-"+num_spa_room+"' name='room-spa-"+num_spa_room+"'></div>";
    if(num_spa%2==0){
        $("#spanish-content").append("<div class='row fondo'>"+form_sche+"</div>");
    }else{
        $("#spanish-content").append("<div class='row bg-light'>"+form_sche+"</div>");
    }
    
    
    
});
$("#sub").click(function(){
    num_sub++;
    num_sub_room++;
    var form_sche="<div class='col-4'><label for='hour-start-sub-"+num_sub+"'>Start</label><input type='text' class='form-control mb-3 timepicker' id='hour-start-sub-"+num_sub+"' name='hour-start-sub-"+num_sub+"'></div><div class='col-4'> <label for='hour-final-sub-"+num_sub+"'>End</label><input type='text' class='form-control mb-3 timepicker' id='hour-final-sub-"+num_sub+"' name='hour-final-sub-"+num_sub+"'></div><div class='col-4 col-sm-3'><label for='room-sub-"+num_sub_room+"'>Room</label><input type='text' class='form-control mb-3' id='room-sub-"+num_sub_room+"' name='room-sub-"+num_sub_room+"'></div>"
    
    if(num_sub%2==0){
        $("#sub-content").append("<div class='row '>"+form_sche+"</div>");
    }else{
        $("#sub-content").append("<div class='row bg-light'>"+form_sche+"</div>");
    }
});

$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 15,
    minTime: '1pm',
    maxTime: '11pm',
    defaultTime: '1pm',
    startTime: '10:00',
    dynamic: false,
    scrollbar: true
});

</script>

