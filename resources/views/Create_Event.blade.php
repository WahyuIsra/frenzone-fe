<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Add Event</title>
</head>

<body>
    <main class="container-fluid">
        <header class="row">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold">Add Event</h2>
            </div>
        </header>
        <form class="form" method="post" action="/process" role="form">
            @csrf
            <div class="form-group row">
                <div class="col-12 justify-content-center d-flex">
                    <div class="input-group w-25">
                        <form>
                            <div class="form-group row">
                                <label for="Genre" class="col-sm-2 col-form-label">Genre</label>
                                <div class="col-sm-10">
                                    <select class="custom-select">
                                        <option selected="">Select your Genre Event</option>
                                        <option value="1">Game</option>
                                        <option value="2">Sport</option>
                                        <option value="3">Education</option>
                                        <option value="4">Hobby</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 justify-content-center d-flex">
                    <div class="input-group w-25">
                        <form>
                            <div class="form-group row">
                                <label for="GenreCategory" class="col-sm-2 col-form-label">Genre Category</label>
                                <div class="col-sm-10">
                                    <select class="custom-select">
                                        if(value genre==1){
                                        <option selected="">Select your Game Category</option>
                                        <option value="1">MOBA</option>
                                        <option value="2">FPS</option>
                                        <option value="3">ARCADE</option>
                                        <option value="4">SIMULATOR</option>
                                        }else if(value genre==2){
                                        <option selected="">Select your Sport Category</option>
                                        <option value="1">SWIMMING </option>
                                        <option value="2">BADMINTON</option>
                                        <option value="3">GOLF</option>
                                        <option value="4">JOGGING</option>
                                        <option value="5">GYM</option>
                                        }else if(value genre==3){
                                        <option selected="">Select your Education Category</option>
                                        <option value="1">STUDY GROUP</option>
                                        <option value="2">HOMEWORK</option>
                                        <option value="3">COMPUTER SIENCE</option>
                                        <option value="4">VISUAL KOMUNIKATION DESIGN</option>
                                        <option value="5">ACCOUNTING</option>
                                        <option value="5">BUSINESS</option>
                                        }
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 justify-content-center d-flex">
                    <div class="input-group w-25">
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Slot</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="Slot" placeholder="Isi slot yang ingin dibuka" max="10">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 justify-content-center d-flex">
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Date</span>
                        </div>
                        <input type="date" name="date" />
                    </div>
                </div>
                <div class="col-12 justify-content-center d-flex">
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Time</span>
                        </div>
                        <input type="time" name="time" />
                    </div>
                </div>
                <div class="col-12 justify-content-center d-flex">
                    <div class="input-group w-25">
                            <form>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Locat ion</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Slot" placeholder="Isi slot yang ingin dibuka" max="10">
                                                    <button class="btn btn-success" type="button">Open Map</button>
                                                  
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-2"></div>
                <div class="col-7 justify-content-end d-flex">
                    <button type="submit" name="comment" class="btn btn-primary">Create Event</button>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </main>
</body>