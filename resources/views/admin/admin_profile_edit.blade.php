@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">

    <!-- Main content -->
<div class="box-body">
    <div class="row">
    <div class="col">
        <h4>Admin Profile Edit</h4><hr>
    <form method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <h5>Admin User Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="text" name="name" class="form-control" required="" value="{{$editData->name}}"></div>
                        </div>

                    </div> <!-- end col md 6 -->


                    <div class="col-md-6">

                        <div class="form-group">
                            <h5>Admin Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <input type="email" name="email" class="form-control" required="" value="{{$editData->email}}"></div>
                        </div>

                    </div> <!-- end col md 6 -->

                </div> <!-- end row -->
            

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <h5>Profile Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="profile_photo_path" class="form-control" required="" id="image">
                            </div>
                        </div>

                    </div> <!-- end col md 6 -->

                    <img id="showImage" src="{{(!empty($adminData->profile_photo_path))?
                        url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg')}}"
                        style="width: 100px" height="100px">

                    <div class="col-md-6">

                    </div> <!-- end col md 6 -->




                </div>  <!-- end row -->   
    
    
                      
        <div class="text-xs-right">
    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">        
        </div>
    </form>
</div>
</div>

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    <!-- /.content -->
  </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload=function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    })


</script>
  @endsection