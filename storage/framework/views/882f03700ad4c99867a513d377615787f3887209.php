
<?php $__env->startSection('content'); ?>
    <div class="container-fluid p-0">
        <div class="row flex-nowrap main">

            <?php echo $__env->make('user.mentor.utama.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="col">
                <div class="row head py-4 align-items-center">
                    <div class="col-md-6 col-10 ps-md-5 ps-3">
                        <h4 class="">Mentor Dashboard</h4>
                    </div>
                    <div class="col-md-6 col-2 pe-md-5 pe-3">
                        <div class="head-content d-flex flex-row align-items-center justify-content-end gap-md-4 gap-2">
                            <a class="help d-flex flex-row align-items-center gap-md-2 gap-1" href="">
                                <img class="img-fluid" src="/assets/help-grey.png" alt="">
                                <h6 class="d-none d-md-inline">Help</h6>
                            </a>
                            <a href="">
                                <h6 class="pt-1 d-none d-md-inline">Mentor Name</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container main-content">
                    
                    <div class="row gap-2">
                        <a class="col-md-3 col-12 userCard p-0" href="/mentor/user/student">
                            <div class="col-md col-12 p-0 ">
                                <div class="headline d-flex align-items-center gap-3">
                                    <img src="/assets/pic.png" alt="">
                                    <h6>Editor</h6>
                                </div>
                            </div>
                            <div class="row px-3 countUser align-items-center text-center">
                                
                                <div class="col">
                                    <h4>1</h4>
                                    <h4>Students</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="detailCard ps-3 mt-2">
                                <h6>See the list of Students</h6>
                            </div>
                        </a>
                        <a class="col-md-3 col-12 userCard p-0">
                            <div class="headline text-center" style="background-color: var(--green)">
                                <h6>Essay Completed</h6>
                            </div>
                            <div class="row px-3 countUser align-items-center text-center">
                                
                                <div class="col">
                                    <h4>1</h4>
                                    <h4>Mentors</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="detailCard ps-3 mt-2">
                                <h6>See the list of Mentors</h6>
                            </div>
                        </a>
                        
                    </div>
                    
                </div>
                <div class="container main-content">
                    
                    <div class="row gap-2">
                        <a class="col-md-3 col-12 userCard p-0" href="/mentor/user/student">
                            <div class="col-md col-12 p-0 ">
                                <div class="headline d-flex align-items-center gap-3">
                                    <img src="/assets/pic.png" alt="">
                                    <h6>Students</h6>
                                </div>
                            </div>
                            <div class="row px-3 countUser align-items-center text-center">
                                
                                <div class="col">
                                    <h4>1</h4>
                                    <h4>Students</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="detailCard ps-3 mt-2">
                                <h6>See the list of Students</h6>
                            </div>
                        </a>
                        <a class="col-md-3 col-12 userCard p-0">
                            <div class="headline text-center">
                                <h6>New Request</h6>
                            </div>
                            <div class="row px-3 countUser align-items-center text-center">
                                
                                <div class="col">
                                    <h4>1</h4>
                                    <h4>Essay Editing</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="detailCard ps-3 mt-2">
                                <h6>See the list of Mentors</h6>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.mentor.utama.utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ALL-in\PLATFORM\editing-v2\resources\views/user/mentor/dashboard.blade.php ENDPATH**/ ?>