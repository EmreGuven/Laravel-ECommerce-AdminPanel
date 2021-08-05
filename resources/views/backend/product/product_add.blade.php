@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">

       <!-- Basic Forms -->
<div class="box">
    <div class="box-header with-border">
    <h4 class="box-title">Add Product</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <div class="row">
        <div class="col">
    <form method="POST" action="{{route('product-store')}}" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">		
            
            <div class="row"> <!-- start 1st row -->

                <div class="col-md-4">

                <div class="form-group">
                    <h5>Brand Select <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="brand_id" class="form-control" required="">
                            <option value="" selected="" disabled="">Select Brand</option>
                            @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand_name}}</option>	
                            @endforeach
                        </select>
                        @error('brand_id') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                        </div>
                </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Category Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="category_id" class="form-control" required="">
                                <option value="" selected="" disabled="">Select Category</option>
                                @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name}}</option>	
                                @endforeach
                            </select>
                            @error('category_id') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror 
                            </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>SubCategory Select <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="subcategory_id" class="form-control" required="">
                                <option value="" selected="" disabled="">Select SubCategory</option>
                            </select>
                            @error('subcategory_id') 
                            <span class="text-danger">{{ $message }}</span>
                            @enderror 
                            </div>
                    </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 1st ro-->


            <div class="row"> <!-- start 2st row -->

                <div class="col-md-4">

                <div class="form-group">
                    <h5>SubSubCategory Select <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="subsubcategory_id" class="form-control" required="">
                            <option value="" selected="" disabled="">Select SubSubCategory</option>
                        </select>
                        @error('subsubcategory_id') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                        </div>
                </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Name <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="product_name" class="form-control" required="">
                        @error('product_name') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Code <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="product_code" class="form-control" required="">
                        @error('product_code') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 2st ro-->

            <div class="row"> <!-- start 3st row -->

                

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Quantity <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="product_qty" class="form-control">
                        @error('product_qty') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Tags <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="product_tags" class="form-control" value="Lorem,Ipsum,Amet" data-role="tagsinput" required="">
                        @error('product_tags') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Size <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="product_size" class="form-control" value="Small,Medium,Large" data-role="tagsinput" required="">
                        @error('product_size') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 3st row-->

            <div class="row"> <!-- start 4st row -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Color <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="product_color" class="form-control" value="Red,Blue,Yellow" data-role="tagsinput" required="">
                        @error('product_color') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Selling Price <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="selling_price" class="form-control" required="">
                        @error('selling_price') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Product Discount Price <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="text" name="discount_price" class="form-control" required="">
                        @error('discount_price') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

            </div> <!-- end 4st row-->

            <div class="row"> <!-- start 5st row -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Main Thumblnail <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="file" name="product_thambnail" class="form-control" onchange="mainThamUrl(this)" required="">
                        @error('product_thambnail') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <img src="" id="mainThmb">
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Multiple Image <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg" required="">
                        @error('multi_img') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="row" id="preview_img"></div>
                        </div>
                    </div>

                </div> <!-- end col md 4 -->

                <div class="col-md-4">

                    <div class="form-group">
                        <h5>Short Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <textarea name="short_descp" id="textarea" class="form-control" required placeholder="Short Description"></textarea>
                        </div>
                    </div>

                </div> <!-- end col md 6 -->

            </div> <!-- end 5st row-->

            <div class="row"> <!-- start 6st row -->

                <div class="col-md-12">

                    <div class="form-group">
                        <h5>Long Description <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <textarea id="editor1" name="long_descp" rows="10" cols="80" required="">Long Description</textarea>
                        </div>
                    </div>

                </div> <!-- end col md 6 -->

            </div> <!-- end6st row-->
                <hr>

            
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
                            <label for="checkbox_2">Hot Deals</label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox" id="checkbox_3" name="featured" value="1">
                            <label for="checkbox_3">Featured</label>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="controls">
                        <fieldset>
                            <input type="checkbox" id="checkbox_4" name="special_offer" value="1">
                            <label for="checkbox_4">Special Offer</label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox" id="checkbox_5" name="special_deals" value="1">
                            <label for="checkbox_5">Special Deals</label>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-xs-right">
        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
        </div>
    </form>

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
  
<script type="text/javascript">
$(document).ready(function() {
$('select[name="category_id"]').on('change', function(){
    var category_id = $(this).val();
    if(category_id) {
        $.ajax({
            url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
            type:"GET",
            dataType:"json",
            success:function(data) {
                $('select[name="subsubcategory_id"]').html('');
                var d =$('select[name="subcategory_id"]').empty();
                $.each(data, function(key, value){
                    $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                });
            },
        });
    } else {
        alert('danger');
    }
});

$('select[name="subcategory_id"]').on('change', function(){
    var subcategory_id = $(this).val();
    if(subcategory_id) {
        $.ajax({
            url: "{{  url('/category/sub-subcategory/ajax') }}/"+subcategory_id,
            type:"GET",
            dataType:"json",
            success:function(data) {
                var d =$('select[name="subsubcategory_id"]').empty();
                $.each(data, function(key, value){
                    $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name + '</option>');
                });
            },
        });
    } else {
        alert('danger');
    }
});
});
</script>

<script type="text/javascript">

    function mainThamUrl(input) {
        if(input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThmb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<script>
 
    $(document).ready(function(){
     $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
             
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                    .height(80); //create image element 
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
             
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });
     
    </script>
@endsection