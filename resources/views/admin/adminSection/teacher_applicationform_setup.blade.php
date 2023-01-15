@extends('masterAdmin')
@section('teacherApplicationForm')



<!-- content @s -->
<div class="nk-content ">
  <div class="container-fluid">
    <div class="nk-content-inner">
      <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">


          <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
              <div class="nk-block-head-content">

              </div>
            </div>

            <div class="card card-bordered">
              <div class="card-inner">
                <div class="card-head">
                  <h5 class="card-title">Add Form Field</h5>
                </div>

                <form method="POST" action="{{ route('teacherFormsetupSubmit') }}">
                  @csrf

                  <div class="form-group col-md-4">
                    <label for="labelName">Label Name</label>
                    <input type="text" id="labelName" name="labelName" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="relatedField">Select Field</label>
                    <select id="relatedField" name="relatedField" class="form-control">

                      @foreach($formfields as $fields)

                      @if($fields->lebelName == null)

                      <option value="{{ $fields->relatedField }}">{{ $fields->relatedField }}</option>

                      @endif

                      @endforeach

                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>

                </form>
              </div>

            </div><!-- card -->
            <div class="card card-bordered">
              <div class="card-inner">
                <div class="card-head">
                  <h5 class="card-title">All Fields</h5>
                </div>
                <div>
                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        <th class="pro-id">Id</th>
                        <th class="pro-name">Related Field</th>
                        <th class="pro-name">label name</th>
                        <th class="pro-remove">Delete</th>
                        <th class="pro-status">Update</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($formfields)
                      @foreach($formfields as $field)
                      <tr>
                        <td>{{$field->id}}</td>
                        <td>{{$field->relatedField}}</td>
                        <td>{{$field->lebelName}}</td>
                        <td>
                          <form action="{{route('deleteTeacherFormField')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$field->id}}" name="field_id" id="field_id">
                            <button type="submit" class="btn btn-danger btn-delete-catagory">Delete</button>
                          </form>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_product_'.$field->id}}">
                            Update
                          </button>
                          <div class="modal fade" id="{{'update_product_' . $field->id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="update_product_lebel">Update Field</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body ">
                                  <form action="" class="" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                      <div class="">
                                        <input type="hidden" id="update_fieldId" name="update_fieldId" value="{{$field->id}}">
                                        <label for="update_relatedField">Label name</label><br>

                                       
                                        <input name="update_relatedField" id="update_relatedField" value="{{ $field->relatedField }}" read-only></br>


                                        <label for="update_labelName">label name</label><br>
                                        <input type="text" id="update_labelName" name="update_labelName" value="{{$field->lebelName}}" class="col-12"><br><br>

                                      </div>
                                      <br>

                                    </div>
                                  </form>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary btn-update-product">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                </div>
              </div>

            </div>

          </div><!-- .nk-block -->

        </div><!-- .components-preview -->
      </div>
    </div>
  </div>
</div>
<!-- content @e -->







<!--------------modal scripts------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/Javascript">

    $(".btn-update-product").on("click", function() {
         
    var $button = $(this);
    var id = $button.parent().prev().find("input#update_fieldId").val();
    var label =$button.parent().prev().find("input#update_labelName").val();
    var field = $button.parent().prev().find("select#update_relatedField").val();
    console.log(id,label,field);
    
   
 
$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{route('updateTeacherFormField')}}",
            data: {id:id,label:label,field:field},
            success:function(data){
              toastr.success(data.success);
          }
       });
  
    });


</script>

@endsection