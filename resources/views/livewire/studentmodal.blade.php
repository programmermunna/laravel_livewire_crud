<!-- Student Add Modal -->
<div class="modal fade" id="student_add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="saveStudent">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" wire:model="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" wire:model="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Course</label>
                    <input type="text" wire:model="course" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>