
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
                            <div class="col-5 col-sm-4 col-md-3 col-lg-2">
                                <label class="font-weight-bold">Add</label>
                                <img src="images/icons/plus-circle-solid.svg" class="icons" id="add-room"></img>
                            </div>
                            <div class="col-7 col-sm-8 col-md-9 col-lg-10 text-danger">
                                <label class="font-italic" id="message"></label>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="row bg-light">
                                    <div class="col-3">
                                        <label for="room-1">Room</label>
                                        <input type="text" class="form-control mb-3" id="room-1" name="room-1">
                                    </div>
                                    <div class="col-3">
                                        <label for="seats-1">Seast</label>
                                        <input type="text" class="form-control mb-3" id="seats-1" name="seats-1"> 
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group ">
                                            <label class="font-weight-bold" for="state-1">State</label>
                                            <select class="form-control mb-3" id="state-1" name="state-1">
                                                <option>Enabled</option>
                                                <option>Disabled</option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 offset-lg-3" id="room-content">
                                
                            </div>    
                        </div>
                        <button class="btn btn-success" id="btn-rooms">Success</button>
                    </form>
                         
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Show</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Edit</div>
                <div class="tab-pane fade" id="remove" role="tabpanel" aria-labelledby="contact-tab">Remove</div>
            </div>
        </div>
    </div>
</div>


