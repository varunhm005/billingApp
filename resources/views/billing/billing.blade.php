@extends('layout.master')

@section('billings')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Default form</h4> -->
                        <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Billing Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Upload Billing</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Amount</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">GL Code</label>
                                <select class="form-control">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Cost Centre</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Billings</h4>
                        <!-- <p class="card-description">
                      Add class <code>.table</code>
                    </p> -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Billing Name</th>
                                        <th style="width: 10%;">Billing Image</th>
                                        <th>Amount</th>
                                        <th>GL Code</th>
                                        <th>Cost Centre</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jacob Wilson</td>
                                        <td> <img src="./images/sampleBill.png" alt="" style="width: 100%; height: 10%; border-radius: unset;"> </td>
                                        <td>12</td>
                                        <td>1</td>
                                        <td>new cost</td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                        <td> <i class="mdi mdi-lead-pencil" role="button"></i> | <i class="mdi mdi-eye" role="button"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Andrew Wilson</td>
                                        <td> <img src="./images/sampleBill.png" alt="" style="width: 100%; height: 10%; border-radius: unset;"> </td>
                                        <td>12</td>
                                        <td>1</td>
                                        <td>new cost</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                        <td> <i class="mdi mdi-lead-pencil" role="button"></i> | <i class="mdi mdi-eye" role="button"></i> </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:./partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>

@endsection