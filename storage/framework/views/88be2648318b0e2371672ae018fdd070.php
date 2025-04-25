

<?php $__env->startSection('content'); ?>

<div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="<?php echo e(route('student.update', $student->id)); ?>">
                <?php echo csrf_field(); ?>
                    <?php echo method_field("PATCH"); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="emp_name" value="<?php echo e($student->emp_name); ?>">
                        </div>
                        <div class="col-md-6">
                            <label>Employee DOB</label>
                            <input type="date" class="form-control" name="dob" value="<?php echo e($student->dob); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone"  value="<?php echo e($student->phone); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                        <div class="col-md-6 mt-3">
                            <input type="submit" class="btn btn-secondary" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('css'); ?>
        <style>
            .form-area{
                padding: 20px;
                margin-top: 20px;
                background-color:#b3e5fc;
            }
            .bi-trash-fill{
                color:red;
                font-size: 18px;
            }
            .bi-pencil{
                color:green;
                font-size: 18px;
                margin-left: 20px;
            }
        </style>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hashini\Desktop\Laravel Project\employee-app\resources\views/pages/edit.blade.php ENDPATH**/ ?>