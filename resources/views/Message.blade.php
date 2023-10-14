@if(session('Insert_Message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> {{session('Insert_Message')}}
    </div>
@endif

@if(session('Update_Message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> {{session('Update_Message')}}
    </div>
@endif

@if(session('Delete_Message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> {{session('Delete_Message')}}
    </div>
@endif
