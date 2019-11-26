<!DOCTYPE html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Data Mahasiswa</title>
</head>
<body>
    <main class="container-fluid">
        <header class="row">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold">Register</h2>
            </div>
        </header>

        <form class="form" method="post" action="/process" role="form">
                @csrf
                <div class="form-group row">
                    <div class="col-12 justify-content-center d-flex">
                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nama</span>
                            </div>
                            <input name="name" type="text" class="form-control" required placeholder="Input your name. . ." />
                        </div>
                    </div>

                    <div class="col-12 justify-content-center d-flex">
                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <span class="input-group-text">NIM</span>
                            </div>
                            <input name="name" type="text" class="form-control" required placeholder="Input your name. . ." pattern="[0-9]+"/>
                        </div>
                    </div>

                    <div class="col-12 justify-content-center d-flex">
                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Gender</span>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Male</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Female</label>
                              </div>
                              
                        </div>
                    </div>

                    <div class="col-12 justify-content-center d-flex">
                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Password</span>
                            </div>
                            <input name="name" type="text" class="form-control" required placeholder="Input your name. . ." />
                        </div>
                    </div>



                    <div class="col-12 justify-content-center d-flex">
                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Email</span>
                            </div>
                            <input name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" required placeholder="Input your email. . ." />
                        </div>
                    </div>
                    
                    <div class="col-12 justify-content-center d-flex">
                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Role</span>
                            </div>
                            <input name="name" type="text" class="form-control" required placeholder="Input your role. . ." />
                        </div>
                    </div>

                    <div class="col-12 justify-content-center d-flex">
                        <div class="input-group w-25">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Faculty</span>
                            </div>
                            <input name="name" type="text" class="form-control" required placeholder="Input your faculty. . ." />
                        </div>
                    </div>

                    {{--<p>Nama : <input type="text" name="name"></p>
                    <p>Email : <input type="text" name="email"></p>
                    <p>NIM : <input type="text" name="NIM"></p>--}}

                    

                </div>
                <div class="row form-group">
                        <div class="col-2"></div>
                        <div class="col-7 justify-content-end d-flex">
                        <button type="submit" name="comment" class="btn btn-primary">Simpan Data Mahasiswa</button>
                        </div>
                        <div class="col-3"></div>
                    </div>
        
            </form>
    </main>
</body>