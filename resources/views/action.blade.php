{{-- Edit Modal --}}
  <div class="modal fade" id="edit{{$job->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($job, [ 'method' => 'patch','route' => ['career.update', $job->id] ]) !!}
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Job Title</label>
                <input type="text" class="form-control" name="job_name" value="{{$job->job_name}}">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Company</label>
                <input type="text" class="form-control" name="company" value="{{$job->company}}">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" value="{{$job->salary}}">
            </div>
            <div class="col-md-12">
                <label for="inputState" class="form-label">Category</label>
                <select class="form-select" name="category">
                    <option value="Engineering">Engineering</option>
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                    <option value="Accountancy">Accountancy</option>
                    <option value="Education">Education</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Description</label>
                <textarea rows="5" class="form-control" name="description">{{$job->description}}</textarea>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="{{$job->email}}">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Number</label>
                <input type="text" class="form-control" name="number" value="{{$job->number}}">
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
{{-- Edit modal --}}

{{-- Delete Modal --}}
  <div class="modal fade" id="delete{{$job->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($job, ['method'=>'delete', 'route'=>['career.delete', $job->id] ]) !!}
            <h4 class="text-center">Are you sure you want to delete this?</h4>
            <h5 class="text-center">Job Name: {{$job->job_name}}</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
{{-- Delete Modal --}}
