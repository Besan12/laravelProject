<?php $__env->startSection('content'); ?>
<!--Main-->
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

               
                    <!-- /Cards Section Ends Here -->

                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Course Table
                            </div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">id</th>
                                        <th class="border w-1/6 px-4 py-2">name</th>
                                        <th class="border w-1/6 px-4 py-2">photo</th>
                                        <th class="border w-1/6 px-4 py-2">describtion</th>
                                        <th class="border w-1/7 px-4 py-2">created_at</th>
                                        <th class="border w-1/5 px-4 py-2">updated_at</th>
                                        <th class="border w-1/5 px-4 py-2">deleted_at</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-check text-green-500 mx-2"></i>
                                            </td>
                                            <td class="border px-4 py-2">
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-edit"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-times text-red-500 mx-2"></i>
                                            </td>
                                            <td class="border px-4 py-2">
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-edit"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                     
                                     
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->
                </div>
            </main>
            <!--/Main-->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboardMain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\assignment\resources\views/dashboard/course.blade.php ENDPATH**/ ?>