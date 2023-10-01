@extends('layout.master')

@section('profile')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="text-center">
                <img src="./images/faces/face28.jpg" alt="" width="10%" class="pt-4">
            </div>

            <div class="row" style="padding: 30px 30px 50px 30px;">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 font-weight-bold">Name: </div>
                        <div class="col-md-8">John Kennedy</div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-4 font-weight-bold">Email: </div>
                        <div class=" col-md-8">johnkennedy@gmail.com</div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-4 font-weight-bold">Phone: </div>
                        <div class=" col-md-8">8055552233</div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 font-weight-bold">Alternate Number: </div>
                        <div class=" col-md-8">8055552236</div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-4 font-weight-bold">Gender: </div>
                        <div class=" col-md-8">Male</div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-4 font-weight-bold">Status: </div>
                        <div class=" col-md-8">Active</div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:./partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                2021.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                with <i class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>

@endsection