<!-- Student Add Modal -->
<div wire:ignore.self class="modal fade" id="student_add_modal" tabindex="-1" role="dialog" aria-labelledby="student_add_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="student_add_modal_title">Add New Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="saveStudent">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" wire:model="email" class="form-control">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="">Course</label>
                    <input type="text" wire:model="course" class="form-control">
                    @error('course') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Student</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Student Add Modal -->
<div wire:ignore.self class="modal fade" id="student_edit_modal" tabindex="-1" role="dialog" aria-labelledby="student_edit_modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="student_edit_modal_title">Edit Student</h5>
        <button type="button" class="close" wire:click="closeModal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form wire:submit.prevent="updateStudent">
          <div class="modal-body">
              <div class="mb-3">
                  <label for="">Name</label>
                  <input type="text" wire:model="name" class="form-control">
                  @error('name') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3">
                  <label for="">Email</label>
                  <input type="email" wire:model="email" class="form-control">
                  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3">
                  <label for="">Course</label>
                  <input type="text" wire:model="course" class="form-control">
                  @error('course') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" wire:click="closeModal" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Student</button>
          </div>
      </form>
    </div>
  </div>
</div>

  <!-- Student Delete Modal -->
  <div wire:ignore.self class="modal fade" id="student_delete_modal" tabindex="-1" role="dialog" aria-labelledby="student_delete_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="student_delete_modal_title">Edit Student</h5>
          <button type="button" class="close" wire:click="closeModal" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="destroyStudent">
            <div class="modal-body">
                <h4 class="text-danger">Are You Sure To Delete Student?</h4>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="closeModal" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Yes! Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>