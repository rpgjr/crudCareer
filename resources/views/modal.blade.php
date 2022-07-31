<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="addNew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
        <form class="row g-3" action="{{ route('save.career') }}" method="post">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                @csrf
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Job Title</label>
                    <input type="text" class="form-control" name="job_name">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Company</label>
                    <input type="text" class="form-control" name="company">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary">
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
                    <textarea class="form-control" rows="5" name="description"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Number</label>
                    <input type="text" class="form-control" name="number">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
    </div>
</form>
  </div>
